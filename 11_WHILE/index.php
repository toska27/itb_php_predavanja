<?php
    //While petlja
    /*1. Posatavite pocetnu vrednost*/ 
    /*2. while(uslov) */

    // Zadatak 1
    // pod a
    $i = 1;
    while($i <= 20) {
        echo "$i ";
        //echo "<p>$i</p>";  -> pod b
        $i++;
    }
    echo "<hr>";

    // Isti izrazi su
    // $i++;
    // $i += 1;
    // $i = $i + 1;

    // Isti izrazi su
    // $i--;
    // $i -= 1;
    // $i = $i - 1;


    // Zadatak 2
    $i = 20;
    while($i >= 1) {
        echo "$i ";
        $i--;
    }
    // $i ima vrednost 0 nakon izvrsenja ove petlje
    echo "<hr>";

    // Zadatak 4
    $n = 5;
    $i = 1;
    while($i <= $n){
        if($i % 3 == 0){
            echo "<p style='color:red;'>Hello $i</p>";
        }
        elseif($i % 3 == 1) {
            echo "<p style='color:blue;'>Hello $i</p>";
        }
        else {
            echo "<p style='color:orange;'>Hello $i</p>";
        }
        $i++;
    }

    // 2.nacin
    $n = 5;
    $i = 1;
    while($i <= $n){
        if($i % 3 == 0){
            $boja = "purple";
        }
        elseif($i % 3 == 1) {
            $boja = "lime";
        }
        else {
            $boja = "yellow";
        }
        echo "<p style='color:$boja;'>Hello $i</p>";
        $i++;
    }

    // 3. nacin
    $n = 7;
    $i = 1;
    while($i <= $n){
        $boja = "magenta";
        if($i % 3 == 0){
            $boja = "purple";
        }
        elseif($i % 3 == 1) {
            $boja = "lime";
        }
        echo "<p style='color:$boja;'>Hello $i</p>";
        $i++;
    }
    echo "<hr>";

    // Zadatak 3
    $i = 2;
    while($i <= 20) {
        echo "$i ";
        $i += 2;
    }
    echo "<hr>";

    // Zadatak 5
    $n = 6;
    $i = 1;
    while($i <= $n){
        if ($i % 2 == 0){
            echo "<img src='./img/slika1.jpg' alt='slika' style='border:3px solid orange;'>";
        }
        else{
            echo "<img src='./img/slika1.jpg' alt='slika' style='border:3px solid red;'>";
        }
        $i++;
    }
    echo "<hr>";

    // Dodatni
    $n = 10;
    $i = 1;
    
    while($i <= $n) {
        $boja = 'rgb(' . rand(0, 255) . ',' . rand(0, 255) . ',' . rand(0, 255) . ')';
        echo "<p style='color:$boja;'>World</p>";
        $i++;
    }
    echo "<hr>";
    
    // Zadatak 6
    $i = 1;
    $suma = 0;
    while($i <= 100) {
        $suma += $i;
        $i++;
    }
    echo "<p>Suma brojeva od 0 do 100 je: $suma</p>";
    echo "<hr>";

    // Zadatak 7
    $i = 1;
    $n = 10;
    $suma = 0;
    while($i <= $n) {
        $suma += $i;
        $i++;
    }
    echo "Suma brojeva od 1 do $n je: $suma";
    echo "<hr>";

    // Zadatak 8
    $n = 10;
    $m = 40;
    $suma = 0;
    $n2 = $n;
    while($n <= $m) {
        $suma += $n;
        $n++;
    }
    echo "Suma brojeva od $n2 do $m je: $suma";
    echo "<hr>";

    //Zadatak 9
    $n = $n2 = 2;
    $m = 6;
    $suma = 1;
    while($n <= $m) {
        $suma *= $n;
        $n++;
    }
    echo "Proizvod brojeva od $n2 do $m je: $suma";
    echo "<hr>";

    //Zadatak 10
    $n = 5;
    $m = 10;
    $suma1 = 0;
    $suma2 = 0;
    while($n <= $m) {
        if($n % 2 == 0){
            $suma1 += ($n * $n);   // $i**2 umesto $i * $i
        }
        else {
            $suma2 += ($n * $n * $n);  // $i**3 umesto $i * $i * $i
        }
        $n++;
    }
    echo "Suma kvadrata parnih brojeva je: $suma1 , a suma kubova neparnih brojeva je $suma2";
    echo "<hr>";

    // Zadatak 11
    $k = $k1 = 12;
    $i = 1;
    $d = 0;
    while($i <= $k) {
        if($k % $i == 0) {
            $d++;
        }
        $i++;
    }
    echo "Broj $k1 je deljiv sa $d broja";
    echo "<hr>";
    
    // Zadatak 12
    $n = 10;
    $i = 1;
    $brojac = 0;
    while($i <= $n) {
        if($n % $i == 0) {
            $brojac++;
        }
        $i++;
    }
    if($brojac > 2){
        echo "Broj $n nije prost broj";
    }
    else{
        echo "Broj $n je prost broj";
    }
    
?>