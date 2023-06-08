SELECT CONCAT(`studenti`.`ime`, ' ', `studenti`.`prezime`) AS `student` ,
`predmeti`.`naziv`,
CONCAT(`nastavnici`.`ime`, ' ', `nastavnici`.`prezime`) AS `nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`
;


-- datog datuma
SELECT CONCAT(`studenti`.`ime`, ' ', `studenti`.`prezime`) AS `student` ,
`predmeti`.`naziv`,
CONCAT(`nastavnici`.`ime`, ' ', `nastavnici`.`prezime`) AS `nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`
WHERE `ispiti`.`datum`='2023-05-15'
;

-- ZA DATO IME I PREZIME ISPISATI ISPITE KOJE JE POLAGAO
SELECT CONCAT(`studenti`.`ime`, ' ', `studenti`.`prezime`) AS `student` ,
`predmeti`.`naziv`,
CONCAT(`nastavnici`.`ime`, ' ', `nastavnici`.`prezime`) AS `nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`
WHERE `studenti`.`ime`='Nemanja' AND `studenti`.`prezime`='Toskic'
AND `ispiti`.`ocena`>8
;
-- OVAKO PRAVILNIJE
SELECT DISTINCT
`predmeti`.`naziv`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`
WHERE `studenti`.`ime`='Nemanja' AND `studenti`.`prezime`='Toskic';

-- KAO PROSLI SAMO OCENA VECA OD 8
SELECT CONCAT(`studenti`.`ime`, ' ', `studenti`.`prezime`) AS `student` ,
`predmeti`.`naziv`,
CONCAT(`nastavnici`.`ime`, ' ', `nastavnici`.`prezime`) AS `nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`
WHERE `studenti`.`ime`='Nemanja' AND `studenti`.`prezime`='Toskic'
AND `ispiti`.`ocena`>8
;
-- OVAKO PRAVILNIJE
SELECT DISTINCT
`predmeti`.`naziv`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`
WHERE `studenti`.`ime`='Nemanja' AND `studenti`.`prezime`='Toskic' AND `ispiti`.`ocena`>8;

-- Za dato ime i prezime, odredite njegovu prosecnu ocenu
SELECT AVG(`ispiti`.`ocena`) AS `srednja_ocena` 
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
WHERE `studenti`.`ime`='Nemanja' AND `studenti`.`prezime`='Toskic' 
AND `ispiti`.`ocena`>5;

-- Za dat naziv predmeta odrediti maksimalnu ocenu na nekom ispitu iz tog predmeta.
SELECT MAX(`ispiti`.`ocena`) AS `max_ocena` 
FROM `ispiti`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
WHERE `predmeti`.`naziv`='CSS'
AND `ispiti`.`datum` = '2023-04-17';

-- Za dat datum i nastavnika odrediti prosečnu ocenu svih ispita koji su se polagali tog dana a koje je ocenio taj nastavnik.
SELECT AVG(`ispiti`.`ocena`) as `prosecna_ocena` FROM `ispiti`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`
WHERE `ispiti`.`datum` = '2023-04-17'
AND `nastavnici`.`ime`='Stefan'
AND `ispiti`.`ocena`>5;

SELECT * FROM `ispiti` as `i`
LEFT JOIN `nastavnici` as `n` ON `i`.`nastavnik_id`=`n`.`id`  -- moze i ovako

-- Za dati datum ispisati imena i prezimena studenata koji nisu polagali ispit tog dana

-- studenti koji su polagali taj dan
SELECT CONCAT(`studenti`.`ime`, ' ', `studenti`.`prezime`) AS `student` 
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
WHERE `ispiti`.`datum`='2023-04-18';

-- studenti koji nisu polagali taj dan
SELECT * FROM `studenti`
WHERE `studenti`.`indeks` NOT IN (SELECT `ispiti`.`student_indeks` from `ispiti` WHERE `ispiti`.`datum` = '2023-04-18');

-- studenti koji nisu polagali taj dan (moze i ovako)
SELECT CONCAT(`studenti`.`ime`, ' ', `studenti`.`prezime`) AS `student` 
FROM `studenti`
LEFT JOIN `ispiti` ON `ispiti`.`student_indeks`=`studenti`.`indeks` AND `ispiti`.`datum` = '2023-04-18'
WHERE `ispiti`.`id` is null;
