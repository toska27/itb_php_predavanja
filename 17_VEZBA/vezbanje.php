<?php
    // Zadatak 1
    $nizOcena = [10, 10, 10, 9, 9, 10, 10, 9];

    // Zadatak 2
    function prosecnaOcena($nizOcena){
        $zbir = 0;
        foreach($nizOcena as $ocena){
            $zbir += $ocena;
        }
        $prosek = $zbir / count($nizOcena);
        return $prosek;
    }
    $prosecna_ocena = prosecnaOcena($nizOcena);
    echo "<p>Prosecna ocena: $prosecna_ocena</p>";

    // Zadatak 3
    function maxOcena($nizOcena){
        $max = $nizOcena[0];
        for($i=1; $i<count($nizOcena); $i++){
            if($nizOcena[$i]>$max){
                $max = $nizOcena[$i];
            }
        }
        return $max;
    }
    $max = maxOcena($nizOcena);
    echo "<p>Max ocena koju je dobio je: $max</p>";

    // Zadatak 4
    function brojPredmetaMaxOcene($nizOcena){
        $broj = 0;
        for($i=0; $i<count($nizOcena); $i++){
            if($nizOcena[$i]==maxOcena($nizOcena)){
                $broj++;
            }
        }
        return $broj;
    }
    $broj = brojPredmetaMaxOcene($nizOcena);
    echo "<p>Broj predmeta iz kojih ima max ocenu je $broj</p>";

    // Zadatak 5
    function studentGeneracije($nizOcena){
        $brojac=0;
        $desetke=0;
        $devetke=0;
        for($i=0; $i<count($nizOcena); $i++){
            if($nizOcena[$i]>8){
                $brojac++;
            }
            if($nizOcena[$i]==10){
                $desetke++;
            }
            if($nizOcena[$i]==9){
                $devetke++;
            }
        }


        if($brojac==count($nizOcena) && $desetke>=$devetke){
            return true;
        } else{
            return false;
        }
    }
    if(studentGeneracije($nizOcena)){
        echo "<p>Student je generacije</p>";
    } else{
        echo "<p>Nije student generacije</p>";
    }

    // Zadatak 6
    function maxPodniz($nizOcena){
        $trenutni = 0;
        $max = 0;
        for($i=0; $i<count($nizOcena); $i++){
            if($nizOcena[$i]==maxOcena($nizOcena)){
                $trenutni++;
            } else{
                $trenutni = 0;
            }
            if($trenutni>$max){
            $max=$trenutni;
            }
        }
        return $max;
    }
    $podniz = maxPodniz($nizOcena);
    echo "<p>Max duzina podniza u kojoj je dobijao max ocenu je: $podniz</p>";

    echo "<hr>";

    // Zadatak 7
    $student = [
        [
            'naziv'=>'Matematika',
            'datum'=>'2023/1/28',
            'ocena'=>6
        ],
        [
            'naziv'=>'Fizika',
            'datum'=>'2020/6/20',
            'ocena'=>8
        ],
        [
            'naziv'=>'Sociologija',
            'datum'=>'2022/1/12',
            'ocena'=>10
        ],
        [
            'naziv'=>'Mehanika',
            'datum'=>'2020/9/11',
            'ocena'=>10
        ],
        [
            'naziv'=>'Hemija',
            'datum'=>'2023/2/18',
            'ocena'=>7
        ],
        [
            'naziv'=>'Engleski',
            'datum'=>'2020/8/25',
            'ocena'=>10
        ]
    ];

    // 7.2
    function prosecnaOcenaA($student){
        $zbir = 0;
        for($i=0; $i<count($student); $i++){
            $zbir += $student[$i]['ocena'];
        }
        $prosek = $zbir / count($student);
        return $prosek;
    }
    $prosecna_ocena = prosecnaOcenaA($student);
    echo "<p>Prosecna ocena: $prosecna_ocena</p>";

    // 7.3
    function maxOcenaA($student){
        $max = $student[0]['ocena'];
        for($i=1; $i<count($student); $i++){
            if($student[$i]['ocena']>$max){
                $max = $student[$i]['ocena'];
            }
        }
        return $max;
    }
    $max = maxOcenaA($student);
    echo "<p>Max ocena koju je dobio je: $max</p>";

    // 7.4
    function brojPredmetaMaxOceneA($student){
        $broj = 0;
        for($i=0; $i<count($student); $i++){
            if($student[$i]['ocena']==maxOcenaA($student)){
                $broj++;
            }
        }
        return $broj;
    }
    $broj = brojPredmetaMaxOceneA($student);
    echo "<p>Broj predmeta iz kojih ima max ocenu je $broj</p>";

    // 7.5
    function studentGeneracijeA($student){
        $brojac=0;
        $desetke=0;
        $devetke=0;
        for($i=0; $i<count($student); $i++){
            if($student[$i]['ocena']>8){
                $brojac++;
            }
            if($student[$i]['ocena']==10){
                $desetke++;
            }
            if($student[$i]['ocena']==9){
                $devetke++;
            }
        }

        if($brojac==count($student) && $desetke>=$devetke){
            return true;
        } else{
            return false;
        }
    }
    if(studentGeneracijeA($student)){
        echo "<p>Student je generacije</p>";
    } else{
        echo "<p>Nije student generacije</p>";
    }

    // 7.6
    function maxPodnizA($student){
        $trenutni = 0;
        $max = 0;
        for($i=0; $i<count($student); $i++){
            if($student[$i]['ocena']==maxOcenaA($student)){
                $trenutni++;
            } else{
                $trenutni = 0;
            }
            if($trenutni>$max){
            $max=$trenutni;
            }
        }
        return $max;
    }
    $podniz = maxPodnizA($student);
    echo "<p>Max duzina podniza u kojoj je dobijao max ocenu je: $podniz</p>";

    // Zadatak 8
    function istaGodina($student, $godina){
        for($i=0; $i<count($student); $i++){
            if(strpos($student[$i]['datum'], strval($godina)) !== false){
                echo "".$student[$i]['naziv']. ", ";
            }
        }
    }
    $godina = 2020;
    istaGodina($student, $godina);

    // Zadatak 9
    function prosecnaGodina($student, $godina){
        $zbir = 0;
        $brojac = 0;
        for($i=0; $i<count($student); $i++){
            if(strpos($student[$i]['datum'], strval($godina)) !== false){
                $brojac++;
                $zbir += $student[$i]['ocena'];
            }
        }
        if($brojac==0){
            return 0;
        }
        $prosek = $zbir / $brojac;
        return $prosek;
    }
    $godina = 2021;
    $prosecnaOcena = prosecnaGodina($student, $godina);
    echo "<p>Prosecna ocena studenta $godina godine je $prosecnaOcena</p>";

    // Zadatak 10
    function nazivMaxOcene($student){
        $max = 0;
        $imePredmeta = '';
        for($i=0; $i<count($student); $i++){
            if($student[$i]['ocena']==maxOcenaA($student)){
                if(strtotime($student[$i]['datum'])>=$max){
                    $max = strtotime($student[$i]['datum']);
                    $imePredmeta = $student[$i]['naziv'];
                }
            }
            //if($max==strtotime($student[$i]['datum'])){
            //   $imePredmeta = $student[$i]['naziv'];
            //}
        }
        return $imePredmeta;
    }
    $nazivMaxOcena = nazivMaxOcene($student);
    echo "<p>Student je iz predmeta $nazivMaxOcena dobio max ocenu</p>";
    

?>