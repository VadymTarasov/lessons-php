


CREATE DATABASE `db2` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE `db2`.`products` (
`id` INT NOT NULL AUTO_INCREMENT,
`name` VARCHAR(45) NOT NULL,
`price` INT NOT NULL,
`season` VARCHAR(45) NULL,
PRIMARY KEY (`id`))
    ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


INSERT INTO `db2`.`products` (`name`, `price`, `season`) VALUES ('клубника', '50', 'лето');
INSERT INTO `db2`.`products` (`name`, `price`, `season`) VALUES ('вишня ', '25', 'лето');
INSERT INTO `db2`.`products` (`name`, `price`, `season`) VALUES ('мандарины', '20', 'зима');
INSERT INTO `db2`.`products` (`name`, `price`, `season`) VALUES ('калина', '15', 'зима');
