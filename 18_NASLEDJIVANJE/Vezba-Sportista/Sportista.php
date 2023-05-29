<?php

    class Sportista {
        protected $ime;
        protected $prezime;
        protected $godinaRodjenja;
        protected $gradRodjenja;

        public function getIme(){
            return $this->ime;
        }
        public function getPrezime(){
            return $this->prezime;
        }
        public function getGodinaRodjenja(){
            return $this->godinaRodjenja;
        }
        public function getGradRodjenja(){
            return $this->gradRodjenja;
        }

        public function setIme($i){
            $this->ime = $i;
        }
        public function setPrezime($p){
            $this->prezime = $p;
        }
        public function setGodinaRodjenja($godR){
            $this->godinaRodjenja = $godR;
        }
        public function setGradRodjenja($gradR){
            $this->GradRodjenja = $gradR;
        }

        public function __construct($i, $p, $godR, $gradR){
            $this->setIme($i);
            $this->setPrezime($p);
            $this->setGodinaRodjenja($godR);
            $this->setGradRodjenja($gradR);
        }
    }
?>