CREATE DATABASE accounts;

CREATE TABLE `accounts`.`users` 
(
    `id` INT(1) NOT NULL AUTO_INCREMENT,
    `first_name` VARCHAR(50) NOT NULL,
     `last_name` VARCHAR(50) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `password` VARCHAR(100) NOT NULL,
    `hash` VARCHAR(32) NOT NULL,
    `active` BOOL NOT NULL DEFAULT 0,
PRIMARY KEY (`id`) 
);

CREATE TABLE `accounts`.`groups`
(
    `gID` INT(1) NOT NULL AUTO_INCREMENT,
    `groupName` VARCHAR(50) NOT NULL,
    `Time1` VARCHAR(20) NOT NULL,
    `Time2` VARCHAR(20) NOT NULL,
    `Time3` VARCHAR(20) NOT NULL,
    `Time4` VARCHAR(20) NOT NULL,
    `Time5` VARCHAR(20) NOT NULL,
    `Time6` VARCHAR(20) NOT NULL,
    `Time7` VARCHAR(20) NOT NULL,
    `Time8` VARCHAR(20) NOT NULL,
    `Time9` VARCHAR(20) NOT NULL,
    `Time10` VARCHAR(20) NOT NULL,
PRIMARY KEY (`gID`)
);

CREATE TABLE `accounts`.`availabilities`
(
    `ID` INT(1) NOT null auto_increment,
    `UID` INT references users(id),
    `gID` INT references groups(gID),  
    `Time1` VARCHAR(10) NOT NULL,
    `Time2` VARCHAR(10) NOT NULL,
    `Time3` VARCHAR(10) NOT NULL,
    `Time4` VARCHAR(10) NOT NULL,
    `Time5` VARCHAR(10) NOT NULL,
    `Time6` VARCHAR(10) NOT NULL,
    `Time7` VARCHAR(10) NOT NULL,
    `Time8` VARCHAR(10) NOT NULL,
    `Time9` VARCHAR(10) NOT NULL,
    `Time10` VARCHAR(10) NOT NULL,
PRIMARY KEY (`ID`)
);
