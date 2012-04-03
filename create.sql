DROP  DATABASE IF EXISTS budget;
CREATE DATABASE IF NOT EXISTS budget;
GRANT ALL PRIVILEGES ON budget.* to 'budgetuser'@'localhost' identified by 'budgetuser';
USE budget;

--
-- Table structure for table `transactions`  
--

DROP TABLE IF EXISTS  `transactions`;
 CREATE TABLE  `transactions`  (
     `id` INT NOT NULL AUTO_INCREMENT,
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

INSERT INTO  `transactions`  VALUES(1, 'Example', 'Cupid\'s Revenge Bid', 300, 'Paid', '2012-02-15', 'Gas');

--
-- Table structure for table `users`  
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
	 `name`  VARCHAR(20) NOT NULL,
	 `password`  VARCHAR(40) NOT NULL,
	 `position` VARCHAR(10) NOT NULL,
	 `picture` VARCHAR(30) NOT NULL,
	PRIMARY KEY (`name`)
);

--
-- Dumping data for table `users` 
--

INSERT INTO  `users`  VALUES('MaryBeth', 'MARYMASSACREBUDGET12', 'Captain', 'MaryBeth.jpg');
INSERT INTO  `users`  VALUES('Devon', 'MARYMASSACREBUDGET12', 'Captain', 'Devon.jpg');

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

CREATE INDEX `nameIndex` ON `userLogs` (`name`);
