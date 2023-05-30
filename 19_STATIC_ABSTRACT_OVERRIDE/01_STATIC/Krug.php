<?php
    class Krug {
        protected $r;
        const PI = 3.14;
        private static $pi = self::PI;
        private static $brojDecimala = 2;

        private static $brojKrugova = 0;

        public static function getBrojKrugova(){
            return self::$brojKrugova;
        }

        public function getR(){
            return $this->r;
        }
        public function setR($r){
            if($r>=0){
                $this->r = $r;
            } else{
                $this->r = 0;
            }
        }

        public function __construct($r){
            self::$brojKrugova++;
            $this->setR($r);
        }

        public function obimKruga(){
            $obim = round(2 * $this->r * self::$pi, self::$brojDecimala); // sa self
            return $obim;
        }

        public function povrsinaKruga(){
            $povrsina = round(($this->r**2) * Krug::PI, self::$brojDecimala); // moze i ovako Pi da napisemo
            return $povrsina;
        }

        public static function setPi($vr){
            self::$pi = $vr;
        }
        public static function getPi(){
            return self::$pi;
        }

        public static function setBrojDecimala($br){
            self::$brojDecimala = $br;
        }
        public static function getBrojDecimala(){
            return self::$brojDecimala;
        }
    }

?>