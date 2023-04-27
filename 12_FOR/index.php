<?php
    // Zadatak 1
    for ($i=1;$i<=20;$i++) {
        echo "$i ";
    }

    echo "<hr>";

    // Zadatak 2
    for ($i=20;$i>=1;$i--) {
        echo "$i ";
    }

    echo "<hr>";

    // Zadatak 3
    for($i=2;$i<=20;$i+=2) {
        echo "$i ";
    }

    echo "<hr>";

    // Zadatak 4
    for($i=5;$i<=15;$i++) {
        $i2 = $i + $i;
        echo "$i2 ";
    }

    echo "<hr>";

    // Zadatak 5
    $a = 0;
    for($i=1;$i<=100;$i++) {
        $a += $i;
    }
    echo "Suma brojeva od 1 do 100 je $a";

    echo "<hr>";

    // Zadatak 6
    $a = 0;
    $n = 5;
    for($i=1;$i<=$n;$i++) {
        $a += $i;
    }
    echo "Suma brojeva od 1 do $n je $a";

    echo "<hr>";

    // Zadatak 7
    $m = 9;
    $a = 0;
    $n = $n1 = 4;
    for($n = $n1; $n<=$m; $n++) {
        $a += $n;
    }
    echo "Suma brojeva od $n1 do $m je $a";

    echo "<hr>";

    // Zadatak 8
    $n = $n1 = 2;
    $m = 4;
    $a = 1;
    for($n = $n1; $n<=$m; $n++) {
        $a *= $n;
    }
    echo "Proizvod brojeva od $n1 do $m je $a";

    echo "<hr>";

    // Zadatak 9
    $n = $n1 = 3;
    $m = 5;
    $a = 0;
    for($n=$n1; $n<=$m; $n++) {
        $a += $n * $n;  // $a += $n**2;
    }
    echo "Suma kvadrata brojeva od $n1 do $m je $a";

    echo "<hr>";

    //Zadatak 10
    $n = 7;
    for($i = 1; $i<=$n; $i++) {
        if ($i % 3 == 1) {
        echo "<img src='img/1.jpg' style=height:300px; >";
        }
        elseif ($i % 3 == 2) {
            echo "<img src='img/2.jpg' style=height:300px; >";
        }
        else{
            echo "<img src='img/3.jpg' style=height:300px; >";
        }
    }

    /*
    2. nacin
    $n = 7;
    for($i=1; $i<=$n; $i++) {
        $ost = $i%3;
        if($ost == 0){
            $ost = 3;
        }
        echo "<img src='img/$ost.jpg' style=height:300px; >";
    }

    3. nacin
    Probaj korsicenjem naredbe switch
    */

    echo "<hr>";
    // Zadatak
    //Da je zadatak glasio da treba n puta ispiste tri slike
    $n = 4;
    for($i=1; $i<=$n; $i++) {
        for($j=1; $j<=3; $j++){
            echo "<img src='img/$j.jpg' style=height:300px; >";
        }
        echo "<br>";
    }

    // ZADATAK
    // Sahovsku tablu da napravimo 8*8 preko for petlje 
    // Mislim da je n=8 i j=8

    echo "<hr>";

    // Zadatak 11
    $a = 0;
    for($i=1; $i<=30; $i++) {
        if ($i % 9 == 0) {
            $a += $i;
        }
    }
    echo "Suma brojeva od 1 do 30 deljivih sa 9 je $a";
    /* 2 nacin
    $a = 0;
    for($i=9; $i<=27; $i+=0) {
        $a += $i;
    }
    */
    
    echo "<hr>";
    
    // Zadatak 12
    $i = $a = 20;
    $n = 100;
    $p = 1;
    for($i=$a; $i<=$n; $i++) {
        if ($i % 11 == 0) {
            $p *= $i;
        }
    }
    echo "Proizvod svih brojeva u intervalu od $a do $n deljivih sa 11 je: $p";

    echo "<hr>";

    // Zadatak 13
    $i = $a = 5;
    $n = 150;
    $brojac = 0;                                                             
    for($i=$a; $i<=$n; $i++) {
        if($i % 13 == 0){
            $brojac++;
        }
    }
    echo "U intervalu od $a do $n ima $brojac brojeva deljivih sa 13";

    echo "<hr>";

    // Zadatak 14
    $n = $n1 = 5;
    $m = 9;
    $s = 0;
    $br = 0;
    for($n=$n1; $n<=$m; $n++){
        $s += $n;
        $br++;
    }
    $ar = $s / $br;
    echo "Aritmeticka sredina brojeva od $n1 do $m je: $ar";

    echo "<hr>";

    // Zadatak 15
    $n = $n1 = -3;
    $m = 8;
    $poz = 0;
    $neg = 0;
    for($n=$n1; $n<=$m; $n++) {
        if ($n >= 0) {
            $poz++;
        }
        else {
            $neg++;
        }
    }
    echo "Od $n1 do $m ima $poz pozitivnih brojeva i $neg negativna broja";

    echo "<hr>";

    // Zadatak 16
    $a = $a1 = 5;
    $b = 50;
    $br = 0; 
    for($a=$a1; $a<=$b; $a++) {
        if($a % 3 == 0 || $a % 5 == 0) {
            $br++;
        }
    } 
    echo "Od $a1 do $b ima $br broja koji su deljivi sa 3 ili sa 5";

    echo "<hr>";

    // Zadatak 17
    $n = $n1 =  40;
    $m = 70;
    $brojac = 0; 
    $zbir = 0;
    for($n = $n1; $n<=$m; $n++){
        $cifra = $n % 10;
        if ($cifra == 4){
            $brojac++;
            $zbir += $n;
        }
    }
    echo "<p>Od $n1 do $m ima ukupno $brojac brojeva kojima je poslednja cifra 4</p>";
    echo "<p>Njihov zbir je $zbir</p>";

    echo "<hr>";

    // Zadatak 18
    $n = 10;
    $m = 40;
    $a = 4;
    for($i=$n; $i<=$m; $i++){
        if($i % $a == 0) {
            echo "$i ";
        }
    }
    
    // Da krenemo od prvog broja koji je deljiv sa 4      $start = ceil($n/$a)*$a 
    // Da krenemo od krajnjeg broja koji je deljiv sa 4   $end = floor($m/$a)*$a
    echo "<hr>";

    // Zadatak 19
    $n = 10;
    $m = 40;
    $a = 4;
    for($i=$n; $i<=$m; $i++){
        if($i % $a != 0) {
            echo "$i ";
        }
    }

    echo "<hr>";

    // Zadatak 20
    $n = 10;
    $m = 20;
    $a = 4;
    $proizvod = 1;
    for($i=$n; $i<=$m; $i++){
        if($i % $a != 0) {
            $proizvod *= $i;
        }
    }
    echo "<p>Proizvod brojeva od $n do $m koji nisu deljivi sa 4 je $proizvod</p>";

    echo "<hr>";

    // Zadatak 21
    $n = 14;
    $m = 32;
    $a = 5;
    $b = 10;
    $pro = 1;
    for($i=$n; $i<=$m; $i++) {
        if($i % $a == 0 && $i % $b != 0) {
            $pro *= $i;
        }
    }
    echo "<p>Proizvod brojeva od $n do $m koji su deljivi sa $a, a nisu deljivi sa $b je: $pro</p>";

    // 2. NACIN
    $start = ceil($n/$a) * $a;
    $end = floor($m/$a) * $a;
    for($i=$start; $i<=$end; $i+=$a) {
        if ($i % $b == 0) {
            continue;  // Kada dodje do ove linije ne izvrsava se ono sto je unutra nego se nastavlja na naredni korak
        }
        $pro *= $i;
    }

?>