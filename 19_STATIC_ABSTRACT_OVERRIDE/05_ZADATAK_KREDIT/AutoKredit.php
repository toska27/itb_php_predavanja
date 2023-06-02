<?php

    require_once "Kredit.php";

    class AutoKredit extends Kredit{
        protected $autoKamata;

        public function getAutoKamata(){
            return $this->autoKamata;
        }
        public function setAutoKamata($ak){
            $this->autoKamata = $ak;
        }
        
        public function __construct($n, $o, $gk, $go, $ak){
            parent::__construct($n, $o, $gk, $go);
            $this->setAutoKamata($ak);
        }

        public function ispis(){
            echo "<p>$this->naziv, osnovica: $this->osnovica,
            godisnja kamata: $this->godisnjaKamata, godina otplate: $this->godinaOtplate,
            auto kamata: $this->autoKamata</p>";
        }

        public function mesecnaRata(){
            $kamata = $this->osnovica * $this->godinaOtplate * ($this->godisnjaKamata + $this->autoKamata) / 100;
            $ukupan_iznos = $this->osnovica + $kamata;
            $mesecna_rata = $ukupan_iznos / ($this->godinaOtplate * 12);
            return $mesecna_rata;
        }
    }
?>