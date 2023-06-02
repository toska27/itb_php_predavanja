<?php
    require_once "AutoKredit.php";
    require_once "StambeniKredit.php";

    $ak1 = new AutoKredit('Auto Kredit1', 5000, 5, 3, 2.5);
    $ak2 = new AutoKredit('Auto Kredit2', 52500.35, 7.1, 20, 21.70);
    $sk1 = new StambeniKredit('Stambeni Kredit1', 195000.98, 12.5, 30);
    $sk2 = new StambeniKredit('Stambeni Kredit2', 280000.75, 10.3, 25);

    $krediti = [$ak1, $ak2, $sk1, $sk2];

    foreach($krediti as $kredit){
        echo "<p>" .$kredit->ispis(). ", mesecna rata: "
        .$kredit->mesecnaRata(). "</p>";
    }
     


?>