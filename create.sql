DROP  DATABASE IF EXISTS budget;
CREATE DATABASE IF NOT EXISTS budget;
GRANT ALL PRIVILEGES ON budget.* to 'budgetuser'@'localhost' identified by 'budgetuser';
USE budget;



--
-- Table structure for table `transactions`  
--


DROP TABLE IF EXISTS  `transactions`;
 CREATE TABLE  `transactions`  (
     `id`  INT(100) NOT NULL AUTO_INCREMENT,
     `name`  VARCHAR(20) NOT NULL,
     `title`  VARCHAR(40) NOT NULL,
     `amount`  INT(5) NOT NULL,
     `flow`  VARCHAR(10) NOT NULL,
     `dateSubmitted`  DATE NOT NULL,
	`because` VARCHAR(20) NOT NULL,
    PRIMARY KEY (`id`)
);

--
-- Dumping data for table `transactions` 
--

INSERT INTO  `transactions`  VALUES(1, 'Example', 'Cupid\'s Revenge Bid', 300, 'Paid', '2/15/2012');

--
-- Table structure for table `users`  
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
	 `id` INT(100) NOT NULL AUTO_INCREMENT,
	 `name`  VARCHAR(20) NOT NULL,
	 `password`  VARCHAR(40) NOT NULL,
	 `position` VARCHAR(10) NOT NULL,
	 `picture` VARCHAR(30) NOT NULL,
	PRIMARY KEY (`id`)
);

--
-- Dumping data for table `users` 
--

INSERT INTO  `users`  VALUES(1, 'MaryBeth', 'MARYMASSACREBUDGET12', 'Captain', 'link');
INSERT INTO  `users`  VALUES(2, 'Devon', 'MARYMASSACREBUDGET12', 'Captain', 'link');


-- 
-- Table structure for table `userLogs`
--

DROP TABLE IF EXISTS `userLogs`;
CREATE TABLE `userLogs` (
	`id` INT(100) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(20) NOT NULL,
	`dateSubmitted` DATE NOT NULL,
	`link` VARCHAR(30) NOT NULL,
	PRIMARY KEY(`id`)
);

--
-- Dumping data for table `userLogs`
--

INSERT INTO `userLogs` VALUES(1, 'MaryBeth', '2/12/2012', 'link');
INSERT INTO `userLogs` VALUES(2, 'Devon', '2/12/2012', 'link');



