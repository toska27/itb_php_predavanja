<?php
    require_once "Sportista.php";

    class Kosarkas extends Sportista {
        protected $poeni;

        public function getPoeni(){
            return $this->poeni;        
        }
        public function setPoeni($poeni){
            $this->poeni = $poeni;
        }

        public function __construct($i, $p, $godR, $gradR, $poeni){
            parent::__construct($i, $p, $godR, $gradR);
            $this->setPoeni($poeni);
        }
    }
?>