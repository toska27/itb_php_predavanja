<?php

    require_once "Zaposleni.php";

    $o1 = new Osoba('Pera', 'Peric', 1989);
    $o1->ispisOsobe();

    $z = new Zaposleni('Mara', 'Maric', 1975, 80000, 'profesor');
    $z->ispisZaposleni();

    $z1 = new Zaposleni('Milica', 'Milic', 1963, 80000, 'krojac');
    $z2 = new Zaposleni('Mika', 'Mikic', 1989, 70000, 'ucitelj');
    $z3 = new Zaposleni('Zika', 'Zikic', 1979, 50000, 'obucar');
    $z4 = new Zaposleni('Andrija', 'Jaksic', 1995, 100000, 'fudbaler');

    $zaposleni = [$z1, $z2, $z3, $z4];

    // Prosecna plata svih zaposlenih
    function prosekPlate($zaposleni){
        $zbir = 0;
        foreach($zaposleni as $radnik){
            $zbir+=$radnik->getPlata();
        }
        if (count($zaposleni)){
            $prosek = $zbir / count($zaposleni);
            return $prosek;
        } else {
            $prosek = 0;
            return $prosek;
        }
    }
    $prosecnaPlata = prosekPlate($zaposleni);
    echo "<p>Prosecna plata svih zaposlenih je: $prosecnaPlata</p>";

    function natprosecnaPlata($zaposleni, $radnik){
        $prosecnaPlata = prosekPlate($zaposleni);
        if($radnik->getPlata() > $prosecnaPlata){
            return true;
        } else{
            return false;
        }
    }
    $rezultat = natprosecnaPlata($zaposleni, $z1);
    if($rezultat){
        echo "<p>Zaposleni ima nadprosecnu platu</p>";
    } else{
        echo "<p>Zaposleni ima ispod proseka platu</p>";
    }
?>