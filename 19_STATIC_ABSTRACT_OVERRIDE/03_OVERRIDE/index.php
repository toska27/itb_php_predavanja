<?php
    require_once "Trougao.php";
    require_once "Kvadrat.php";
    require_once "Pravougaonik.php";
    require_once "Romb.php";

    $a1 = new Trougao(3, 4, 5);
    $a1->setA(80); // kada pozivamo bilo koju drugu metodu koja nije konstruktor,
                  // Objekat je vec kreiran (promenili smo vrednost stranice a, ako je dobar broj)
    //echo "<p>Obim: " .$a1->obimTrougla(). ", povrsina: " .$a1->povrsinaTrougla(). "</p>";

    $a2 = new Kvadrat(3);
    //echo "<p>Obim: " .$a2->obimKvadrata(). ", povrsina: " .$a2->povrsinaKvadrata(). "</p>";

    $a3 = new Pravougaonik(5, 9);
    //echo "<p>Obim: " .$a3->obimPravougaonika(). ", povrsina: " .$a3->povrsinaPravougaonika(). "</p>";

    $a4 = new Romb(6, 15);

    $oblici = [$a1, $a2, $a3, $a4];
    /*foreach($oblici as $oblik){
        if($oblik objekat klase Trougao){
            echo "<p>Obim: " .$oblik->obimTrougla(). ", povrsina: " .$oblik->povrsinaTrougla(). "</p>";
        } elseif($oblik objekat klase Pravougaonik){
            echo "<p>Obim: " .$oblik->obimPravougaonika(). ", povrsina: " .$oblik->povrsinaPravougaonika(). "</p>";
        } elseif($oblik objekat klase Kvadrat){
            echo "<p>Obim: " .$oblik->obimKvadrata(). ", povrsina: " .$oblik->povrsinaKvadrata(). "</p>";
        } else{
            echo "<p>Nepodrzana figura</p>";
        }    
    }*/

    foreach($oblici as $oblik){
        //echo "<p>Obim: " .$oblik->obim(). ", povrsina: " .$oblik->povrsina(). "</p>";
        $oblik->ispis();
    }


   

?>