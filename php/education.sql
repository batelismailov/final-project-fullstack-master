
CREATE TABLE IF NOT EXISTS `education` (
`id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int NOT NULL,
  `blueTitle` varchar(20) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `date` varchar(100) NOT NULL, 
  `paragraph` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


