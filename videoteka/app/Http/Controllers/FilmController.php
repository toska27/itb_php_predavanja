<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Person;
use Illuminate\Support\Facades\Storage;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //dd(Genre::all()->sortBy('name'));
        $genres = Genre::all()->sortBy('name');
        //$genres = Genre::orederBy('name_en')->get();

        $people = Person::all()->sortBy('fullName');

        return view('film.create', compact('genres', 'people'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //1. validacija podataka
        $request->validate([
            'name' => 'required',            
            'running_h' => 'nullable|numeric|min:1|integer',
            'running_m' => 'nullable|numeric|between:1,59|integer',
            'year' => 'required|date_format:Y|before_or_equal:today',
            'rating' => 'required|decimal:1|between:1,10',
            'directors' => 'required|array',
            'writers' => 'required|array',
            'stars' => 'required|array',
            'genres' => 'required|array',
            'image' => 'image|between:1,2048'
        ]);

        //2. upis u tabelu Film
        $film = Film::create($request->only('name','running_h','running_m','year','rating'));
        //3. upis u tabelu film_genre
        $film->genres()->attach($request->genres);
        //4. upis u tabelu film_director, film_writer, film_star
        $film->directors()->attach($request->directors);
        $film->writers()->attach($request->writers);
        $film->stars()->attach($request->stars);

        //proveravamo da li forma ima sliku i da li je slika validno otpremljena
        if($request->hasFile('image') && $request->file('image')->isValid()){
            //generisemo naziv slike id filma i ekstenzija fajla
            $imgName = $film->id . '.' . $request->file('image')->extension();
            //smestamo fajl u folder public/film_images
            Storage::disk('public')
            ->putFileAs('film_images', $request->file('image'), $imgName);
         
            //u bazi belezimo putanju od public foldera
            $film->image = 'film_images/'.$imgName;
            $film->save();
         }
         

        return redirect()->route('film.show', ['film' => $film]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        //ideja je da sort zanrova bude po abecedi
        $zanrovi = $film->genres; //OVO VRACA KOLEKCIJU moze odmah da se koristi za prolazak
        $upit = $film->genres(); //OVO VRACA UPIT
        $zanrovi2 = $upit->get(); //TEK SADA IMATE KOLEKCIJU ZA PROLAZAK

        $zanroviSort = $film->genres->sortBy('name'); //dozvoljeno je da se navedu vestacki atributi
        $upit = $film->genres()->orderBy('name'); //OVO NE MOZE JER NAME NEMA U BAZI
        $zanroviOreder = $film->genres()->orderBy('name_en')->get(); //ovo moze 



        //dd($film->genres);
        return view('film.show', ['film'=>$film]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        $genres = Genre::all()->sortBy('name');
        $people = Person::all()->sortBy('fullName');

        return view('film.edit', compact('film', 'genres', 'people'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Film $film)
    {
        $request->validate([
            'name' => 'required',            
            'running_h' => 'nullable|numeric|min:1|integer',
            'running_m' => 'nullable|numeric|between:1,59|integer',
            'year' => 'required|date_format:Y|before_or_equal:today',
            'rating' => 'required|decimal:1|between:1,10',
            'directors' => 'required|array',
            'writers' => 'required|array',
            'stars' => 'required|array',
            'genres' => 'required|array',
            'image' => 'image|between:1,2048'
        ]);

        $film->update($request->only('name','running_h','running_m','year','rating'));
        $film->genres()->sync($request->genres);
        $film->directors()->sync($request->directors);
        $film->writers()->sync($request->writers);
        $film->stars()->sync($request->stars);

        if($request->hasFile('image') && $request->file('image')->isValid()){ 
            if($film->image && Storage::disk('public')->exists($film->image)){
                Storage::disk('public')->delete($film->image);
            }           
            $imgName = $film->id . '.' . $request->file('image')->extension();
            Storage::disk('public')
            ->putFileAs('film_images', $request->file('image'), $imgName);        
            $film->image = 'film_images/'.$imgName;
            $film->save();
        }elseif($request->image_remove=="yes"){
            if($film->image && Storage::disk('public')->exists($film->image)){
                Storage::disk('public')->delete($film->image);
            }
            $film->image = null;
            $film->save();
        }
        return view('film.show', ['film'=>$film]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        //
    }
}