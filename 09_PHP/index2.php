<?php
    /* Zadatak 3 */
    $cena = 1400;
    $nov = 2000;
    $kusur = $nov - $cena;
    echo "Kusur je: " . $kusur;
    
    echo "<hr>";
    echo "<br>";

    /* Zadatak 4 */
    $eur = 100;
    $kursEur = 117.5;
    $din = $eur * $kursEur;
    echo "Vrednost u dinarima je: " . $din;
    
    echo "<hr>";
    echo "<br>";

    /* Zadatak 5 */
    $din = 10000;
    $eur = $din / $kursEur;
    echo "Vrednost u eurima je: " . $eur;
    
    echo "<hr>";
    echo "<br>";

    /* Zadatak 6 */
    $eur = 100;
    $kursEurDin = 117.5;
    $kursDolDin = 106.7;
    //$din = $eur * $kursEurDin; //broj dinara koji imamo nakon konverzije
    //$dol = $din / $kursDolDin; //broj dolara koji imamo nakon konverzije
    $dol = $eur * $kursEurDin / $kursDolDin;
    echo "Vrednost u dolarima je: " . $dol;
    
    echo "<hr>";
    echo "<br>";

    //Zadatak 10
    $cena = 70;
    $popust = 20;
    $cenaBezPopusta = $cena * 100 / (100 - $popust);
    echo "Cena bez popusta je: " . $cenaBezPopusta;
    
    echo "<hr>";
    echo "<br>";

    //Zadatak 11
    //Ako bocica ima 3 tableta pije 1 dan 0 neiskorsceno i  tako za svaki dan posebno
    $n = 56;
    $brojDana = floor($n / 3);
    $brojNeiskorTableta = $n % 3; //ostatak pri deljenju
    echo "Broj dana da pije tabletu je: " . $brojDana . ", a broj neiskoriscenih tableta je: " . $brojNeiskorTableta;
    
    echo "<hr>";
    echo "<br>";

    
?>