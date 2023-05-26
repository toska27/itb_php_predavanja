<?php

    require_once "Vozilo.php";
    require_once "Automobil.php";

    $v = new Vozilo('a', 'b', 'c');
    $v->ispis();

    // echo $v->privatnoPolje; -> GRESKA: van klase ne mozemo pristupiti privatnim poljima i metodama
    // echo $v->zasticenoPolje; -> GRESKA: van klase ne mozemo pristupiti zasticenim poljima i metodama
    echo $v->javnoPolje;  // -> OK: bilo gde mozemo da pristupamo javnim poljima i metodama

    $a = new Automobil('d', 'e', 'f', 5);
    $a->ispis();
    $a->ispisAuto();

?>