Create database `goodweb`;
use `goodweb`;
CREATE TABLE `goodweb`.`users` (
  `userid` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(14) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  PRIMARY KEY (`userid`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;


CREATE TABLE `goodweb`.`articles` (
  `articleid` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(300) NOT NULL,
  `articlename` varchar(100) NOT NULL,
  `articletext` varchar(100) NOT NULL,
  `publication_date` date NOT NULL DEFAULT current_timestamp(),
  `update_date` date NOT NULL DEFAULT current_timestamp(),

  PRIMARY KEY (`articleid`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;