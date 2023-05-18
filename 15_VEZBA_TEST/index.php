<?php
    // Zadatak 1
    $letovi = [
        'Rim' => 120,
        'Pariz' => 160,
        'Prag' => 220,
        'Madrid' => 180,
        'Zagreb' => 160,
        'Moskva' => 140,
        'Oslo' => 190,
        'Lisabon' => 120,
        'Bec' => 200,
        'Cirih' => 20
    ];

    // Zadatak 2
    function maxBrojPutnika($letovi){
        $max = 0;
        foreach($letovi as $k => $v){
            if($v>=$max){
                $max=$v;
            }
        }
        return $max;
    }
    echo "Maksimalan broj putnika je: " .maxBrojPutnika($letovi);

    echo "<hr>";

    // Zadatak 3
    function brojMax($letovi){
        $max = maxBrojPutnika($letovi);
        $brojDestinacija = 0;
        foreach($letovi as $v){
            if($max==$v){
                $brojDestinacija++;
            }
        }
        return $brojDestinacija;
    };
    echo "Broj destinacija na kojima ima max broj putnika je " .brojMax($letovi);

    echo "<hr>";

    // Zadatak 4
    function prosek($letovi){
        $zbir = 0;
        $broj = 0;
        foreach($letovi as $k => $v){
            $zbir += $v;
            $broj++;
        }
        return round($zbir / $broj);
    }
    echo "Prosecan broj putnika je: " .prosek($letovi);

    echo "<hr>";

    // Zadatak 5
    function isplativ($letovi, $granica){
        $broj1 = 0;
        $broj2 = 0;
        foreach($letovi as $v){
            if($v>=$granica){
                $broj1++;
            } else{
                $broj2++;
            }
        }
        if($broj1>=$broj2){
            return true;
        } else{
            return false;
        } 
    };
    $granica = 160;
    // echo "Dan je bio isplativ za granicu 100: " . (isplativ($letovi, $granica)?"Jeste":"Nije");  moze i ovako
    $vrednost = isplativ($letovi, $granica);
    if($vrednost){
        echo "Dan je bio isplativ";
    } else{
        echo "Dan nije bio isplativ";
    }

    echo "<hr>";

    // Zadatak 6
    function alarmantan($letovi, $granica){
        foreach($letovi as $v){
            if($v<$granica){
                return true;
            } 
        }
        return false;
    };
    $granica = 100;
    $provera = alarmantan($letovi, $granica);
    if($provera){
        echo "Dan je bio alarmantan";
    } else{
        echo "Dan nije bio alarmantan";
    }

    echo "<hr>";

    // Zadatak 7
    function dobreDestinacije($letovi){
        $prosek = prosek($letovi);
        foreach($letovi as $k => $v){
            if($v>=$prosek){
                echo "<p>$k</p>";
            }
        }
    };
    echo "Dobre destinacije su:";
    echo dobreDestinacije($letovi);

    echo "<hr>";
    echo "<hr>";
    
    // Zadatak 8
    $letovi = array(
        array(
            "dest" => "London",
            "country" => "Engleska",
            "time" => "18:45"
        ),
        array(
            "dest" => "Madrid",
            "country" => "Spanija",
            "time" => "07:00"
        ),
        array(
            "dest" => "Pariz",
            "country" => "Francuska",
            "time" => "13:00"
        ),
        array(
            "dest" => "Rim",
            "country" => "Italija",
            "time" => "12:00"
        ),
        array(
            "dest" => "Lisabon",
            "country" => "Portugal",
            "time" => "09:30"
        ),
        array(
            "dest" => "Zagreb",
            "country" => "Hrvatska",
            "time" => "07:00"
        ),
        array(
            "dest" => "Beograd",
            "country" => "Srbija",
            "time" => "20:00"
        ),
        array(
            "dest" => "Rim",
            "country" => "Italija",
            "time" => "23:15"
        ),
        array(
            "dest" => "Oslo",
            "country" => "Norveska",
            "time" => "10:00"
        )
    );

    // Zadatak 9
    function brojLetovaZaZemlju($letovi, $zemlja){
        $broj = 0;
        foreach($letovi as $let){
            if($zemlja === $let["country"]){
                $broj++;
            }  
        }
        return $broj;
    };

    $zemlja = "Srbija";
    echo "Broj letova za zemlju $zemlja je: " .brojLetovaZaZemlju($letovi, $zemlja);

    echo "<hr>";

    // Zadatak 10
    function visePrePodne($letovi){
        $brojacPre = 0;
        $brojacPosle = 0;
        foreach($letovi as $let){
            $vreme = $let["time"];
            $vremeInt = (int) substr($let["time"], 0, 2);
            if($vremeInt < 12){
                $brojacPre++;
            } else{
                $brojacPosle++;
            }
        }
        if($brojacPre>$brojacPosle){
            return true;
        } else{
            return false;
        }
    }

    $provera = visePrePodne($letovi);
    if($provera==true){
        echo "Bilo je vise letova pre podne";
    } elseif($provera==false){
        echo "Bilo je vise letova posle podne";
    } else{
        echo $provera;
    }

    echo "<hr>";

    // Zadatak 11
    function ispisLetovaDoSada($letovi){
        $currentTime = time();
        foreach($letovi as $let){
            if($currentTime>=strtotime($let['time'])){
                echo "<p>Let: " .$let['dest']. "</p>";
            }
        }
    }
    echo ispisLetovaDoSada($letovi);

    echo "<hr>";

    // Zadatak 12
    function rizicniLetovi($letovi, $crvenaZona){
        foreach($letovi as $let){
            for($i=0; $i<count($crvenaZona); $i++){
                if($crvenaZona[$i]==$let["country"]){
                    echo "<p style='color:red'>Let za drzavu iz crvene zone ".$let["dest"]." ".$let["country"]." ".$let["time"]. "</p>";
                }
            }
        }
    }
    $crvenaZona = ["Austrija", "Nemacka", "Francuska", "Spanija", "Norveska"];
    echo rizicniLetovi($letovi, $crvenaZona);

    echo "<hr>";

    /* Zadatak13 Neka destinacija je tražena ukoliko postoji više letova u toku dana za tu destinaciju.
      Napisati funkciju trazeneDestinacije($letovi) kojoj se prosleđuje niz letova,
      a koja ispisuje sve tražene destinacije (ukoliko postoje). */
    function trazeneDestinacije($letovi){
        foreach($letovi as $let){
            $destinacija[] = $let["dest"];
        }
        $nizGradova = array_count_values($destinacija);
        foreach ($nizGradova as $grad => $brojPolaska) {
            if ($brojPolaska > 1) {
                echo "<p>Trazena destinacija je " .$grad."</p>";
            } else{
                echo "<p>Nema trazenih destinacija</p>";
            }
        }
    };
    echo trazeneDestinacije($letovi);

    echo "<hr>";

    /* Zadatak14 Napisati funkciju prosecanBrojLetovaZaZemlju($letovi) kojoj se prosleđuje niz letova,
     a koja vraća prosečan broj letova ka nekoj zemlji.*/
    function prosecanBrojLetovaZaZemlju($letovi){
        foreach($letovi as $let){
            $zemlja[] = $let["country"];
        }
        $nizBrojeva = array_count_values($zemlja);
        $zbirLetova = 0;
        foreach ($nizBrojeva as $drzava => $brojLetova) {
            $zbirLetova += $brojLetova;
        }
        return ($zbirLetova / count($nizBrojeva));
    }
    $prosecnoLetova = prosecanBrojLetovaZaZemlju($letovi);
    echo "<p>Prosecan broj letova ka nekoj zemlji je $prosecnoLetova</p>";

?>
