-- DROP TABLE `homeworks`;

CREATE TABLE `db_homeworks`.`homeworks` (
    `hw_id` INT NOT NULL AUTO_INCREMENT,
    `hw_title` VARCHAR(256) NOT NULL,
    `hw_description` TEXT,
    `due_date` DATE NOT NULL,
    PRIMARY KEY (`hw_id`)
) ENGINE = InnoDB;

INSERT INTO `homeworks` (`hw_id`, `hw_title`, `hw_description`, `due_date`) VALUES (NULL, 'Update CV', 'Check my cv and update into the most recent version.', '2023-11-28');