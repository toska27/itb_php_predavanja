<?php

    class Osoba {
        protected $ime;
        protected $prezime;
        protected $godinaRodjenja;

        public function getIme(){
            return $this->ime;
        }
        public function getPrezime(){
            return $this->prezime;
        }
        public function getGodinaRodjenja(){
            return $this->godinaRodjenja;
        }

        public function setIme($i){
            $this->ime = $i;
        }
        public function setPrezime($p){
            $this->prezime = $p;
        }
        public function setGodinaRodjenja($gr){
            $this->godinaRodjenja = $gr;
        }

        public function __construct($i, $p, $gr){
            $this->setIme($i);
            $this->setPrezime($p);
            $this->setGodinaRodjenja($gr);
        }

        public function ispisOsobe(){
            echo "<p>Ime osobe: $this->ime, prezime: $this->prezime, godina rodjenja: $this->godinaRodjenja</p>";
        }

    }
?>