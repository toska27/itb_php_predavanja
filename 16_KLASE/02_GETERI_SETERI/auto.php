<?php
    class Auto {
        // polja
        private $marka;
        private $boja;
        private $imaKrov;

        // metode

        // GETERI: vraca vrednosti polja

        public function getMarka(){
            return $this->marka;
        }

        public function getBoja(){
            return $this->boja;
        }

        public function getImaKrov(){
            return $this->imaKrov;
        }


        // SETERI: postavljaju vrednosti polja

        public function setMarka($m){
            if($m != ""){
                $this->marka = $m;
            } else{
                $this->marka = "Fiat";
            }
        }

        public function setPolja($b){
            $this->boja = $b;
        }

        public function setImaKrov($ik){
            if($ik === true || $ik === true){
                $this->imaKrov = $ik;
            } else{
                $this->imaKrov = false;
            }
        }


        public function sviraj(){
            echo "<p>Beep! Beep!</p>";
        }

        public function ispis(){
            echo "<p>Automobil marke " .$this->marka. " boje " .$this->boja;
            if($this->imaKrov == true){
                echo " ima krov";
            } else{
                echo " nema krov";
            }
            echo "</p>";
        }
    }

    // Kada se kreira klasa, obicno se na sledeci nacin implementira:
    // 1) Sva polja stavimo da su private
    // 2) Za svako polje napisemo geter i seter
    //   2.1) geter: dohvata (cita) vrednost polja
    //   2.2) seter: postavlja novu vrednost polju

    $a1 = new Auto();

    // $a1->marka = "Audi";  // Nije moguce jer polje marka je privatno polje
    $a1->setMarka("Audi");
    $a1->setImaKrov(true);

    if($a1->getImaKrov() === true){
        echo "Automobil marke " .$a1->getMarka(). " ima krov<br>";
    } elseif($a1->getImaKrov() === false){
        echo "Automobil marke " .$a1->getMarka(). " nema krov<br>";
    } else{
        echo "Automobil marke " .$a1->getMarka(). " nema validno postavljeno polje za krov<br>";
    }

    // echo $a1->marka;  // Nije moguce: marka private polje
    echo $a1->getMarka();  // Ovo radi: poziva se geter za polje marka, geter vrati vrednost polja, a onda mi ispisemo tu vrednost


?>
