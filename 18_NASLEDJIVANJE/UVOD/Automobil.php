<?php
    
    require_once "Vozilo.php";
    
    class Automobil extends Vozilo {
        // Klasa Automobil nasledjuje sva polja i metode iz klase vozilo
        // ali moze da pristupa samo public poljima i metodama iz klase Vozilo
        // a ona polja i metode iz klase Vozilo koja su priv, ona se nasledjuju,
        // ali ne moze direktno da se pristupi   

        public function voziAutomobil() {
             echo "Automobil $this->tip ($this->boja) u pokretu ";  //- kada je public i protected polja u vozilo
            // echo "<p>Automobil " .$this->getTip(). "(" .$this->getBoja(). ") u pokretu</p>";
        }
    }
?>