<?php

    require_once "Kredit.php";

    class StambeniKredit extends Kredit {

        public function __construct($n, $o, $gk, $go){
            parent::__construct($n, $o, $gk, $go);
        }

        public function ispis(){
            echo "<p>$this->naziv, osnovica: $this->osnovica,
            godisnja kamata: $this->godisnjaKamata, godina otplate: $this->godinaOtplate</p>";
        }

        public function mesecnaRata(){
            $mesecna_kamata = $this->godisnjaKamata / 12 / 100;
            $stepen = pow(1 + $mesecna_kamata, $this->godinaOtplate * 12);
            $mesecna_rata = ($this->osnovica * $mesecna_kamata * $stepen)
            / ($stepen - 1);
            return $mesecna_rata;
        }
    }

?>