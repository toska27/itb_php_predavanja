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
    $n = 6;
    for($i = 1; $i<=$n; $i++) {
        if ($i % 3 == 0) {
        echo "<img src='./img/1.jpg' style=height:300px; >";
        }
        elseif ($i % 3 == 1) {
            echo "<img src='./img/2.jpg' style=height:300px; >";
        }
        else{
            echo "<img src='./img/3.jpg' style=height:300px; >";
        }
    }

    echo "<hr>";

    // Zadatak 11
    $a = 0;
    for($i=1; $i<=30; $i++) {
        if ($i % 9 == 0) {
            $a += $i;
        }
    }
    echo "Suma brojeva od 1 do 30 deljivih sa 9 je $a";
    
?>