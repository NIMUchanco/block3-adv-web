CREATE TABLE `db_homeworks`.`homeworks` (
    `hw_id` INT NOT NULL AUTO_INCREMENT,
    `hw_title` VARCHAR(256) NOT NULL,
    `hw_description` TEXT,
    `due_date` DATE NOT NULL,
    PRIMARY KEY (`hw_id`)
) ENGINE = InnoDB;