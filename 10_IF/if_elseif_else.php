<?php
    $broj = 30;
    if ($broj <= 10)
    {
        echo "<p>Broj prve desetice</p>";
    }
    elseif ($broj <= 20)
    {
        echo "<p>Broj druge desetice</p>";
    }
    else
    {
        echo "<p>Broj je veci od 20</p>";
    }

    // Alternativno
    if ($broj > 20)
    {
        echo "<p>Broj je veci od 20</p>";
    }
    elseif ($broj > 10)
    {
        echo "<p>Broj druge desetice</p>";
    }
    else 
    {
        echo "<p>Broj prve desetice</p>";
    }

    // Zadatak 7
    $poeni = 73;
    if ($poeni <= 50)
    {
        echo "<p>Student je pao ispit</p>";
    }
    elseif ($poeni <= 60)
    {
        echo "<p>Ocena 6</p>";
    }
    elseif ($poeni <= 70)
    {
        echo "<p>Ocena 7</p>";
    }
    elseif ($poeni <= 80)
    {
        echo "<p>Ocena 8</p>";
    }
    elseif ($poeni <= 90)
    {
        echo "<p>Ocena 9</p>";
    }
    else
    {
        echo "<p>Ocena 10</p>";
    }

    // Zadatak 8                                           // Kako profesor radi
    $dan = date("l");                                      // $dan = date("w");
    if ($dan == "Monday") {                                // if ($dan == 0){ echo "Vikend"; }  nedelja           // elseif ($dan == 6){ echo "vikend"; } subota
        echo "<p>Danas je radni dan</p>";                  // else { echo "radni dan"; }  ostali dani
    }
    elseif ($dan == "Tuesday") {
        echo "<p>Danas je radni dan</p>";
    }
    elseif ($dan == "Wednesday") {
        echo "<p>Danas je radni dan</p>";
    }
    elseif ($dan == "Thursday") {
        echo "<p>Danas je radni dan</p>";
    }
    elseif ($dan == "Friday") {
        echo "<p>Danas je radni dan</p>";
    }
    else {
        echo "<p>Danas je vikend</p>";
    }
    
    // Zadatak 9                                             
    $vreme = date("H");                                   
    if ($vreme < 12) {                                
        echo "<p>Dobro jutro</p>";                            
    }                                                         
    elseif ($vreme < 18) {
        echo "<p>Dobar dan</p>";
    }
    else {
        echo "<p>Dobro vece</p>";
    }

    // Zadatak 10                                             
    $d1 = 19;
    $m1 = 12;
    $g1 = 2002;
    $d2 = 11;
    $m2 = 1;
    $g2 = 2002;
    if ($g1 < $g2){
        echo "<p>Raniji datum je $d1.$m1.$g1.</p>";
    }
    elseif ($g2 < $g1){
        echo "<p>Raniji datum je $d2.$m2.$g2.</p>";
    }
    elseif ($m1 < $m2){
        echo "<p>Raniji datum je $d1.$m1.$g1.</p>";
    }
    elseif ($m2 < $m1){
        echo "<p>Raniji datum je $d2.$m2.$g2.</p>";
    }
    elseif ($d1 < $d2){
        echo "<p>Raniji datum je $d1.$m1.$g1.</p>";
    }
    elseif ($d2 < $d1){
        echo "<p>Raniji datum je $d2.$m2.$g2.</p>";
    }
    else {
        echo "<p>Datumi su isti</p>";
    }


    // Zadatak 11
    $vreme = date("H");
    if ($vreme < 9) {
        echo "<p>Firma ne radi</p>";
    }
    elseif ($vreme >= 17) {
        echo "<p>Firma ne radi</p>";
    }
    else {
        echo "<p>Firma radi</p>";
    }

    // Zadatak 12
    $p1 = 9;    // prvi lekar kad pocinje
    $k1 = 17;   // kad zavrsava
    $p2 = 11;
    $k2 = 18;
    if ($k1 < $p2) {
        echo "<p>Ne preklapaju se</p>";
    }
    elseif ($k2 < $p1) {
        echo "<p>Ne preklapaju se</p>";
    }
    else {
        echo "<p>Preklapaju se</p>";
    }

    // Zadatak 13
    $n = 13;
    if ($n % 2 == 0) {
        echo "<p>$n je paran</p>";
    }
    else {
        echo "<p>$n je neparan</p>";
    }

    // Zadatak 15
    $a = 10;
    $b = 14;
    if ($a > $b) {
        $s = ($a - $b);
        echo "<p>Rezultat je $s</p>";
    }
    else {
        $s = ($b - $a);
        echo "<p>Rezultat je $s</p>";
    }

    // Zadatak 16
    $c = 2;
    if ($c <= 0) {
        $d = $c - 1;
        echo "<p>Njegov prethodnik je $d</p>";
    }
    else {
        $d = $c + 1;
        echo "<p>Njegov sledbenik je $d</p>";
    }

    // Zadatak 17
    $a = 5;
    $b = 9;
    $c = -3;

    $max = $a;
    if ($b > $max) {
        $max = $b;
    }
    if ($c > $max) {
        $max = $c;
    }

    $min = $a;
    if ($b < $min) {
        $min = $b;
    }
    if ($c < $min) {
        $min = $c;
    }

    $sr = $a + $b + $c - ($min + $max);

    echo "<p>$min <= $sr <= $max</p>";
    
?>