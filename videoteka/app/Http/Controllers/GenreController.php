<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\App;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $locale = App::currentLocale(); // en/sr

        //en-> sort po name_en
        //sr-> sort po name_sr

        if($locale=='en') {
            $data = Genre::orderBy('name_en')->paginate(5);
        } elseif($locale=='sr'){
            $data = Genre::orderBy('name_sr')->paginate(5);
        } else{
            // all dovlaci sve podatke iz tabele genres
            $data = Genre::paginate(5);
        }           

        return view('genre.index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('genre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_en' => 'required|unique:genres,name_en|alpha',
            'name_sr' => 'nullable|unique:genres,name_sr|alpha'
        ]);
      
        // Ovo se izvrsava ukoliko je forma prosla validaciju

        /* 1.create
        Genre::create(['id'=>5, 'name_en'=>'mistery', 'name_sr'=>'misterija']);
        2.instanca klase
        $g = new Genre;
        $g->name_en = 'mistery';
        $g->name_sr = 'misterija';
        $g->save();*/

        Genre::create($request->all());
        
        $request->session()->flash('alertType', 'success');
        $request->session()->flash('alertMsg', 'Successfully added.');

        return redirect()->route('genre.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        return view('genre.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        $request->validate([
            'name_en' => [
                'required', 
                //'unique:genres, name_en',
                Rule::unique('genres', 'name_en')->ignore($genre->id),
                'alpha'],
            'name_sr' => [ 
                'required', 
                //'unique:genres, name_sr',
                Rule::unique('genres', 'name_sr')->ignore($genre->id),
                'alpha']
        ]);

        $genre->update($request->all());

        $request->session()->flash('alertType', 'success');
        $request->session()->flash('alertMsg', 'Successfully updated.');

        return redirect()->route('genre.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        $genre->delete();

        session()->flash('alertType', 'success');
        session()->flash('alertMsg', 'Successfully deleted.');

        return redirect()->route('genre.index');
    }
}
