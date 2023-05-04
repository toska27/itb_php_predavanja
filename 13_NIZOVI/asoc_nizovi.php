<?php

    $godine = array(
        "Pera" => 28,
        "Lazar" => 26,
        "Violeta" => 35,
        "Marko" => 35
    );
    echo $godine["Pera"];
    

    // Nahnadno dodavanje
    $godine["Mika"] = 48;

    //var_dump($godine);

    foreach($godine as $key => $value){
        echo "<p>Osoba $key ima $value godina</p>";
    }

    // Samo vrednosti da dohvatimo
    foreach($godine as $g){
        echo "<p>Osoba ima $g godina</p>";
    }

    // foreach petlja moze da se koristi i za indkesne nizove
    $brojevi = array(5, -6, 3, 17.8, 0);
    $brojevi[100] = 50;

    foreach($brojevi as $broj){
    echo "$broj ";
    }

    foreach($brojevi as $indeks => $broj){
    echo "<p>Element sa indeksom $indeks ima vrednost $broj</p>";
    }

    echo "<hr>";

    // Zadatak 1
    $automobili = array(
        "Audi" => 2004,
        "Opel Corsa" => 2018,
        "Opel Astra" => 2016,
        "Peugeot" => 2004,
        "Ford" => 2015
    );

    foreach ($automobili as $marka => $godiste){
        echo "<p>Automobil: $marka , proizveden: $godiste. godine</p>";
    }

    // pod b
    $trenutnaGodina = date("Y");
    foreach($automobili as $marka => $godiste){
        if($trenutnaGodina - $godiste > 10){
            echo "<p>Automobil $marka je stariji od 10 godina</p>";
        }
    }

    // pod c
    foreach($automobili as $marka => $godiste){
        if(strpos($marka, "Opel") !== false && $godiste >= 2000){
            echo "<p>Automobil $marka je proizveden posle 2000. godine</p>";
        }
    }

    echo "<hr>";

    // Zadatak 2

    $osobe = array(
        "Marko" => 186,
        "Vanja" => 178,
        "Veljko" => 189,
        "Kristina" => 170,
        "Ana" => 174,
        "Uros" => 189
    );

    //2.3
    foreach($osobe as $ime => $visina){
        echo "<p>Ime:$ime visina:$visina</p>";
    }

    echo "<hr>";

    //2.4
    $ukupnaVisina = 0;
    $broj = 0;
    foreach($osobe as $ime => $visina){
        $ukupnaVisina += $visina; 
        $broj++;
    }
    $sredinaVisine = $ukupnaVisina / $broj;  // moze umesto broj count($osobe)
    foreach($osobe as $ime => $visina){
        if($visina > $sredinaVisine){
            echo "<p>$ime je nadporesecne visine</p>";
        }
    }

    echo "<hr>";

    //2.5
    $maxVisina = 0;  //$maxVisina = PHP_INT_MIN; moze i ovako
    foreach($osobe as $visina){
        if($visina > $maxVisina){
            $maxVisina = $visina;
        }
    }
    foreach($osobe as $ime => $visina){
        if ($visina == $maxVisina){
            echo "<p>Osoba $ime ima maksimalnu visinu</p>";
        }
    }

    echo "<hr>";

    //2.6
    $ukupnaVisina = 0;
    $broj = 0;
    foreach($osobe as $ime => $visina){
        $ukupnaVisina+=$visina;
        $broj++;
    }
    $sredinaVisine = $ukupnaVisina / $broj;
    foreach($osobe as $ime => $visina){
        if($visina < $sredinaVisine && strpos($ime, "V") === 0){
            echo "<p>$ime je visok ispod prosecne visine i prvo slovo mu je V</p>";
        }
    }

?>