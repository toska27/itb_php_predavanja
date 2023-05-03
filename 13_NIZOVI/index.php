<?php

    // Bez nizova
    $car1 = "BMW";
    $car2 = "Volvo";
    $car3 = "Toyota";

    // Sa nizovima
    $cars = array("BMW", "Volvo", "Toyota"); // cars = ["BMW", "Volvo", "Toyota"];  -> moze i ovako
    // Elementi ovog niza su: "BMW", "Volvo", "Toyota"
    // Indeksi elemenata ovog niza su: 0, 1, 2

    // Najdetaljnije ispisuje
    var_dump($cars);
    echo "<br>";

    var_dump($car1);
    echo "<br>";
    //Najmanje detaljno ispisuje
    echo "$car1";
    echo "<br>";

    print_r($cars);
    echo "<hr>";      // LINIJA 1

    // Pristupanje elementima
    $prviElement = $cars[0];
    $drugiElement = $cars[1];
    $treciElement = $cars[2];

    echo "$prviElement, $drugiElement, $treciElement";
    echo "<p>Prvi element u nizu je: $cars[0]</p>";
    // echo "<p>Osmi element u nizu je: $cars[7]</p>" -> ovo je greska jer nema osmi element

    // Izmena elemenata se vrsi ukoliko pod tim indeksom u nizu vec postoji neki element
    $cars[1] = "Peugeot";
    print_r($cars);

    // Dodavanje elementa ce se vrsiti ukoliko pod navedenim indeksom ne postoji vec element u nizu
    $cars[30] = "Audi";
    print_r($cars);
    
    echo "<hr>";
    //////////
    echo "<hr>";

    // Zadatak 1  -- ispisati 5 stringova niza
    $polaznici = []; // ili ovako $polaznici = array();
    $polaznici[] = "Aleksandar"; // na 0 poziciji
    $polaznici[] = "Uros"; // na 1 poziciji                 -> ovako se dodaje na kraj niza
    $polaznici[] = "Milijana";
    $polaznici[] = "Andreja";
    $polaznici[] = "Nikola";

    print_r($polaznici);
    
    $duzina = count($polaznici);  // Prebrojava koliko ima elemenata u nizu
    echo "<p>U nizu ima $duzina polaznika</p>";

    for($i=0; $i<$duzina; $i++){
        echo "<p>$polaznici[$i]</p>";
    }

    echo "<hr>";

    // Zadatak 2
    $brojevi = [5, 14, -4, 0, 11, -7, 9];
    $suma = 0;
    for($i=0; $i<count($brojevi); $i++){
        $suma += $brojevi[$i];
    }
    echo "<p>Suma elemenata niza je: $suma</p>";

    // Ugradjena funkcija
    $zbir = array_sum($brojevi);   // racuna sumu elemenata niza
    echo "<p>Zbir elemenata niza je: $zbir</p>";

    echo "<hr>";

    // Zadatak 3
    $brElemenata = count($brojevi);
    $arsr = $zbir / $brElemenata;  // moze i ovako  ->  $arsr = array_sum($brojevi) / count($brojevi);
    echo "<p>Aritmeticka sredina je: $arsr</p>";

    
    // Dopuna 1. nacin
    if($brElemenata == 0){
        echo "<p>Prazan niz - aritmeticka sredina je 0</p>";
    }
    else {
        $arsr = $zbir / $brElemenata;
        echo "<p>Aritmeticka sredina je: $arsr</p>";
    }

    $brojevi = [];               
    // Dopuna 2. nacin
    if($brojevi == array()){             // moze i  ->  if(!$brojevi)  moze i -> if(empty($brojevi))
        echo "<p>Prazan niz - aritmeticka sredina je 0</p>";
    }
    else {
        $arsr = $zbir / $brElemenata;
        echo "<p>Aritmeticka sredina je: $arsr</p>";
    }

    echo "<hr>";

    // Zadatak 4
    $brojevi = [5, 14, -4, 0, 11, -7, 91];
    $maks = $brojevi[0];
    for($i=0; $i<count($brojevi); $i++){
        $trenutniElement = $brojevi[$i];
        if($maks < $trenutniElement){
            $maks = $trenutniElement;
        }
    }
    echo "<p>Najveci broj niza je: $maks</p>";

    echo "<hr>";

    // Zadatak 5
    $brojevi = [5, 14, -4, 0, 11, -7, 9];
    $min = $brojevi[0];
    for($i=0; $i<count($brojevi); $i++){
        $trenutniElement = $brojevi[$i];
        if($min > $trenutniElement){
            $min = $trenutniElement;
        }
    }
    echo "<p>Najmanji broj niza je: $min</p>";

    echo "<hr>";

    // Zadatak 6
    $brojevi = [5, 14, -4, 14, 11, -7, 14];

    //6.1. indeks prvog pojavljivanja max elementa
    $maks = $brojevi[0];
    $indeksMaks = 0;
    for($i=0; $i<count($brojevi); $i++){
        $trenutniElement = $brojevi[$i];
        if($trenutniElement > $maks){
            $maks = $trenutniElement;
            $indeksMaks = $i;
        }
    }
    echo "<p>Najveci element ima vrednost $maks, Indeks njegovog prvog pojavljivanja je $indeksMaks</p>";

    //6.1. indeks prvog pojavljivanja max elementa
    // 1.nacin
    $brojevi = [5, 14, -4, 14, 11, -7, 14];
    $maks = $brojevi[0];
    $indeksMaks = 0;
    for($i=0; $i<count($brojevi); $i++){
        $trenutniElement = $brojevi[$i];
        if($trenutniElement >= $maks){
            $maks = $trenutniElement;
            $indeksMaks = $i;
        }
    }
    echo "<p>Najveci element ima vrednost $maks, Indeks njegovog poslednjeg pojavljivanja je $indeksMaks</p>";

    /*
    // 2.nacin
    $brojevi = [5, 14, -4, 14, 11, -7, 14];
    $brElemenata = count($brojevi);
    $indeksMaks = $brElemenata - 1;
    $maks = $brojevi[$indeksMaks];

    for($i=$indeksMaks; $i>=0; $i--){
        $trenutniElement = $brojevi[$i];
        if($trenutniElement > $maks){
            $maks = $trenutniElement;
            $indeksMaks = $i;
        }
    }
    echo "<p>Najveci element ima vrednost $maks, Indeks njegovog poslednjeg pojavljivanja je $indeksMaks</p>";
    */

    // Svi maksimumi
    $brojevi = [5, 6, 14, -4, 14, 11, -7, 14];
    $maks = $brojevi[0];
    
    // 1. prolaz odredjuje max
    for($i=0; $i<count($brojevi); $i++){
        $trenutniElement = $brojevi[$i];
        if($trenutniElement > $maks){
            $maks = $trenutniElement;
        }
    }
    echo "Najveci element ima vrednost $maks, a indeksi pojavljivanja ovog elementa su: ";

    // 2. prolazak trazi sve elemente jednake maksimumu i belezi njihove indekse
    $sviIndeksiMaks = [];
    for($i=0; $i<count($brojevi); $i++){
        $trenutniElement = $brojevi[$i];
        if($trenutniElement == $maks){
            $sviIndeksiMaks[] = $i;
            echo "$i ";
        }
    }
     
    /* 2. nacin 
    $brojevi = [5, 6, 14, -4, 14, 11, -7, 14];
    $maks = $brojevi[0];
    $sviIndeksiMaks = [];
    for($i=0; $i<count($brojevi); $i++){
        $trenutniElement = $brojevi[$i];
        if($trenutniElement > $maks){
            $maks = $trenutniElement;
            $sviIndeksiMaks = [$i];
        }
        elseif($trenutniElement == $maks) {
            $sviIndeksiMaks[] = $i;
        }
    }
    */
    echo "<hr>";

    // Zadatak 7
    $brojevi = [1, 2, 15];

    /* Netacan pristup
    $zbir = 0;
    $broj = 0;
    for($i = 0; $i < count($brojevi); $i++){
        $zbir += $brojevi[$i];
        $arsr = $zbir / count($brojevi);
        if ($brojevi[$i] > $arsr){
            $broj++;
        }
    } */

    // Tacan pristup
    $zbir = 0;
    $broj = 0;
    for($i = 0; $i < count($brojevi); $i++){
        $zbir += $brojevi[$i];
    }
    $arsr = $zbir / count($brojevi);
    for($i = 0; $i < count($brojevi); $i++){
        if ($brojevi[$i] > $arsr){
            $broj++;
        }
    }
    echo "<p>Broj brojeva vecih od srednje vrednosti niza je $broj</p>";

    echo "<hr>";

    // Zadatak 8
    $brojevi = [5, 6, 14, -4, 14, 11, -7, 14];
    $zbir = 0;
    for($i=0; $i<count($brojevi); $i++){
        if($brojevi[$i] > 0){
            $zbir += $brojevi[$i];
        }
    }
    echo "<p>Zbir pozitivnih elemenata niza je $zbir</p>";

    // Bonus zadatak
    // Izracunati srednju vrednost parnih elemenata celobrojnog niza
    $zbir = 0;
    $broj = 0;
    for($i=0; $i<count($brojevi); $i++){
        if($brojevi[$i] % 2 == 0){
            $broj++;
            $zbir += $brojevi[$i];
        }
    }
    if($broj != 0){
        $srvr = $zbir / $broj;
    } 
    else {
        $srvr = 0;
    }
    echo "<p>Srednja vrednost parnih elemenata niza je $srvr</p>";
    
    echo "<hr>";

    // Zadatak 9
    $brojevi = [5, 6, 14, -4, 14, 11, -7, 14];
    $broj = 0;
    for($i=0; $i<count($brojevi); $i++){
        if($brojevi[$i] % 2 == 0){
            $broj++;
        }
    }
    echo "<p>Broj parnih elemenata u nizu je $broj</p>";

    echo "<hr>";

    // Zadatak 10
    $brojevi = [5, 6, 14, -4, 14, 11, -7, 14];
    $suma = 0;
    for($i=0; $i<count($brojevi); $i++){
        if($i % 2 == 0){
            $suma += $brojevi[$i];
        }
    }
    echo "<p>Suma elemenata sa parnim indeksom je $suma</p>";

    echo "<hr>";

    // Zadatak 11
    $brojevi = [5, 6, -14, -4, 14, 11, -7];
    var_dump($brojevi);
    echo "<br>";
    for($i=0; $i<count($brojevi); $i++){
        $brojevi[$i] *= -1;
        // $brojevi[$i] = -$brojevi[$i];
    }
    var_dump($brojevi);

    echo "<hr>";

    // Zadatak 12
    $brojevi = [5, 6, -14, -4, 14, 11, -7];
    var_dump($brojevi);
    echo "<br>";
    for($i=0; $i<count($brojevi); $i++){
        if($brojevi[$i] % 2 != 0 && $i % 2 == 0){
            $brojevi[$i] *= -1;
        }
    }
    var_dump($brojevi);

    echo "<hr>";

    // Zadatak 13
    $brojevi = [5, 6, -14, -4, 14, 11, -7];
    $broj = 0;
    for($i=0; $i<count($brojevi); $i++){
        if($brojevi[$i] % 2 == 0 && $i % 2 != 0){
            $broj++;
        }
    }
    echo "<p>Broj parnih elemenata sa neparnim indeksom je $broj</p>";

    echo "<hr>";

    // Zadatak 14
    $imena = ["Stefan", "Adam", "Milos", "Nemanja", "Aleksandar", "Kristina"];
    for($i=0; $i<count($imena); $i++){
        $ime = $imena[$i];
        $duzina = strlen($ime);                               // mb_strlen($ime, UTF-8);  ->  Ako korisitmo nasa slova 
        echo "<p>Duzina stringa $ime je $duzina</p>";
    }

    echo "<hr>";

    // Zadatak 15
    $imena = ["Stefan", "Adam", "Milos", "Nemanja", "Aleksandar", "Kristina"];
    $stringMaxDuzine = $imena[0];
    $maxDuzina = strlen($imena[0]);

    for($i=1; $i<count($imena); $i++){
        if(strlen($imena[$i]) > $maxDuzina){
            $maxDuzina = strlen($imena[$i]);
            $stringMaxDuzine = $imena[$i];
        }
    }
    echo "<p>Element niza sa maksimalnom duzinom je: $stringMaxDuzine</p>";

    echo "<hr>";

    
    
    // Kako da odredimo da li se u nekom stringu nalazi neki podstring?
    // Koristimo funkciju strpos($str1, $str2)
    // Rezultat poziva ove funkcije:
    // 1) Ako se $str2 nalazi unutar $str1, onda se vraca INDEKS prvog pojavljivanja
    // CEO BROJ(0, 1, 2, ...)
    // 2) Ako se $str2 ne nalazi unutar $str1 onda se vraca false
    // LOGICKA VREDNOST
    /*
    if(strpos("Sreda", "S") !== false){
        echo "<p>String 'S' se nalazi u stringu 'Sreda'</p>";
    } else {
        echo "<p>String 'S' se ne nalazi u stringu 'Sreda'</p>";
    } */

    // Zadatak 17
    $imena = ["Stefan", "Uros", "Milos", "Nemanja", "Aleksandar", "Kristina"];
    $brojSadrziA = 0;
    for($i=0; $i<count($imena); $i++){
        if(strpos($imena[$i], "a") !== false){
            $brojSadrziA++;
        }
    }
    echo "<p>Broj stringova koji sadrze slovo 'a' je $brojSadrziA</p>";

    echo "<hr>";

    // Zadatak 18
    $imena = ["Stefan", "Uros", "Milos", "Nemanja", "Aleksandar", "Kristina"];
    $brojPocinjeA = 0;
    for($i=0; $i<count($imena); $i++){
        if(strpos($imena[$i], "a") === 0 || strpos($imena[$i], "A") === 0){                  // if($imena[$i][0] == 'a' || $imena[$i][0] == 'A') -> moze i ovako
            $brojPocinjeA++;                                                                 // if(strtolower($imena[$i][0]) == 'a')             -> ili ovako
        }
    }
    echo "<p>Broj stringova koji pocinju sa  slovo 'a' ili 'A' je $brojPocinjeA</p>";
?>