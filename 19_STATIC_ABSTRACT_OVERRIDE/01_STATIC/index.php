<?php
    require_once "Krug.php";

    $k1 = new Krug(6);
    $k2 = new Krug(15);
    $k3 = new Krug(2);
    //$k3->pi = 3.14159; // ovako postavimo ako je public polje
    $krugovi = [$k1, $k2, $k3];

    foreach($krugovi as $krug){
        $o = $krug->obimKruga();
        $p = $krug->povrsinaKruga();
        echo "<p>Obim kruga je $o , a povrsina $p</p>";
    }

    echo Krug::PI; // konstanta Moze da se ovde pozove ovako, ne moze self
    echo "<br>";  
    echo Krug::getPI();
    echo "<br>";
    Krug::setPI(3.14159); // menjamo vrednost staticu
    echo Krug::getPi(); // preko static stavili smo vise decimala
    echo "<hr>";

    $d = new Krug(2.7);
    echo $d->povrsinaKruga();
    echo "<br>";
    Krug::setBrojDecimala(4); // menjamo vrednost staticu
    echo $d->povrsinaKruga(); //Krug::brojKrugova = 2
    echo "<br>";

    echo "<p>Broj krugova do sada je: " .Krug::getBrojKrugova(). "</p>";

    $f = new Krug(7);  // Krug::brojKrugova = 2
    echo "<p>Broj krugova do sada je: " .Krug::getBrojKrugova(). "</p>";
?>