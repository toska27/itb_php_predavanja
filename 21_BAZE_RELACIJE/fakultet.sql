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

CREATE TABLE `zvanje`(
    `id` INT PRIMARY KEY,
    `naziv_zvanja` VARCHAR(45) NOT NULL
) ENGINE=INNODB;

CREATE TABLE `smer`(
    `id` INT PRIMARY KEY,
    `naziv_smera` VARCHAR(45) NOT NULL
) ENGINE=INNODB;

CREATE TABLE `katedra`(
    `id` INT PRIMARY KEY,
    `naziv_katedre` VARCHAR(45) NOT NULL
) ENGINE=INNODB;

ALTER TABLE `nastavnici`
ADD `zvanje_id` INT NOT NULL;

ALTER TABLE `nastavnici`
MODIFY COLUMN `zvanje_id` INT;

ALTER TABLE `nastavnici`
ADD CONSTRAINT `nastavnik_zva_fk`
FOREIGN KEY(`zvanje_id`)
REFERENCES `zvanje`(`id`);

ALTER TABLE `studenti`
ADD `smer_id` INT NOT NULL;

ALTER TABLE `studenti`
MODIFY COLUMN `smer_id` INT;

ALTER TABLE `studenti`
ADD CONSTRAINT `studenti_sm_fk`
FOREIGN KEY(`smer_id`)
REFERENCES `smer`(`id`);

CREATE TABLE `katedra_has_nastavnici`(
    `nastavnik_id` INT NOT NULL,
    `katedra_id` INT NOT NULL
) ENGINE=INNODB;

ALTER TABLE `katedra_has_nastavnici`
ADD CONSTRAINT `katedra_nastavnici_nastavnik_fk`
FOREIGN KEY(`nastavnik_id`)
REFERENCES `nastavnici`(`id`);

ALTER TABLE `katedra_has_nastavnici`
ADD CONSTRAINT `katedra_nastavnici_katedra_fk`
FOREIGN KEY(`katedra_id`)
REFERENCES `katedra`(`id`);