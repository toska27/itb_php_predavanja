<?php
    // Zadatak 1
    $a = 12.43;
    $b = -3.12;

    if($a > $b)
    {
        echo "<p>Veci je broj $a</p>";
    }
    else
    {
        echo "<p>Veci je broj $b</p>";
    }

    //Alternativno zadatak 1 (ternarni operator)
    echo "<p>Veci je broj " . (($a > $b) ? $a : $b) . "</p>";

    // Zadatak 4
    $dobaDana = date("a");
    if ($dobaDana == "am")
    {
        echo "<p>Pre podne</p>";
    }
    else
    {
        echo "<p>Posle podne</p>";
    }

    //Alternativno zadatak 4
    if ($dobaDana == "pm")
    {
        echo "<p>Posle podne</p>";
    }
    else
    {
        echo "<p>Pre podne</p>";
    }

    // Zadatak 3
    $pol = "Z";
    if ($pol == "M")
    {
        echo "<p> <img src='images/m.png' alt='muski pol'> </p>";
    }
    else
    {
        echo "<p> <img src='images/f.png' alt='zenski pol'> </p>";
    }

    // Zadatak 2
    $t = 10;
    if ($t >= 0)
    {
        echo "<p>Temperatura je u plusu</p>";
    }
    else
    {
        echo "<p>Temperatura je u minusu</p>";
    }

    // Zadatak 5
    $godina = date("Y");
    $godinaRodjenja = 2002;
    
    if(($godina - $godinaRodjenja) >= 18)
    {
        echo "<p>Osoba je punoletna</p>";
    }
    else
    {
        echo "<p>Osoba je maloletna</p>";
    }

    //Zadatak 6
    $broj1 = 6;
    $broj2 = -2;
    $broj3 = 4;
    
    if ($broj1 > $broj2)
    {
        $pom = $broj1;
        $broj1 = $broj2;
        $broj2 = $pom;
    }
    // Nakon ovog if-a broj1 je sigurno manja vrendnost nego u broj2
    
    if ($broj1 > $broj3)
    {
        $pom = $broj1;
        $broj1 = $broj3;
        $broj3 = $pom;
    }
    // Nakon ovog manje if-a broj1 je siugrno najmanja vrenost od zadate tri

    if ($broj2 > $broj3)
    {
        $pom = $broj2;
        $broj2 = $broj3;
        $broj3 = $pom;
    }
    // Nakon ovog if-a vazi broj1 <= broj2 <= broj3

    echo "<p>$broj1 <= $broj2 <= $broj3</p>";
?>