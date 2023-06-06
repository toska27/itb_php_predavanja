CREATE DATABASE fakultet;

CREATE TABLE `predmeti`(
    `id` INT PRIMARY KEY,
    `naziv` VARCHAR(45) NOT NULL,
    `smer` VARCHAR(45) NOT NULL
) ENGINE=INNODB;

CREATE TABLE `studenti`(
    `indeks` VARCHAR(20) PRIMARY KEY,
    `ime` VARCHAR(20) NOT NULL,
    `prezime` VARCHAR(20) NOT NULL
) ENGINE=INNODB;

CREATE TABLE `ispiti`(
    `id` INT PRIMARY KEY,
    `datum` DATE NOT NULL,
    `ocena` INT(10) NOT NULL
) ENGINE=INNODB;

CREATE TABLE `nastavnici`(
    `id` INT PRIMARY KEY,
    `ime` VARCHAR(20) NOT NULL,
    `prezime` VARCHAR(20) NOT NULL
) ENGINE=INNODB;

ALTER TABLE `ispiti`
ADD `student_indeks` VARCHAR(20) NOT NULL;

ALTER TABLE `ispiti`
ADD `predmet_id` INT NOT NULL;

ALTER TABLE `ispiti`
ADD `nastavnik_id` INT NOT NULL;

ALTER TABLE `ispiti`
ADD CONSTRAINT `student_ispit_fk`
FOREIGN KEY(`student_indeks`)
REFERENCES `studenti`(`indeks`);

ALTER TABLE `ispiti`
ADD CONSTRAINT `predmet_ispit_fk`
FOREIGN KEY(`predmet_id`)
REFERENCES `predmeti`(`id`);

ALTER TABLE `ispiti`
ADD CONSTRAINT `nastavnik_ispit_fk`
FOREIGN KEY(`nastavnik_id`)
REFERENCES `nastavnici`(`id`);



