<?php
    require_once "Sportista.php";
    require_once "Kosarkas.php";

    $k1 = new Kosarkas('Marko', 'Miric', 1999, 'Beograd', [19, 24, 21, 5, 34,]);
    $k2 = new Kosarkas('Petar', 'Petric', 1993, 'Novi Sad', [12, 14, 13, 5, 53, 31, 15]);
    $k3 = new Kosarkas('Lazar', 'Lazic', 1992, 'Krusevac', [11, 44, 31, 35, 33, 41, 45, 13]);
    $k4 = new Kosarkas('Vuk', 'Vuskovic', 1997, 'Subotica', [32, 14, 21, 5, 30, 31, 15, 1, 13, 18]);
    $k5 = new Kosarkas('Mirko', 'Mitric', 1987, 'Nis', [3, 24, 21, 15, 3, 31, 15, 8, 9]);

    $kosarkasi = [$k1, $k2, $k3, $k4, $k5];
    

    function najviseUtakmica($kosarkasi){
        $max = 0;
        foreach($kosarkasi as $kosarkas){
            $i=count($kosarkas->getPoeni()); 
            if($max<$i){
                $max=$i;
                $ime=$kosarkas->getIme();
                $prezime=$kosarkas->getPrezime();
            }
        }
        $imePrezime = "$ime $prezime";
        return $imePrezime;
    }
    $rez = najviseUtakmica($kosarkasi);
    echo "<p>Kosarkas koji je odigrao najvise  utakmica je: $rez</p>";
    
    echo "<hr>";

    function najvisePoena($kosarkasi){
        $max = 0;
        $ime = '';
        foreach($kosarkasi as $kosarkas){
            $niz = $kosarkas->getPoeni();
            for($i=0; $i<count($niz); $i++){
                if($niz[$i] > $max){
                    $max=$niz[$i];
                    $ime=$kosarkas->getIme();
                    $prezime=$kosarkas->getPrezime();
                }
            }
        }
        $imePrezime = "$ime $prezime";
        return $imePrezime;
    }
    $rez = najvisePoena($kosarkasi);
    echo "<p>Kosarkas koji je postigao najvise poena na jednom mecu je: $rez</p>";

    echo "<hr>";

    function najviseProsecnoPoena($kosarkasi){
        $max = 0;
        foreach($kosarkasi as $kosarkas){
            $zbir = 0;
            $brojac = 0;
            $nizPoena = $kosarkas->getPoeni();
            for($i=0; $i<count($nizPoena); $i++){
                $zbir += $nizPoena[$i];
                $brojac++;
            }
            $prosek = $zbir/$brojac;
    
            if($prosek>$max){
                $max=$prosek;
                $ime=$kosarkas->getIme();
                $prezime=$kosarkas->getPrezime();
            }
        }
        $imePrezime = "$ime $prezime";
        return $imePrezime;
    }
    $rez = najviseProsecnoPoena($kosarkasi);
    echo "<p>Kosarkas koji ima najvise poena u proseku je $rez</p>";
?>