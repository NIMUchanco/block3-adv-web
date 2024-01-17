-- CREAT TABLES --
CREATE TABLE `maiko25_adv_web`.`models` (
    `modelID` INT NOT NULL AUTO_INCREMENT ,
    `modelName` VARCHAR(256) NOT NULL ,
    `brandID` INT NOT NULL , `partsTypeID` INT NOT NULL ,
    `price` INT NOT NULL , `compatibilityID` INT NOT NULL ,
    PRIMARY KEY (`modelID`)
) ENGINE = InnoDB;

CREATE TABLE `maiko25_adv_web`.`brands` (
    `brandID` INT NOT NULL AUTO_INCREMENT ,
    `brandName` VARCHAR(256) NOT NULL ,
    PRIMARY KEY (`brandID`)
) ENGINE = InnoDB;

CREATE TABLE `maiko25_adv_web`.`partsType` (
    `partsTypeID` INT NOT NULL AUTO_INCREMENT ,
    `partsTypeName` VARCHAR(256) NOT NULL ,
    PRIMARY KEY (`partTypeID`)
) ENGINE = InnoDB;

CREATE TABLE `maiko25_adv_web`.`compatibility` (
    `compatibilityID` INT NOT NULL AUTO_INCREMENT ,
    `compatibilityList` VARCHAR(256) NOT NULL ,
    PRIMARY KEY (`compatibilityID`)
) ENGINE = InnoDB;

-- CREATE TABLE `maiko25_adv_web`.`stock` (
--     `stockID` INT NOT NULL AUTO_INCREMENT ,
--     `modelID` INT NOT NULL , `stockNum` INT NOT NULL ,
--     PRIMARY KEY (`stockID`)
-- ) ENGINE = InnoDB;


-- INSERT DATA --
INSERT INTO `brands` (`brandID`, `brandName`) VALUES (NULL, 'Apple'), (NULL, 'ASUS'), (NULL, 'NVIDIA'), (NULL, 'Samsung'), (NULL, 'Corsair');

INSERT INTO `partsType` (`partsTypeID`, `partsTypeName`) VALUES (NULL, 'CPU'), (NULL, 'RAM'), (NULL, 'SSD'), (NULL, 'GPU'), (NULL, 'Motherboard');

INSERT INTO `compatibility` (`compatibilityID`, `compatibilityList`) VALUES (NULL, 'AMD'), (NULL, 'Intel'), (NULL, 'ARM'), (NULL, 'AMD & Intel'), (NULL, 'AMD & Intel & ARM');

INSERT INTO `stock` (`stockID`, `modelID`, `stockNum`) VALUES (NULL, '1', '50'), (NULL, '2', '100'), (NULL, '3', '80'), (NULL, '4', '150'), (NULL, '5', '200');

INSERT INTO `models` (`modelID`, `modelName`, `brandID`, `partsTypeID`, `price`, `compatibilityID`, `stockNum`) VALUES (NULL, 'ASUS ROG Strix B550-F Gaming', '2', '5', '1000', '1', '50'), (NULL, 'Corsair Vengeance LPX', '5', '2', '300', '4', '100'), (NULL, 'Samsung 970 EVO', '4', '3', '200', '5', '80'), (NULL, 'NVIDIA GeForce RTX 3080', '3', '4', '250', '4', '150'), (NULL, 'Apple M1 Pro', '1', '1', '2000', '3', '200');


-- FOREIGN KEYS --
ALTER TABLE `models` ADD CONSTRAINT `brandID` FOREIGN KEY (`brandID`) REFERENCES `brands`(`brandID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `models` ADD CONSTRAINT `partsTypeID` FOREIGN KEY (`partsTypeID`) REFERENCES `partsType`(`partsTypeID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
-- ALTER TABLE `models` ADD CONSTRAINT `compatibilityID` FOREIGN KEY (`compatibilityID`) REFERENCES `compatibility`(`compatibilityID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `stock` ADD CONSTRAINT `modelID` FOREIGN KEY (`modelID`) REFERENCES `models`(`modelD`) ON DELETE RESTRICT ON UPDATE RESTRICT;


-- SORTING --
SELECT * FROM `models` NATURAL JOIN `brands` NATURAL JOIN `partsType` NATURAL JOIN `compatibility`;
SELECT * FROM `models` NATURAL JOIN `brands` ORDER BY `brandName` ASC;
SELECT * FROM `models` NATURAL JOIN `brands` NATURAL JOIN `partsType` WHERE `partsTypeName` = 'RAM';
SELECT * FROM `models` ORDER BY `price` ASC;
SELECT * FROM `models` NATURAL JOIN `brands` NATURAL JOIN `partsType` NATURAL JOIN `compatibility` WHERE `brandName` = 'Apple' AND `partsTypeName` = 'CPU' AND `compatibilityList` = 'ARM';
