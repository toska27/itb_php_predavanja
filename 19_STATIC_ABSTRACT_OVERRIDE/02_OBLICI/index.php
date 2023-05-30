<?php
    require_once "Trougao.php";
    require_once "Kvadrat.php";
    require_once "Pravougaonik.php";

    $a1 = new Trougao(5, 6, 7);
    $a1->setA(8); // kada pozivamo bilo koju drugu metodu koja nije konstruktor,
                  // Objekat je vec kreiran
    echo $a1->obimTrougla();
    echo "<br>";
    echo $a1->povrsinaTrougla();
    echo "<hr>";

    $a2 = new Kvadrat(5);
    echo $a2->obimKvadrata();
    echo "<br>";
    echo $a2->povrsinaKvadrata();
    echo "<hr>";

    $a3 = new Pravougaonik(4, 6);
    echo $a3->obimPravougaonika();
    echo "<br>";
    echo $a3->povrsinaPravougaonika();

?>