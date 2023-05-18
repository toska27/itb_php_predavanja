<?php
    
    $dan = [
        "datum" => "2023/05/16",
        "kisa" => true,
        "sunce" => true,
        "oblacno" => false,
        "temperature" => [5, -8, 13, 17, 17, 9, 6]
    ];

    // Zadatak 15
    function prosecnaTemp($dan){
        $temperature = $dan["temperature"];
        $suma = 0;
        for($i=0; $i<count($temperature); $i++){
            $suma += $temperature[$i];
        }
        $prosek = $suma / count($temperature);
        return $prosek;
    }
    echo "Prosecna temperatura za dan " .$dan["datum"] . " je: " .prosecnaTemp($dan);

    echo "<hr>";

    // Zadatak 16
    function brojNatprosecne($dan){
        $prosek = prosecnaTemp($dan);
        $temperature = $dan["temperature"];
        $broj = 0;
        foreach($temperature as $v){
            if($v>$prosek){
                $broj++;
            }
        }
        return $broj;
    }
    echo "Bilo je ukupno temperatura iznad proseka " .brojNatprosecne($dan);

    echo "<hr>";

    // Zadatak 17
    function maksTemp($dan){
        $temperature = $dan["temperature"];
        $max = $temperature[0];
        $brojac = 0;
        for($i=1; $i<count($temperature); $i++){
            if($temperature[$i] >= $max){
                $max = $temperature[$i];
            }
        }
        for($i=0; $i<count($temperature); $i++){
            if($max==$temperature[$i]){
                $brojac++;
            }
        }
        return $brojac;
    }
    echo "Merenja sa maksimalnom temperaturom za dan " .$dan['datum']. " je bilo: " .maksTemp($dan);

    echo "<hr>";

    // Zadatak 18
    function brojMerenjaIzmedju($dan, $min, $max){
        $temperature = $dan["temperature"];
        $broj = 0;
        foreach($temperature as $temp){
            if($temp > $min && $temp < $max){
                $broj++;
            }
        }
        return $broj;
    }
    $v1 = 7;
    $v2 = 15; 
    echo "Broj merenja na dan " .$dan["datum"]. " izmedju vrednosti $v1 i $v2 jednak je: " .brojMerenjaIzmedju($dan, $v1, $v2);

    echo "<hr>";

    // Zadatak 19
    function natprosecnoTopao($dan){
        $iznad = 0;
        $ispod = 0;
        $prosek = prosecnaTemp($dan);
        $temperature = $dan["temperature"];
        foreach($temperature as $temp){
            if($temp>$prosek){
                $iznad++;
            } else{
                $ispod++;
            }
        }
        if($iznad > $ispod){
            return true;
        } else{
            return false;
        }
    };
    $provera = natprosecnoTopao($dan);
    if($provera){
        echo "Temperatura u vecini dana je bila iznad proseka";
    } else{
        echo "Temperatura u vecini dana je bila ispod proseka";
    }

    echo "<hr>";

    // Zadatak 20
    function leden($dan){
        $temperature = $dan["temperature"];
        $broj = 0;
        foreach($temperature as $temp){
            if($temp<=0){
                $broj++;
            }
        }
        if($broj == count($temperature)){
            return true;
        } else{
            return false;
        }
    };
    $vrednost = leden($dan);
    if($vrednost){
        echo "Dan je bio leden";
    } else {
        echo "Dan nije bio leden";
    }

    echo "<hr>";

    // Zadatak 21
    function tropski($dan){
        $temperature = $dan["temperature"];
        $broj = 0;
        foreach($temperature as $temp){
            if($temp>=24){
                $broj++;
            }
        }
        if($broj == count($temperature)){
            return true;
        } else{
            return false;
        }
    };
    $vrednost = tropski($dan);
    if($vrednost){
        echo "Dan je bio tropski";
    } else {
        echo "Dan nije bio tropski";
    }

    echo "<hr>";

    // Zadatak 22
    function nepovoljan($dan){
        $temperature = $dan["temperature"];
        $brojac = 0;
        for($i=1; $i<count($temperature); $i++){
            if(($temperature[$i-1]-8)>$temperature[$i] || ($temperature[$i-1]+8)<$temperature[$i]){  // if(abs($temperatue[$i] - $temperature[$i-1])>8)
                $brojac++;
            } 
        }
        if($brojac>0){
            return true;
        } else{
            return false;
        }
    }
    $vrednost = nepovoljan($dan);
    if($vrednost){
        echo "Dan je bio nepovoljan";
    } else{
        echo "Dan nije bio nepovoljan";
    }

    echo "<hr>";

    /* Zadatak 23 Za dan se kaže da je neuobičajen ako je bilo kiše i ispod -5 stepeni, ili bilo oblačno i iznad 25 stepeni, 
    ili je bilo i kišovito i oblačno i sunčano. Napisati funkciju neuobicajen($dan) kojoj se prosleđuje dan, 
    a koja vraća true ukoliko je dan bio neuobičajen, u suprotnom vraća false.
    */
    function neuobicajan($dan){
        $kisa = $dan["kisa"];
        $sunce = $dan["sunce"];
        $oblacno = $dan["oblacno"];
        $temperature = $dan["temperature"];
        $brojac = 0;
        foreach($temperature as $temp){
            if(($kisa==true && $temp<-5) || ($oblacno==true && $temp>25) || ($kisa==true && $sunce==true && $oblacno==true)){
                return true;
            } 
        }
        return false;
    };
    $vrednost = neuobicajan($dan);
    if($vrednost){
        echo "Dan je bio neubicajan";
    } else{
        echo "Dan nije bio neubicajan";
    }

    echo "<hr>";
    echo "<hr>";

    // Zadatak 24
    $blogovi = array(
        array(
            "title" => "Zemlja trava",
            "likes" => 150,
            "dislikes" => 30
        ),
        array(
            "title" => "Sunce!",
            "likes" => 180,
            "dislikes" => 100
        ),
        array(
            "title" => "Vazduh!",
            "likes" => 120,
            "dislikes" => 10
        ),
        array(
            "title" => "More trava",
            "likes" => 20,
            "dislikes" => 70
        ),
        array(
            "title" => "Planina!",
            "likes" => 170,
            "dislikes" => 45
        )
    );

    // Zadatak 25
    function ukupnoLajkova($blogovi){
        $suma = 0;
        foreach($blogovi as $blog){
            $likes = $blog["likes"];
            $suma += $likes;
        }
        return $suma;
    }
    echo "<p>Ukupan broj lajkova je " .ukupnoLajkova($blogovi). "</p>";

    echo "<hr>";

    // Zadatak 26
    function prosecnoLajkova($blogovi){
        $ukupno = ukupnoLajkova($blogovi);
        $prosecno = $ukupno / count($blogovi);
        return $prosecno;
    }
    echo "<p>Prosecan broj lajkova je " .prosecnoLajkova($blogovi). "</p>";

    echo "<hr>";

    // Zadatak 27
    function viseLajkova($blogovi){
        foreach($blogovi as $blog){
            $lajkovi = $blog["likes"];
            $dislajkovi = $blog["dislikes"];
            $naslov = $blog["title"];
            if($lajkovi > $dislajkovi){
                echo "<p>Blog ima vise lajkova nego dislajkova: $naslov</p>";
            }
        }
    };
    viseLajkova($blogovi);

    echo "<hr>";

    // Zadatak 28
    function duploLajkovaVise($blogovi){
        foreach($blogovi as $blog){
            $lajkovi = $blog["likes"];
            $dislajkovi = $blog["dislikes"];
            $naslov = $blog["title"];
            if($lajkovi >= ($dislajkovi * 2)){
                echo "<p>Blog ima duplo vise lajkova nego dislajkova: $naslov</p>";
            }
        }
    };
    duploLajkovaVise($blogovi);

    echo "<hr>";

    // Zadatak 29
    function uzvicnik($blogovi){
        foreach($blogovi as $blog){
            $naslov = $blog["title"];
            if(substr($naslov, -1) == "!"){
                echo "<p>Zavrsava se sa !: $naslov</p>";
            }
        }
    }
    uzvicnik($blogovi);

    echo "<hr>";

    // Zadatak 30
    function lajkoviGranica($blogovi, $granica){
        $broj = 0;
        foreach($blogovi as $blog){
            $lajkovi = $blog["likes"];
            if($lajkovi > $granica){
                $broj++;
            }
        }
        return $broj;
    }
    $granica = 120;
    $broj = lajkoviGranica($blogovi, $granica);
    echo "<p>Broj lajkova koji je veci od $granica je: $broj</p>";

    echo "<hr>";

    // Zadatak 31
    function reciIste($blogovi, $rec){
        $broj = 0;
        $suma = 0;
        foreach($blogovi as $blog){
            $naslov = $blog["title"];
            $lajkovi = $blog["likes"];
            if(strpos($naslov, $rec)!==false){
                $broj++;
                $suma += $lajkovi;
            }
        }
        if ($broj == 0){
        $prosecno = 0;
        return $prosecno;
        } else{
        $prosecno = $suma / $broj;
        return $prosecno;
        }
    };
    $rec = "trava";
    $prosek = reciIste($blogovi, $rec);
    echo "<p>Prosecan broj lajkova blogova koji u naslovu sadrze rec $rec je: $prosek</p>";

    echo "<hr>";

    // Zadatak 32
    function iznadProseka($blogovi){
        $prosek = prosecnoLajkova($blogovi);
        foreach($blogovi as $blog){
            $lajkovi = $blog["likes"];
            $naslov = $blog["title"];
            if($lajkovi > $prosek){
                echo "<p>Blog $naslov ima iznadprosecan broj lajkova</p>";
            }
        }
    }
    iznadProseka($blogovi);

    echo "<hr>";

    // Zadatak 33
    function prosecnoDislajkova($blogovi){
        $suma = 0;
        foreach($blogovi as $blog){
            $dislajkovi = $blog["dislikes"];
            $suma += $dislajkovi;
        }
        $prosek = $suma / count($blogovi);
        return $prosek;
    }
    function ispodDislajkova($blogovi){
        $prosek = prosecnoDislajkova($blogovi);
        foreach($blogovi as $blog){
            $dislajkovi = $blog["dislikes"];
            $naslov = $blog["title"];
            if($dislajkovi < $prosek){
                echo "<p>Blog $naslov ima ispodprosecan broj dislajkova</p>";
            }
        }
    }
    ispodDislajkova($blogovi);
?>