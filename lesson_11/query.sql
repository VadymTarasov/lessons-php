/*
    Створити базу даних Фільми.
    Створити три таблиці - актори, фільми та режисери.
    Заповнити таблиці даними.
    Зробити вибірку фільмів, у яких режисер відомий (is_famous - TRUE/FALSE)
    Отримати дані про акторів, вік яких 43 роки
    Змінити дату виходу фільму, які були випущені у 2021 році на 2022
    Зробити дамп бази та завантажити його на гіт.
*/

-- Створити базу даних Фільми.
CREATE
DATABASE cinema;

-- Створити три таблиці - актори, фільми та режисери.

CREATE TABLE `cinema`.`actors`
(
`id` INT NOT NULL,
PRIMARY KEY (`id`)
) ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE `cinema`.`films`
(
`id` INT NOT NULL,
PRIMARY KEY (`id`)
) ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE `cinema`.`filmmaker`
(
`id` INT NOT NULL,
PRIMARY KEY (`id`)
) ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

ALTER TABLE `cinema`.`actors`
ADD COLUMN `name` VARCHAR(45) NOT NULL AFTER `id`,
ADD COLUMN `age` INT NOT NULL AFTER `name`,
CHANGE COLUMN `id` `id` INT NOT NULL AUTO_INCREMENT;

ALTER TABLE `cinema`.`filmmaker`
ADD COLUMN `is_famous` TINYINT NOT NULL AFTER `id`,
ADD COLUMN `name` VARCHAR(45) NOT NULL AFTER `is_famous`,
CHANGE COLUMN `id` `id` INT NOT NULL AUTO_INCREMENT ;

ALTER TABLE `cinema`.`films`
ADD COLUMN `name` VARCHAR(45) NOT NULL AFTER `id`,
ADD COLUMN `year` VARCHAR(45) NOT NULL AFTER `name`,
CHANGE COLUMN `id` `id` INT NOT NULL AUTO_INCREMENT ;

-- Заповнити таблиці даними.
INSERT INTO `cinema`.`actors` (`name`, `age`) VALUES ('Джонни Депп', '58');
INSERT INTO `cinema`.`actors` (`name`, `age`) VALUES ('Леонардо Ди Каприо', '47');
INSERT INTO `cinema`.`actors` (`name`, `age`) VALUES ('Анджелина Джоли', '46');
INSERT INTO `cinema`.`actors` (`name`, `age`) VALUES ('Джеймс Франко', '43');
INSERT INTO `cinema`.`actors` (`name`, `age`) VALUES ('Кэтрин Хейгл', '43');

INSERT INTO `cinema`.`films` (`name`, `year`) VALUES ('Вечные', '2021');
INSERT INTO `cinema`.`films` (`name`, `year`) VALUES ('Веном 2', '2021');
INSERT INTO `cinema`.`films` (`name`, `year`) VALUES ('Пираты карибского моря', '2003');
INSERT INTO `cinema`.`films` (`name`, `year`) VALUES ('Оз: Великий и Ужасный', '2013');

INSERT INTO `cinema`.`filmmaker` (`is_famous`, `name`) VALUES ('0', 'Сэм Рэйми');
INSERT INTO `cinema`.`filmmaker` (`is_famous`, `name`) VALUES ('0', 'Эспен Сандберг');
INSERT INTO `cinema`.`filmmaker` (`is_famous`, `name`) VALUES ('1', 'Хлоя Чжао');

-- Зробити вибірку фільмів, у яких режисер відомий (is_famous - TRUE/FALSE)
SELECT * FROM `cinema`.`filmmaker` where `is_famous` = true;

-- Отримати дані про акторів, вік яких 43 роки
SELECT * FROM `cinema`.`actors` where `age` = 43;

-- Змінити дату виходу фільму, які були випущені у 2021 році на 2022
UPDATE `cinema`.`films` SET `year` = '2022' WHERE (`year` = '2021');

-- Зробити дамп бази та завантажити його на гіт.
mysqldump -u root -p cinema > /var/www/lessons.loc/lesson_11/cinema_dump20220411.sql


