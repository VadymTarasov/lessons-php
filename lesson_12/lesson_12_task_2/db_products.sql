/*
Сформувати базу даних “Список товарів”, що має такі поля:
    назва товару
    ціна товару
    сезон (наприклад, полуниця - влітку, мандарини - взимку, тощо)
Написати програму для перегляду даних з бд, а також для додавання нового запису.
*/

CREATE DATABASE `lessons` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE `lessons`.`products` (
`id` INT NOT NULL AUTO_INCREMENT,
`name` VARCHAR(45) NOT NULL,
`price` INT NOT NULL,
`season` VARCHAR(45) NULL,
PRIMARY KEY (`id`))
    ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


INSERT INTO `lessons`.`products` (`name`, `price`, `season`) VALUES ('клубника', '50', 'лето');
INSERT INTO `lessons`.`products` (`name`, `price`, `season`) VALUES ('вишня ', '25', 'лето');
INSERT INTO `lessons`.`products` (`name`, `price`, `season`) VALUES ('мандарины', '20', 'зима');
INSERT INTO `lessons`.`products` (`name`, `price`, `season`) VALUES ('калина', '15', 'зима');
