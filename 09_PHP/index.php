<?php
    $a = "Zdravo svete"; // promenljiva a dobija vrednost "Zdravo svete"
    echo $a; // ovo prikazuje string "Zdravo svete"
    echo "<br>";
    $a = 22;
    echo $a;
    echo "<br>";
    $a = $a + 2;
    echo $a;
    echo "<br>";
    $a = 9.2 + 2.5;
    echo $a;
    echo "<br>";
    $a = 100;
    echo $a;
    echo "<br>";
    $b = $a - 20;
    echo "vrednost promenljive b je " . $b;
    echo "<br>";
    echo "vrednost promenljive b je $b";
    echo "<br>";
    echo 'Ovo radi'; // ali uvek treba ""
    echo "<br>";
    $c = "1";
    $d = $c + 2;
    echo $d;
    echo "<br>";
    $d = $d + 2; // $d += 2; ovo je isto
    echo $d;
    echo "<br>";
    $d = $d - 5; // $d -= 5; ovo je isto
    echo $d;

    echo "<hr>";


    // 1. zadatak
    $h = 20;
    $m = 35;

    $rez = $h * 60 + $m;

    echo "Rezultat zadatka je " . $rez . " minuta";
    
    echo "<hr>";

    // 2. zadatak
    // date_default_timezone_set('Europe/Belgrade'); -> ovako setujemo timezone ako nije podeseno
    $h = date('G');
    $m = date('i');

    echo "Trenutno vreme je " . $h . " sati i " . $m . " minuta<br>";

    $rez = $h * 60 + $m;

    echo "Rezultat zadatka 2 je " . number_format($rez, 0, ",", ".") . " minuta";
    
    echo "<hr>";



    
?>