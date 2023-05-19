<?php
    class Film {
        var $naslov;
        var $reziser;
        var $godinaIzdanja;

        function stampaj(){
            echo "<p>Naslov filma " .$this->naslov. " film je izdat " .$this->godinaIzdanja. " reziser je " .$this->reziser. "</p>";
        }
    }

    $a1 = new Film();
    $a1->naslov = "Munje";
    $a1->reziser = "Pera Peric";
    $a1->godinaIzdanja = 1999;
    $a1->stampaj();
    
    $a2 = new Film();
    $a2->naslov = "Kengur";
    $a2->reziser = "Voja Vojic";
    $a2->godinaIzdanja = 1976;
    $a2->stampaj();

    $a3 = new Film();
    $a3->naslov = "Mi nismo andjeli";
    $a3->reziser = "Mita Mitic";
    $a3->godinaIzdanja = 1988;
    $a3->stampaj();
    
    

    
    

    
    

    
    
?>