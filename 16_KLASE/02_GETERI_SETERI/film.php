<?php
    class Film {
        private $naslov;
        private $reziser;
        private $godinaIzdanja;

        public function getNaslov(){
            return $this->naslov;
        }

        public function getReziser(){
            return $this->reziser;
        }

        public function getGodinaIzdanja(){
            return $this->godinaIzdanja;
        }


        public function setNaslov($n){
            $this->naslov = $n;
        }

        public function setReziser($r){
            $this->reziser = $r;
        }

        public function setGodinaIzdanja($gi){
            if($gi>1800){
                $this->godinaIzdanja = $gi;
            } else{
                $this->godinaIzdanja = 1800;
            }
        }

        function stampaj(){
            echo "<p>Naslov filma " .$this->naslov. " film je izdat " .$this->godinaIzdanja. " reziser je " .$this->reziser. "</p>";
        }
    }

    $a1 = new Film();

    $a1->setNaslov("Rane");
    $a1->setReziser("Mika Mikic");
    $a1->setGodinaIzdanja(1599);

    echo "<p>Naziv filma: " .$a1->getNaslov(). "</p>";
    echo "<p>Reziser filma: " .$a1->getReziser(). "</p>";
    echo "<p>Godina izdanja filma: " .$a1->getGodinaIzdanja(). "</p>"
?>