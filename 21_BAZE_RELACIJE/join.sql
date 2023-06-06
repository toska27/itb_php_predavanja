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


SELECT CONCAT(`studenti`.`ime`, ' ', `studenti`.`prezime`) AS `student` ,
`predmeti`.`naziv`,
CONCAT(`nastavnici`.`ime`, ' ', `nastavnici`.`prezime`) AS `nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`
WHERE `studenti`.`ime`='Nemanja' AND `studenti`.`prezime`='Toskic';


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

