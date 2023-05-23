<?php
    class Knjiga {

        private $naslov;
        private $autor;
        private $godIzdanja;
        private $brojStrana;
        private $cena;

        public function getNaslov(){
            return $this->naslov;
        }
        public function getAutor(){
            return $this->autor;
        }
        public function getGodIzdanja(){
            return $this->godIzdanja;
        }
        public function getBrojStrana(){
            return $this->brojStrana;
        }
        public function getCena(){
            return $this->cena;
        }

        public function setNaslov($n){
            $this->naslov = $n;
        }
        public function setAutor($a){
            $this->autor = $a;
        }
        public function setGodIzdanja($gd){
            $this->godIzdanja = $gd;
        }
        public function setBrojStrana($bs){
            $this->brojStrana = $bs;
        }
        public function setCena($c){
            $this->cena = $c;
        }
        
        public function __construct($n, $a, $gd, $bs, $c){
            $this->setNaslov($n);
            $this->setAutor($a);
            $this->setGodIzdanja($gd);
            $this->setBrojStrana($bs);
            $this->setCena($c);
        }

        public function podaci(){
            echo "<p>Naslov knjige:" .$this->naslov. " autor:" .$this->autor. " godina izdanja: " .$this->godIzdanja. " broj strana: " .$this->brojStrana. 
                " cena: " .$this->cena."</p>";
        }

        public function obimna(){
            if(($this->brojStrana) > 600){
                return true;
            } else{
                return false;
            }
        }

        public function skupa(){
            if(($this->cena) > 8000){
                return true;
            } else{
                return false;
            }
        }

        public function dugackoime(){
            if((strlen($this->autor)) > 18){
                return true;
            } else{
                return false;
            }
        }
    }

    $a1 = new Knjiga("Alhemicar", "Paulo Koeljo", 1987, 601, 5500);
    $a1->podaci();
    if($a1->obimna()){
        echo "<p>Knjiga je obimna</p>";
    } else{
        echo "<p>Knjiga nije obimna</p>";
    }
    if($a1->skupa()){
        echo "<p>Knjiga je skupa</p>";
    } else{
        echo "<p>Knjiga nije skupa</p>";
    }
    if($a1->dugackoime()){
        echo "<p>Ime autora je dugacko</p>";
    } else{
        echo "<p>Ime autora nije dugacko</p>";
    }


?>