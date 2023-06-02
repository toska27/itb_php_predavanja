<?php

    require_once "Oblik.php";

    class Kvadrat extends Oblik {
        private $a;

        public function getA(){
            return $this->a;
        }

        public function setA($a){
            if($a>0){
                $this->a = $a;
            } else{
                $this->a = 0;
            }
        }

        public function __construct($a){
            parent::__construct(Oblik::KVADRAT);
            $this->setA($a);
        }

        public function obim(){   // override
            return $this->a*4;
        }

        public function povrsina(){  // override (gazi osnovnu metodu iz osnovne klase)
            return $this->a**2;
        }

        /*public function obim($a, $b){   // overload(preklapanje)
            return $this->a*4;
        }*/

    }

?>