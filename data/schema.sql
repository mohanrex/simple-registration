DROP TABLE IF EXISTS `registration`;
CREATE TABLE `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `rollno` varchar(8) NOT NULL,
  `department` varchar(255) NOT NULL,
  `year` varchar(45) NOT NULL,
  `phone_num` int(10) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `registered_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
