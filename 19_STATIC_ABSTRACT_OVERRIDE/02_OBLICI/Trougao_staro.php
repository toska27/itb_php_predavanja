<?php
    class Trougao {
        private $a;
        private $b;
        private $c;

        public function getA(){
            return $this->a;
        }
        public function getB(){
            return $this->b;
        }
        public function getC(){
            return $this->c;
        }
        public function setA($a){
            if($a>0 && $a+$this->b > $this->c && $this->b+$this->c > $a && $a+$this->c > $this->b){
                $this->a = $a;
            } else{
                echo "<p>Ne moze da se PROMENI vrednost stranice a</p>";
            }
        }
        public function setB($b){
            if($b>0 && $this->a+$b > $this->c && $b+$this->c > $this->a && $this->a+$this->c > $b){
                $this->b = $b;
            } else{
                echo "<p>Ne moze da se PROMENI vrednost stranice b</p>";
            }
        }
        public function setC($c){
            if($c>0 && $this->a+$this->b > $c && $this->b+$c > $this->a && $this->a+$c > $this->b){
                $this->c = $c;
            } else{
                echo "<p>Ne moze da se PROMENI vrednost stranice c</p>";
            }
        }

        public function __construct($a, $b, $c){
            if($a>0 && $b>0 && $c>0 && $a+$b>$c && $b+$c>$a && $a+$c>$b){
                $this->a = $a;
                $this->b = $b;
                $this->c = $c;
            } else{
                $this->a = 0;
                $this->b = 0;
                $this->c = 0;
            }
        }

        public function obimTrougla(){
            return $this->a+$this->b+$this->c;
        }

        public function povrsinaTrougla(){
            $obim = $this->obimTrougla();
            $s = $obim / 2;
            $p = sqrt($s*($s-$this->a)*($s-$this->b)*($s-$this->c));
            return $p;
        }
        
    }
?>