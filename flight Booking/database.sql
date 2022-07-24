create database flight;

use flight;

CREATE TABLE `airlines` (
  `id` int(11) NOT NULL auto_increment,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `flight` varchar(30) NOT NULL,
  `nopass` varchar(30) NOT NULL,
  `seat` varchar(30) NOT NULL,
  `payment` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
);