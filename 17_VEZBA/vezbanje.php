<?php
    // Zadatak 1
    $nizOcena = [10, 10, 10, 9, 9, 10, 10, 9];

    // Zadatak 1.2
    function prosecnaOcena($nizOcena){
        $zbir = 0;
        foreach($nizOcena as $ocena){
            $zbir += $ocena;
        }
        $prosek = $zbir / count($nizOcena);
        return $prosek;
    }
    $prosecna_ocena = prosecnaOcena($nizOcena);
    echo "<p>Prosecna ocena: $prosecna_ocena</p>";

    // Zadatak 1.3
    function maxOcena($nizOcena){
        $max = $nizOcena[0];
        for($i=1; $i<count($nizOcena); $i++){
            if($nizOcena[$i]>$max){
                $max = $nizOcena[$i];
            }
        }
        return $max;
    }
    $max = maxOcena($nizOcena);
    echo "<p>Max ocena koju je dobio je: $max</p>";

    // Zadatak 1.4
    function brojPredmetaMaxOcene($nizOcena){
        $broj = 0;
        for($i=0; $i<count($nizOcena); $i++){
            if($nizOcena[$i]==maxOcena($nizOcena)){
                $broj++;
            }
        }
        return $broj;
    }
    $broj = brojPredmetaMaxOcene($nizOcena);
    echo "<p>Broj predmeta iz kojih ima max ocenu je $broj</p>";

    // Zadatak 1.5
    function studentGeneracije($nizOcena){
        $brojac=0;
        $desetke=0;
        $devetke=0;
        for($i=0; $i<count($nizOcena); $i++){
            if($nizOcena[$i]>8){
                $brojac++;
            }
            if($nizOcena[$i]==10){
                $desetke++;
            }
            if($nizOcena[$i]==9){
                $devetke++;
            }
        }


        if($brojac==count($nizOcena) && $desetke>=$devetke){
            return true;
        } else{
            return false;
        }
    }
    if(studentGeneracije($nizOcena)){
        echo "<p>Student je generacije</p>";
    } else{
        echo "<p>Nije student generacije</p>";
    }

    // Zadatak 1.6
    function maxPodniz($nizOcena){
        $trenutni = 0;
        $max = 0;
        for($i=0; $i<count($nizOcena); $i++){
            if($nizOcena[$i]==maxOcena($nizOcena)){
                $trenutni++;
            } else{
                $trenutni = 0;
            }
            if($trenutni>$max){
            $max=$trenutni;
            }
        }
        return $max;
    }
    $podniz = maxPodniz($nizOcena);
    echo "<p>Max duzina podniza u kojoj je dobijao max ocenu je: $podniz</p>";

    echo "<hr>";
    echo "<hr>";

    // Zadatak 2.7
    $student = [
        [
            'naziv'=>'Matematika',
            'datum'=>'2023/1/28',
            'ocena'=>7
        ],
        [
            'naziv'=>'Fizika',
            'datum'=>'2020/6/20',
            'ocena'=>8
        ],
        [
            'naziv'=>'Sociologija',
            'datum'=>'2022/1/12',
            'ocena'=>10
        ],
        [
            'naziv'=>'Mehanika',
            'datum'=>'2020/9/11',
            'ocena'=>10
        ],
        [
            'naziv'=>'Hemija',
            'datum'=>'2023/2/18',
            'ocena'=>7
        ],
        [
            'naziv'=>'Engleski',
            'datum'=>'2020/8/25',
            'ocena'=>8
        ]
    ];

    // 2.  7.2
    function prosecnaOcenaA($student){
        $zbir = 0;
        for($i=0; $i<count($student); $i++){
            $zbir += $student[$i]['ocena'];
        }
        $prosek = $zbir / count($student);
        return $prosek;
    }
    $prosecna_ocena = prosecnaOcenaA($student);
    echo "<p>Prosecna ocena: $prosecna_ocena</p>";

    // 2.  7.3
    function maxOcenaA($student){
        $max = $student[0]['ocena'];
        for($i=1; $i<count($student); $i++){
            if($student[$i]['ocena']>$max){
                $max = $student[$i]['ocena'];
            }
        }
        return $max;
    }
    $max = maxOcenaA($student);
    echo "<p>Max ocena koju je dobio je: $max</p>";

    // 2.  7.4
    function brojPredmetaMaxOceneA($student){
        $broj = 0;
        for($i=0; $i<count($student); $i++){
            if($student[$i]['ocena']==maxOcenaA($student)){
                $broj++;
            }
        }
        return $broj;
    }
    $broj = brojPredmetaMaxOceneA($student);
    echo "<p>Broj predmeta iz kojih ima max ocenu je $broj</p>";

    // 2.  7.5
    function studentGeneracijeA($student){
        $brojac=0;
        $desetke=0;
        $devetke=0;
        for($i=0; $i<count($student); $i++){
            if($student[$i]['ocena']>8){
                $brojac++;
            }
            if($student[$i]['ocena']==10){
                $desetke++;
            }
            if($student[$i]['ocena']==9){
                $devetke++;
            }
        }

        if($brojac==count($student) && $desetke>=$devetke){
            return true;
        } else{
            return false;
        }
    }
    if(studentGeneracijeA($student)){
        echo "<p>Student je generacije</p>";
    } else{
        echo "<p>Nije student generacije</p>";
    }

    // 2.  7.6
    function maxPodnizA($student){
        $trenutni = 0;
        $max = 0;
        for($i=0; $i<count($student); $i++){
            if($student[$i]['ocena']==maxOcenaA($student)){
                $trenutni++;
            } else{
                $trenutni = 0;
            }
            if($trenutni>$max){
            $max=$trenutni;
            }
        }
        return $max;
    }
    $podniz = maxPodnizA($student);
    echo "<p>Max duzina podniza u kojoj je dobijao max ocenu je: $podniz</p>";

    // Zadatak 2. 8
    function istaGodina($student, $godina){
        for($i=0; $i<count($student); $i++){
            if(strpos($student[$i]['datum'], strval($godina)) !== false){
                echo "".$student[$i]['naziv']. ", ";
            }
        }
    }
    $godina = 2020;
    istaGodina($student, $godina);

    // Zadatak 2. 9
    function prosecnaGodina($student, $godina){
        $zbir = 0;
        $brojac = 0;
        for($i=0; $i<count($student); $i++){
            if(strpos($student[$i]['datum'], strval($godina)) !== false){
                $brojac++;
                $zbir += $student[$i]['ocena'];
            }
        }
        if($brojac==0){
            return 0;
        }
        $prosek = $zbir / $brojac;
        return $prosek;
    }
    $godina = 2021;
    $prosecnaOcena = prosecnaGodina($student, $godina);
    echo "<p>Prosecna ocena studenta $godina godine je $prosecnaOcena</p>";

    // Zadatak 2. 10
    function nazivMaxOcene($student){
        $max = 0;
        $imePredmeta = '';
        for($i=0; $i<count($student); $i++){
            if($student[$i]['ocena']==maxOcenaA($student)){
                if(strtotime($student[$i]['datum'])>=$max){
                    $max = strtotime($student[$i]['datum']);
                    $imePredmeta = $student[$i]['naziv'];
                }
            }
            //if($max==strtotime($student[$i]['datum'])){
            //   $imePredmeta = $student[$i]['naziv'];
            //}
        }
        return $imePredmeta;
    }
    $nazivMaxOcena = nazivMaxOcene($student);
    echo "<p>Student je iz predmeta $nazivMaxOcena dobio max ocenu</p>";
    

    // Zadatak 2. 11
    function zadataGranica($student, $string, $br1, $br2){
        $broj = 0;
        for($i=0; $i<count($student); $i++){
            if(strpos($student[$i]['naziv'], $string) !== false && $br1<$student[$i]['ocena'] && $student[$i]['ocena']<$br2){
                $broj++;
            }
        }
        return $broj;
    }
    $string = "ka";
    $br1 = 6;
    $br2= 9;
    $brojIspita = zadataGranica($student, $string, $br1, $br2);
    echo "<p>Broj ispita cija se ocena nalazi izmedju $br1 i $br2 i sadrze u sebi string '" .$string. "' je: $brojIspita</p>";

    echo "<hr>";
    echo "<hr>";

    // ZADATAK 3 (NIZ OBJEKTA)

    class Ispit {
        private $predmet;
        private $semestar;
        private $espb;
        private $ocena;
        private $datum;

        public function __construct($p, $s, $espb, $o, $d){
            $this->setPredmet($p);
            $this->setSemestar($s);
            $this->setEspb($espb);
            $this->setOcena($o);
            $this->setDatum($d);
        }

        public function getPredmet(){
            return $this->predmet;
        }
        public function getSemestar(){
            return $this->semestar;
        }
        public function getEspb(){
            return $this->espb;
        }
        public function getOcena(){
            return $this->ocena;
        }
        public function getDatum(){
            return $this->datum;
        }

        public function setPredmet($p){
            $this->predmet = $p;
        }
        public function setSemestar($s){
            $this->semestar = $s;
        }
        public function setEspb($espb){
            $this->espb = $espb;
        }
        public function setOcena($o){
            $this->ocena = $o;
        }
        public function setDatum($d){
            $this->datum = $d;
        }

        public function recUPredmetu($rec){
            if(strpos($this->predmet, $rec)!==false){
                return true;
            } else{
                return false;
            }
        }

        public function dvaBroja($b1, $b2){
            if(($this->ocena)>=$b1 && ($this->ocena)<=$b2){
                return true;
            } else{
                return false;
            }
        }

        public function godinaPolaganja(){
            $godinaSamo = substr($this->datum, 0, 4);
            return intval($godinaSamo);
        }

        public function godinaPrekoSemestra(){
            $godina = 1;
            if($this->semestar === 1 || $this->semestar === 2){
                return $godina;
            } elseif($this->semestar === 3 || $this->semestar === 4){
                return $godina+1;
            } elseif($this->semestar === 5 || $this->semestar === 6){
                return $godina+2;
            } else{
                return $godina+3;
            }
        }
    }

    $a1 = new Ispit('Matematika', 3, 6, 8, '2022/06/15');

    $proveraStringa = $a1->recUPredmetu('tika');
    if($proveraStringa){
        echo "<p>Rec se nalazi u predmetu</p>";
    } else{
        echo "<p>Rec se ne nalazi u predmetu</p>";
    }

    $proveraBroja = $a1->dvaBroja(7, 9);
    if($proveraBroja){
        echo "<p>Ocena se nalazi izmedju dva broja</p>";
    } else{
        echo "<p>Ocena se ne nalazi izmedju dva broja</p>";
    }
    
    $godinaPolaganja = $a1->godinaPolaganja();
    echo "<p>Student je ispit polozio u $godinaPolaganja godini faksa</p>";

    $godinaStudija = $a1->godinaPrekoSemestra();
    echo "<p>Godina studija: $godinaStudija</p>";

    echo "<hr>";




    // Zadatak 3. 12                  s  esp o
    $ispit1 = new Ispit('Engleski', 1, 12, 8, '2020/01/10');
    $ispit2 = new Ispit('Hemija', 2, 30, 9, '2020/07/11');
    $ispit3 = new Ispit('Sociologija', 3, 15, 10, '2021/02/19');
    $ispit4 = new Ispit('Logika', 4, 20, 6, '2021/07/29');
    $ispit5 = new  Ispit('Fizika', 5, 10, 7, '2022/01/11');
    $ispit6 = new Ispit('Mehanika', 6, 6, 8, '2022/07/07');
    $ispit7 = new Ispit('Ekonomija', 7, 30, 9, '2023/02/04');
    $ispit8 = new Ispit('Programiranje', 8, 30, 9, '2023/06/20');

    $student = [$ispit1, $ispit2, $ispit3, $ispit4, $ispit5, $ispit6, $ispit7, $ispit8];

    // Zadatak 3. 13
    function godinaStudija($student, $godina){
        $broj = 0;
        foreach($student as $ispit){
            if($godina == 1 && ($ispit->getSemestar()==1 || $ispit->getSemestar()==2)){
                $broj++;
            } elseif($godina == 2 && ($ispit->getSemestar()==3 || $ispit->getSemestar()==4)){
                $broj++;
            } elseif($godina == 3 && ($ispit->getSemestar()==5 || $ispit->getSemestar()==6)){
                $broj++;
            } elseif($godina == 4 && ($ispit->getSemestar()==7 || $ispit->getSemestar()==8)){
                $broj++;
            }
        }
        return $broj++;;
    }
    $godina = 4;
    $brojIspita = godinaStudija($student, $godina);
    echo "<p>Student je u $godina godini studija polozio $brojIspita ispita</p>";

    // Zadatak 3. 14
    function ocistioGodinu($student, $godina){
        $zbir=0;
        foreach($student as $ispit){
            if($godina == 1 && ($ispit->getSemestar()==1 || $ispit->getSemestar()==2)){
                $zbir+=$ispit->getEspb();
            } elseif ($godina == 2 && ($ispit->getSemestar()==3 || $ispit->getSemestar()==4)){
                $zbir+=$ispit->getEspb();
            }  elseif ($godina == 3 && ($ispit->getSemestar()==5 || $ispit->getSemestar()==6)){
                $zbir+=$ispit->getEspb();
            } elseif ($godina == 4 && ($ispit->getSemestar()==7 || $ispit->getSemestar()==8)){
                $zbir+=$ispit->getEspb();
            }
        }
        if($zbir>=60){
            return true;
        } else{
            return false;
        }
    }
    $godina = 2;
    $ocistio = ocistioGodinu($student, $godina);
    if($ocistio){
        echo "<p>Student je ocistio $godina godinu studija</p>";
    }  else{
        echo "<p>Student nije ocistio $godina godinu studija</p>";
    }

    // Zadatak 3. 15
    function najboljiProsekUGodini($student){
        $zbir1 = 0;
        $brojac1 = 0;
        $zbir2 = 0;
        $brojac2 = 0;
        $zbir3 = 0;
        $brojac3 = 0;
        $zbir4 = 0;
        $brojac4 = 0;
        foreach($student as $ispit){
            if($ispit->getSemestar()==1 || $ispit->getSemestar()==2){
                $zbir1 += $ispit->getOcena();
                $brojac1++;
            } elseif($ispit->getSemestar()==3 || $ispit->getSemestar()==4){
                $zbir2 += $ispit->getOcena();
                $brojac2++;
            } elseif($ispit->getSemestar()==5 || $ispit->getSemestar()==6){
                $zbir3 += $ispit->getOcena();
                $brojac3++;
            } elseif($ispit->getSemestar()==7 || $ispit->getSemestar()==8){
                $zbir4 += $ispit->getOcena();
                $brojac4++;
            }
        }
        if($brojac1>0){
            $prosek1 = $zbir1 / $brojac1;
        } else{
            $prosek1 = 0;
        }
        if($brojac2>0){
            $prosek2 = $zbir2 / $brojac2;
        } else{
            $prosek2 = 0;
        }
        if($brojac3>0){
            $prosek3 = $zbir3 / $brojac3;
        } else{
            $prosek3 = 0;
        }
        if($brojac4>0){
            $prosek4 = $zbir4 / $brojac4;
        } else{
            $prosek4 = 0;
        }
        $nizProseka = [$prosek1, $prosek2, $prosek3, $prosek4];
        $maxProsek = $nizProseka[0];
        for($i=1; $i<count($nizProseka); $i++){
            if($nizProseka[$i]>$maxProsek){
                $maxProsek = $nizProseka[$i];
            }
        }
        if($maxProsek == $prosek1){
            return 1;
        } elseif($maxProsek == $prosek2){
            return 2;
        } elseif($maxProsek == $prosek3){
            return 3;
        } elseif($maxProsek == $prosek4){
            return 4;
        }
    }
    $godinaSaBestProsek = najboljiProsekUGodini($student);
    echo "<p>Student je u $godinaSaBestProsek godini studija imao najbolji prosek</p>";

?>