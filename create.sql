DROP  DATABASE IF EXISTS budget;
CREATE DATABASE IF NOT EXISTS budget;
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
	PRIMARY KEY (`id`)
);

--
-- Dumping data for table `users` 
--

INSERT INTO  `users`  VALUES(1, 'ADMIN', 'MARYMASSACREBUDGET12');
