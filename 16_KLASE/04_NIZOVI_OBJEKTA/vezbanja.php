<?php

    /* Kada ukljucujemo fajl:

        include "Film.php";      // ako ne postoji fajl, samo ignorisi
        inluce_once "Film.php";  // isto kao include, ali ako je ovaj fajl vec ukljucen ranije onda ga ne ukljuci ponovo
        require "Film.php";      // ako ne postoji fajl, prijavljuje gresku
        require_once "Film.php"; // isto kao require, ali ako je ovaj fajl vec ukljucen onda ga ne ukljuci ponovo
    */

    require_once "film.php";
    require_once "NemiFilm.php";

    $f1 = new Film('Lord of the Rings', 'Peter Jackson', 2001, [7, 6, 9, 10]);
    //$f1->stampaj();

    $f2 = new Film('Kill Bill', 'Quentin Tarantino', 2003, [8, 9, 9, 7]);
    //$f2->stampaj();

    $f3 = new Film('Titanic', 'James Cameron', 1999, [10, 9, 7, 10]);
    //$f3->stampaj();

    $filmovi = [$f1, $f2, $f3];
    foreach($filmovi as $film){
        $film->stampaj();
    }

    function prosecnaOcena($filmovi){
        $zbir = 0;
        foreach($filmovi as $f){
            $zbir += $f->prosek();
        }
        $n = count($filmovi);
        if($n>0){
            return $zbir/$n;
        } else{
            return 0;
        }
        // moze i ovako -> return ($n>0) ? ($zbir/$n) : 0;
    }

    $prosecna = prosecnaOcena($filmovi);
    echo "<p>Prosecna ocena svih filmova je: $prosecna</p>";

    echo "<hr>";

    function vekFilmova($films, $vek){
        foreach($films as $film){
            $godinaIzdanja = $film->getGodinaIzdanja();
            $vekIzdanja = ceil($godinaIzdanja / 100);
            if($vekIzdanja == $vek){
                $film->stampaj();
            }
        }
    }

    echo "<p>Filmovi koji su izasli u 21.veku:</p>";
    vekFilmova($filmovi, 21);

    echo "<hr>";

    echo "<p>Filmovi koji su izasli u 20.veku:</p>";
    vekFilmova($filmovi, 20);

    echo "<hr>";

    // Napraviti funkciju osrednjiFilm kojoj se prosleđuje niz filmova a ona vraća film koji je najbliži prosečnoj oceni svih filmova.
    function osrednjiFilm($niz){
        $prosek = prosecnaOcena($niz);
        $najblizaVrednost = abs($niz[0]->prosek() - $prosek);
        $najbliziFilm = $niz[0];
        foreach($niz as $film){
            $vrednost = abs($film->prosek() - $prosek);
            if($vrednost<$najblizaVrednost){
                $najblizaVrednost = $vrednost;
                $najbliziFilm = $film;
            }
        }
        return $najbliziFilm;
    }

    $osf = osrednjiFilm($filmovi);
    echo "<p>Film najblizi prosecnoj vrednosti je: </p>";
    $osf->stampaj();

    echo "<hr>";

    // Napraviti funkciju najboljeOcenjeni kojoj se prosleđuje niz filmova, a ona vraća najbolje ocenjeni film.
    function najboljeOcenjeni($films){
        $najbolji = $films[0]->prosek();
        $najboljiFilm = $films[0];
        foreach($films as $film){
            if($film->prosek() > $najbolji){
                $najbolji = $film->prosek();
                $najboljiFilm = $film;
            }
        }
        return $najboljiFilm;
    }
    $best = najboljeOcenjeni($filmovi);
    echo "<p>Najbolje ocenjeni film je:</p>";
    $best->stampaj();

    echo "<hr>";

    // Napraviti funkciju najmanjaOcenaNajboljeg kojoj se prosleđuje niz filmova,
    // a ona određuje najbolji film i ispisuje njegovu najslabiju ocenu.
    function najmanjaOcenaNajboljeg($niz){
        $najboljiFilm = najboljeOcenjeni($niz);
        $oceneFilma = $najboljiFilm->getOcene();
        $minOcena = $oceneFilma[0];
        foreach($oceneFilma as $ocena){
            if($ocena<$minOcena){
                $minOcena = $ocena;
            }
        }
        return $minOcena;
    }
    $najmanjaOcena = najmanjaOcenaNajboljeg($filmovi);
    echo "<p>Najmanja ocena najbolje ocenjenog filma je: $najmanjaOcena</p>";

    echo "<hr>";

    // Napisati funkciju najmanjaOcena kojoj se prosleđuje niz filmova,
    // a koja vraća koja je najmanja ocena koju je bilo koji film dobio.
    function najmanjaOcena($niz){
        $ocenePrvogFilma = $niz[0]->getOcene();
        $minOcena = $ocenePrvogFilma[0];
        foreach($niz as $film){
            $ocene = $film->getOcene();
            foreach($ocene as $ocena){
                if($ocena<$minOcena){
                    $minOcena = $ocena;
                }
            }
        }
        return $minOcena;
    }
    $najmanjaOdSvih = najmanjaOcena($filmovi);
    echo "<p>Najmanja ocena od svih ocena je: $najmanjaOdSvih</p>";

    echo "<hr>";

    // Napisati funkciju najcescaOcena kojoj se prosleđuje niz filmova,
    // a ona vraća ocenu koju su filmovi najčešće dobijali.
    function najcescaOcena($niz){
        $arr = [];
        $brojanje = [];
        $najvisePonavljanja = 0;
        $najvisePonavljaniBroj = null;
        foreach($niz as $film){
            $ocene = $film->getOcene();
            foreach($ocene as $broj){
                if(isset($brojanje[$broj])){
                    $brojanje[$broj]++;
                } else {
                    $brojanje[$broj] = 1;
                }
                if($brojanje[$broj] > $najvisePonavljanja){
                    $najvisePonavljanja = $brojanje[$broj];
                    $najvisePonavljaniBroj = $broj;
                }
            }
        }
        return $najvisePonavljaniBroj;
    }
    $ocena= najcescaOcena($filmovi);
    echo "<p>Najcesce ponavljana ocena je: $ocena</p>";

    echo "<hr>";

    // Napraviti funkciju iznadOcene kojoj se prosleđuje ocena i niz filmova,
    // a ona vraća niz onih filmova koji su bolje ocenjeni od prosleđene ocene.
    function iznadOcene($niz, $ocena){
        $nizFilmova = [];
        foreach($niz as $film){
            $prosek = $film->prosek();
            if($prosek > $ocena){
                $nizFilmova[] = $film;
            }
        }
        return $nizFilmova;
    }
    $ocena = 8.2;
    $nizFilmova = iznadOcene($filmovi, $ocena);
    echo "<p>Filmovi koji imaju ocenu bolju od $ocena su: </p>";
    foreach($nizFilmova as $film){
        echo $film->stampaj();
    }
    
    echo "<hr>";

    // Napisati funkciju iznadOceneNoviji kojoj se prosleđuje ocena i niz filmova
    // a koja treba da na ekranu da ispiše sve podatke o najnovijem filmu koji zadovoljava prosleđenu ocenu

?>