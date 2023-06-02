<?php

    abstract class Kredit{

        protected $naziv;
        protected $osnovica;
        protected $godisnjaKamata;
        protected $godinaOtplate;

        public function getNaziv(){
            return $this->naziv;
        }
        public function getOsnovica(){
            return $this->osnovica;
        }
        public function getGodisnjaKamata(){
            return $this->godisnjaKamata;
        }
        public function getGodinaOtplate(){
            return $this->godinaOtplate;
        }
        public function setNaziv($n){
            $this->naziv = $n;
        }
        public function setOsnovica($o){
            $this->osnovica = $o;
        }
        public function setGodisnjaKamata($gk){
            $this->godisnjaKamata = $gk;
        }
        public function setGodinaOtplate($go){
            $this->godinaOtplate = $go;
        }

        public function __construct($n, $o, $gk, $go){
            $this->setNaziv($n);
            $this->setOsnovica($o);
            $this->setGodisnjaKamata($gk);
            $this->setGodinaOtplate($go);
        }

        public function ispis(){
        }

        public abstract function mesecnaRata();
    }

?>