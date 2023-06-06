CREATE DATABASE biblioteka;

CREATE TABLE `clanovi`(
    `id` INT PRIMARY KEY,
    `ime` INT VARCHAR(45) NOT NULL,
    `prezime` INT VARCHAR(45) NOT NULL,
    `adresa` VARCHAR(45) NOT NULL,
    `telefon` VARCHAR(45)
) ENGINE=INNODB;

CREATE TABLE `knjige`(
    `id` INT PRIMARY KEY,
    `naziv` VARCHAR(45) NOT NULL
) ENGINE=INNODB;

CREATE TABLE `zanr`(
    `id` INT PRIMARY KEY,
    `naziv` VARCHAR(45) NOT NULL
) ENGINE=INNODB;

CREATE TABLE `zaduzenje`(
    `id` INT PRIMARY KEY,
    `datum` DATE,
    `vratio` TINYINT(1) NOT NULL
) ENGINE=INNODB;

CREATE TABLE `pisac`(
    `id` INT PRIMARY KEY,
    `ime` VARCHAR(45) NOT NULL,
    `prezime` VARCHAR(45) NOT NULL,
    `bio` TEXT,
    `god_rodj` YEAR
) ENGINE=INNODB;

CREATE TABLE `knjige_has_zanr`(
    `knjige_id` INT NOT NULL,
    `zanr_id` INT NOT NULL
) ENGINE=INNODB;

ALTER TABLE `zaduzenje`
MODIFY COLUMN `datum` DATE NOT NULL;

ALTER TABLE `knjige_has_zanr`
ADD CONSTRAINT `knjige_has_fk`
FOREIGN KEY(`knjige_id`)
REFERENCES `knjige`(`id`)
ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `knjige_has_zanr`
ADD CONSTRAINT `zanr_has_fk`
FOREIGN KEY(`zanr_id`)
REFERENCES `zanr`(`id`)
ON DELETE NO ACTION ON UPDATE CASCADE;

ALTER TABLE `zaduzenje`
ADD `clanovi_id` INT NOT NULL;
ALTER TABLE `zaduzenje`
ADD `knjige_id` INT NOT NULL;

ALTER TABLE `zaduzenje`
ADD CONSTRAINT `clanovi_knj_fk`
FOREIGN KEY(`clanovi_id`)
REFERENCES `clanovi`(`id`)
ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `zaduzenje`
ADD CONSTRAINT `knjige_cla_fk`
FOREIGN KEY(`knjige_id`)
REFERENCES `knjige`(`id`)
ON DELETE NO ACTION ON UPDATE CASCADE; -- BOLJE NO ACTION KOD DELETE

CREATE TABLE `knjige_has_pisac`(
    `knjige_id` INT NOT NULL,
    `pisac_id` INT NOT NULL
) ENGINE=INNODB;

ALTER TABLE `knjige_has_pisac`
ADD CONSTRAINT `knjige_pis_fk`
FOREIGN KEY(`knjige_id`)
REFERENCES `knjige`(`id`)
ON DELETE NO ACTION ON UPDATE CASCADE; -- BOLJE CASCADE
ALTER TABLE `knjige_has_pisac`
ADD CONSTRAINT `pisac_knj_fk`
FOREIGN KEY(`pisac_id`)
REFERENCES `pisac`(`id`)
ON DELETE NO ACTION ON UPDATE CASCADE;

INSERT INTO `knjige`(`id`, `naziv`)
VALUES
(1, 'List'),
(2, 'Drvo'),
(3, 'Koren');

INSERT INTO `zanr`(`id`, `naziv`)
VALUES
(2, 'bajka'),
(4, 'basna'),
(6, 'pripovetka');

INSERT INTO `knjige_has_zanr`(`knjige_id`, `zanr_id`)
VALUES
(1, 4),
(2, 2),
(2, 4),
(3, 6),
(3, 2);

INSERT INTO `pisac`(`id`, `ime`, `prezime`, `bio`, `god_rodj`)
VALUES
(1, 'Pera', 'Peric', null, null),
(2, 'Mara', 'Maric', 'Dobro pise', 1956),
(3, 'Zika', 'Zikic', null, 1967);

INSERT INTO `knjige_has_pisac`(`knjige_id`, `pisac_id`)
VALUES
(1, 2),
(2, 3),
(3, 1),
(3, 3),
(2, 2);

INSERT INTO `clanovi`(`id`, `ime`, `prezime`, `adresa`)
VALUES
(1, 'Karla', 'Kostic', 'Adresa Karle'),
(3, 'Marko', 'Katic', 'Adresa Marka'),
(5, 'Tijana', 'Misic', 'Adresa Tijane');

INSERT INTO `zaduzenje`(`id`, `clanovi_id`, `knjige_id`, `datum`, `vratio`)
VALUES
(1, 3, 2, '2019-12-03', 0),
(2, 1, 1, '2022-10-02', 1),
(3, 3, 3, '2020-01-05', 1),
(4, 5, 2, '2021-11-2', 0);
