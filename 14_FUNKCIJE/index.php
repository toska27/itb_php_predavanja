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

    echo "<hr>";

    // Zadatak 1
    /*
    function neparan($broj){
        echo "<p>Pocetak f-je</p>";
        if($broj % 2 ==0){
            return false;
        } 
        else {
            return true;
        }
        echo "<p>Kraj</p>";    //-> ovo se ne izvrsava return napusta funkciju
    }
    */
    function neparan($broj){
        //echo "<p>Pocetak f-je</p>";
        $rez = true;
        if($broj % 2 ==0){
            $rez = false;
        } 
        //echo "<p>Kraj f-je</p>";
        return $rez;
    }

    $a = 19;
    if(neparan($a)){
        echo "<p>Broj $a je neparan</p>";
    } else {
        echo "<p>Broj $a je paran</p>";
    }

    echo "<hr>";

    // Zadatak 2
    // pod a
    function maks2($a, $b){
        if($a > $b){
            return $a;
        } else {
            return $b;
        }
    }

    $broj1 = 15;
    $broj2 = 45;
    $veci=maks2($broj1, $broj2);
    echo "<p>Veci od brojeva $broj1 i $broj2 je: $veci</p>";

    // pod b
    function maks4($a, $b, $c, $d){
       /* $maksAB = maks2($a, $b);
        $maksCD = maks2($c, $d);          -> duzi nacin
        $maks = maks2($maksAB, $maksCD); 
        return $maks; 
        */

        return maks2(maks2($a, $b), maks2($c, $d)); 
    }

    $b1 = 10;
    $b2 = 25;
    $b3 = 0;
    $b4 = 10;
    $rez = maks4($b1, $b2, $b3, $b4);
    echo "<p>Maksimalni od brojeva $b1, $b2, $b3, $b4 je: $rez</p>";

    echo "<hr>";

    // Zadatak 3
    function slika($url){
        echo "<img src='$url'>";
    }
    slika("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaStTen2mmF5wEO4Rv07diTMl2ivHT4eU9_Q&usqp=CAU");

    echo "<hr>";

    // Zadatak 4
    function obojenaRec($boja, $tekst){
        echo "<p style='color:$boja'>$tekst</p>";
    }

    obojenaRec("red", "Ovo je tekst crvene boje");
    obojenaRec('blue', "Ovo je tekst plave boje");

    echo "<hr>";

    // Zadatak 5
    function recenica1(){
        for($i=10; $i<35; $i+=5){
            echo "<p style='font-size:".$i."px'>Recenica</p>";
        }
    }

    recenica1();

    echo "<hr>";

    // Zadatak 6
    function recenica2($font){
        echo "<p style='font-size:".$font."px'>Recenica</p>";
    }

    for($i=10; $i<20; $i+=2){
        recenica2($i);
    }

    echo "<hr>";

    // Zadatak 7
    function aritmeticka($n, $m){
        if($n <= $m){                   // u suprotnom nema smisla
            $zbir = 0;
            $brojac = 0;
            for($i=$n; $i<=$m; $i++){
                $zbir+=$i;
                $brojac++;
            }
                return $arsr = $zbir / $brojac;
        }
        else {
            return "<p>Uneli ste neispravne parametre</p>";
        }
        
    }

    $broj1 = 5;
    $broj2 = 10;
    $sredina = aritmeticka($broj1, $broj2);
    echo "<p>Aritmeticka sredina brojeva $broj1 i $broj2 je: $sredina</p>";

    echo "<hr>";

    // Zadatak 8
    function aritmetickaCifre($n, $m){
        $zbir = 0;
        $brojac = 0;
        for($i=$n; $i<=$m; $i++){
            if($i%10==3){
            $zbir+=$i;
            $brojac++;
            }
        }
        if($brojac){     // if($brojac!=0) if($brojac>0)  -> moze i ovako
            return  $zbir / $brojac;
        } else {         // moze i bez else grane
            return "<p>U opsegu nema brojeva koji zadovoljavaju uslov</p>";
        }
    }

    $sredina3 = aritmetickaCifre(5, 35);
    echo "<p>Aritmeticka sredina brojeva kojima poslednja cifra je 3 u intervalu od 5 do 35 je: $sredina3</p>";

    echo "<hr>";

    // Zadatak 9
    function praksa($n, $a, $d){
        $ukupno = $a;
        for($i=2; $i<=$n; $i++){
            $ukupno+= $a + $d;
        }
        return number_format($ukupno, 2, ',', '.');    // $ukupno = $a + ($n - 1) * ($a + $d)
    }

    /* 2 nacin
    function praksa($n, $a, $d){
        $ukupno = 1;
        for($i=1; $i<=$n; $i++){
            $ukupno+= $a + $d;
        }
        return $ukupno - $d;  // $ukupno = $n * ($a + $d) - $d
    } */

    $n = 10;
    $a = 1000;
    $d = 120;
    echo praksa($n, $a, $d);

    echo "<hr>";

    // Zadatak 10

    /*function neparan($broj){
        $rez = true;            -> ovo je iz 1. zadatka
        if($broj % 2 ==0){
            $rez = false;
        } 
        return $rez;
    } */

    $niz = [1,2,3,4,5,6,7,8,9];
    for($i=0; $i<count($niz); $i++){
        $broj = $niz[$i];
        if(neparan($broj)){
            echo "$broj ";
        }
    }

    /*
    foreach($niz as $k=>$v){
        if(neparan($v)){
            echo "$v ";
        }
    }
    */

    echo "<hr>";

    // Zadatak 11
    function brojNeparnih($arr){
        $brojac = 0;
        for($i=0; $i<count($arr); $i++){
            if($arr[$i] % 2 != 0){
                $brojac++;
            }
        }
        return $brojac;
    }

    $niz = [1,2,3,4,5,6,7,8,9];
    echo brojNeparnih($niz);

    echo "<hr>";

    // Zadatak 12
    function najniza($arr){
        $minTemp = 100;
        $minDatum = "";
        $minDan = 0;
        $dan = 1;
        foreach($arr as $datum => $temp){
            if($minTemp>$temp){
                $minTemp=$temp;
                $minDatum=$datum;
                $minDan=$dan;
            }
            $dan++;
        }
        $dani=['Ponedeljak', 'Utorak', 'Sreda', 'Cetvrtak', 'Petak'];
        echo "<p style='color: blue'>".$dani[$minDan-1]." ".$minDatum." sa temp ".$minTemp."</p>";
    }

    $niz = [
        '01.05.2023' => 19,
        '02.05.2023' => 22,
        '03.05.2023' => 18,
        '04.05.2023' => 15,
        '05.05.2023' => 25
    ];

    najniza($niz);
?>