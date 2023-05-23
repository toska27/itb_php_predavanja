<?php
    $brojStrana = [500, 200, 330, 400, 120];
    $cena = [5000, 3500, 1200, 900, 600];

    // PROLAZAK 
    /*for($i=0; $i<count($brojStrana); $i++)
    foreach($brojStrana as $brS)
    $i=0; while($i<count($brStrana)){... $i++;}*/

    // UZIMANJE VREDNOSTI ELEMENATA
    /*$brS=$brojStrana[0];  // ovo vraca 500
    $brS=$brojStrana[2]; // ovo vraca 330 */

    function maxProsek($brojStrana, $cena){
        $max=0;
        for($i=0; $i<count($brojStrana); $i++){
            $t=$cena[$i]/$brojStrana[$i];
            if($t>$max){
                $max = $t;
            }
        }
        return $max;
    }


    $brojStranaA = ["$knjiga1" => 500, "$knjiga2" => 200, "$knjiga3" => 330, "$knjiga4" => 400, "$knjiga5" => 120];
    $cenaA = ["$knjiga1" => 5000, "$knjiga2" => 3500, "$knjiga3" => 1200, "$knjiga4" => 900, "$knjiga5" => 600];

    function maxProsekA($brojStranaA, $cenaA){
        $max=0;
        foreach($brojStranaA as $k => $v){
            $t = $cenaA[$k]/$v;
            if($t>$max){
                $max = $t;
            }
        }
        return $max;
    }

    $nizKnjiga = [
        ['brojStrana'=>500, 'cena'=>5000],
        ['brojStrana'=>200, 'cena'=>3500],
        ['brojStrana'=>330, 'cena'=>1200],
        ['brojStrana'=>400, 'cena'=>900],
        ['brojStrana'=>120, 'cena'=>600]
    ];

    function maxProsekNizA($nizKnjiga){
        $max=0;
        for($i=0; $i<count($nizKnjiga); $i++){
            $t = $nizKnjiga[$i]['cena']/$nizKnjiga[$i]['brojStrana'];
            if($t>$max){
                $max = $t;
            }
        }
        return $max;
    }

    $dan = ['temp'=>[8, 5, 13, -2, 3]];

    for($i=0; $i<count($dan['temp']); $i++){
        $t = $dan['temperatura'][$i];
    }
?>