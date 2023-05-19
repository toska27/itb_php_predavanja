<?php
    class Pacijent {
        var $ime;
        var $visina;
        var $tezina;

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

        function Bmi(){
            $rez = ($this->tezina / ($this->visina**2));
            return $rez;
        }

        function Kritican(){
            $bmi = $this->Bmi();
            if($bmi<15 || $bmi>40){
                return true;
            } else {
                return false;
            }
        }
    }  

    $a1 = new Pacijent();
    $a1->ime = "Marko";
    $a1->visina = 1.80;
    $a1->tezina = 84;
    $a1->Stampaj();
    /*echo "<p>BMI od pacijenta je: " .$a1->Bmi(). "</p>";
    if($a1->Kritican()){
        echo "<p>Pacijent je kriticno</p>";
    } else{
        echo "<p>Pacijent je dobro</p>";
    }*/
    

    $a2 = new Pacijent();
    $a2->ime = "Petar";
    $a2->visina = 1.76;
    $a2->tezina = 75;
    $a2->Stampaj();
    /*echo "<p>BMI od pacijenta je: " .$a2->Bmi(). "</p>";
    if($a2->Kritican()){
        echo "<p>Pacijent je kriticno</p>";
    } else{
        echo "<p>Pacijent je dobro</p>";
    };*/

    $a3 = new Pacijent();
    $a3->ime = "Petar";
    $a3->visina = 1.94;
    $a3->tezina = 159;
    $a3->Stampaj();
    /*echo "<p>BMI od pacijenta je: " .$a3->Bmi(). "</p>";
    if($a3->Kritican()){
        echo "<p>Pacijent je kriticno</p>";
    } else{
        echo "<p>Pacijent je dobro</p>";
    }*/
?>