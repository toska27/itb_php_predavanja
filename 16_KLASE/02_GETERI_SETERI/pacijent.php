<?php
    class Pacijent {
        private $ime;
        private $visina;
        private $tezina;


        public function getIme(){
            return $this->ime;
        }

        public function getVisina(){
            return $this->visina;
        }

        public function getTezina(){
            return $this->tezina;
        }

        public function setIme($i){
            $this->ime = $i;
        }

        public function setVisina($v){
            if($v>0 && $v<250){
                $this->visina = $v;
            } else {
                $this->visina = 250;
            }
        }

        public function setTezina($t){
            if($t>0 && $t<550){
                $this->tezina = $t;
            } else{
                $this->tezina = 550;
            }
        }

        function Stampaj(){
            echo "<p> Ime: ".$this->ime. " visina: " .$this->visina. "m, tezina: " .$this->tezina. "kg</p>";
            $bmi=$this->Bmi();
            echo "<p>BMI od pacijenta je $bmi</p>";
            $kritican = $this->Kritican();
            if($kritican){
                echo "<p>Pacijent je kriticno</p>";
            } else{
                echo "<p>Pacijent je dobro</p>";
            }
        }

        public function Bmi(){
            $rez = ($this->tezina / ($this->visina**2));
            return $rez;
        }

        public function Kritican(){
            $bmi = $this->Bmi();
            if($bmi<15 || $bmi>40){
                return true;
            } else {
                return false;
            }
        }
    }  

    $a1 = new Pacijent();
    $a1->setIme("Marko");
    $a1->setVisina(290);
    $a1->setTezina(400);
    
    echo "<p>Ime pacijenta: " .$a1->getIme(). "</p>";
    echo "<p>Visina pacijenta: " .$a1->getVisina(). "</p>";
    echo "<p>Tezina pacijenta: " .$a1->getTezina(). "</p>";
?>