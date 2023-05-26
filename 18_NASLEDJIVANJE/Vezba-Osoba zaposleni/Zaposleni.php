<?php

    require_once "Osoba.php";

    class Zaposleni extends Osoba {
        protected $plata;
        protected $pozicija;

        public function getPlata(){
            return $this->plata;
        }
        public function getPozicija(){
            return $this->pozicija;
        }

        public function setPlata($plata){
            $this->plata = $plata;
        }
        public function setPozicija($pozicija){
            $this->pozicija = $pozicija;
        }

        public function __construct($i, $p, $gr, $plata, $pozicija){
            parent::__construct($i, $p, $gr);
            $this->setPlata($plata);
            $this->setPozicija($pozicija);
        }

        public function ispisZaposleni(){
            echo "<p>Ime osobe: $this->ime, prezime: $this->prezime, godina rodjenja: $this->godinaRodjenja, 
                 plata: $this->plata, pozicija: $this->pozicija</p>";
        }
    }

?>