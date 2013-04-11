#Intro to MVC using CodeIgniter#
Created by Mark Johnson

##Download using git##

- git init https://github.com/marklj/to-do.git

##Download manually##
1. Navigate yoyr browser to https://github.com/marklj/to-do
2. Click the zip link
3. Save to a folder on your PHP/MySQL server

##Installation
1. Create a new MySQL database
2. Open `application/config/database.php` and edit the host and database settings as needed.
3. Execute the following SQL into the database:

CREATE TABLE `todos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `todos` VALUES(1, 'Learn MVC', 'In class, learn model-view-controller');

