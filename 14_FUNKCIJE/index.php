<?php
    function mojaFunkcija(){
        echo "<p>Moja prva funkcija</p>";
    }
    mojaFunkcija();
    mojaFunkcija();
    mojaFunkcija();


    function mojaFunkcija2($tekst){
        $b = "nova promenljiva";
        echo "<p>F-ja sa parametrom: $tekst i $b</p>";
    }
    mojaFunkcija2("1. nacin"); // 1 nacin
    $a = "2. nacin";           // 2 nacin
    mojaFunkcija2($a);
    $b = "van f-je";      // ne moze u funkciju jedino preko parametra
    mojaFunkcija2($a);

    echo "<hr>";

    function ispisImena($ime, $prezime){
        echo "<p>Ime i prezime je: $ime $prezime</p>";
    }

    ispisImena("Petar", "Petrovic");  // moze ovako
    $i = "Lazar";
    $p = "Lazic";
    ispisImena($i, $p);         // moze i ovako

    echo "<hr>";

    function ispisImena2($ime, $prezime=null, $godine){         // kada parametar nije obavezan
        echo "<p>Ime je: $ime";
        if($prezime){
            echo " a prezime je: $prezime";
        }
        echo " ima godina:$godine";
        echo "</p>";
    }

    ispisImena2("Mika", null, 25);          // kada ne zelimo parametar a imamo vrednost iza mora null
    ispisImena2("Mika", "Mikic", 26);

    echo "<hr>";

    /**
     * funkcija koja sabira dva broja
     * @param int $a - prvi parametar broj
     * @param int $b - drugi parametar broj
     * 
     * @return int - suma dva dobijena broja
     */
    function zbir(int $a, int $b){
        $c = $a + $b;
        //echo "<p>$c</p>";
        return $c;
    }

    $pom = zbir(3, 8);    // kada imamo return moramo da sacuvamo vrednost u promenljivoj
    echo "<p>$pom</p>";
    echo zbir(3, "10");    // moze i ovo broj kao string
    // zbir(4, "ab");  -> ovo nije moguce
    echo "<br>";

    echo zbir(zbir(3, 5), 10);
    
    echo "<hr>";

    $a = zbir(4,9);
    $b = zbir(5,10);
    $c = zbir($a, $b);
    echo $c;

    echo "<br>";
    echo zbir(zbir(4, 9), zbir(5, 10));  // moze i ovako

    

?>