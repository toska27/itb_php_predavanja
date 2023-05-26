<?php

    require_once "Automobil.php";

    /*
        OVAKO SMO RADILI DOK JE U OSNOVNOJ KLASI SVE BILO PUBLIC
    $v = new Vozilo();
    //$v->boja = 'bela';
    //$v->tip = 'BMW';
    //echo "<p>$v->boja, $v->tip</p>";
    $v->voziVozilo();
    // $v->voziAutomobil();  -> ovo ne moze (osnovna klasa nema polja i
    //                          metode iz izvedenih klasa)

    $a = new Automobil();
    //$a->boja = 'zuta';
    //$a->tip = 'Peugeout';
    //echo "<p>$a->boja, $a->tip</p>";
    $a->voziVozilo();       // ovo moze: izvdena klasa je nasledila polja i 
                            // metode osnovne klase
    $a->voziAutomobil();    // izvedena klasa moze da ima svoja polja i metode */

    $v = new Vozilo('bela', 'BMW');
    $v->voziVozilo();

    $a = new Automobil('zuta', 'Peugeout');
    // $a->boja = 'plava';  -> ne moze kad je protected
    $a->voziVozilo();
    $a->voziAutomobil();
?>