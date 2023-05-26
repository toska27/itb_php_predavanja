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

    class Knjiga{
        public $brojStrana;
        public $cena;
    }

    $k1 = new Knjiga();
    $k1->brojStrana = 500;
    $k1->cena = 5000;
    $k2 = new Knjiga();
    $k2->brojStrana = 200;
    $k2->cena = 3500;
    $k3 = new Knjiga();
    $k3->brojStrana = 400;
    $k3->cena = 1200;
    $k4 = new Knjiga();
    $k4->brojStrana = 400;
    $k4->cena = 9000;
    $k5 = new Knjiga();
    $k5->brojStrana = 120;
    $k5->cena = 600;

    $knjige = [$k1, $k2, $k3, $k4, $k5];

    function maxProsekNiz($knjige){
        $max = 0;
        foreach($knjige as $knjiga){
            $t = $knjiga->cena / $knjiga->brojStrana;
            if($max<$t){
                $max=$t;
            }
        }
        return $max;
    }

    function maxProsekNiz2($knjige){
        $max = 0;
        for($i=0; $i<count($knjige); $i++){
            $knjiga = $knjige[$i];
            $t = $knjiga->cena / $knjiga->brojStrana;
            if($max<$t){
                $max=$t;
            }
        }
        return $max;
    }

    $k6 = new Knjiga();
    $k6->brojStrana = 10;
    $k6->cena = 100;
    $knjige[] = $k6;

?>