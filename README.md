#Intro to MVC using CodeIgniter#
Created by Mark Johnson

##Download using git
1. Create a new sub-directory on your PHP/MySQL server. If you dont have a web host, [MAMP](http://www.mamp.info)/[XAMPP](http://www.apachefriends.org/en/xampp-windows.html) work great on local machines.
2. In your mac/unix terminal enter:  
 `git init https://github.com/marklj/to-do.git`

##Download manually
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

##Use this to LEARN
Learn how to code in an MVC environment by editing and extending this little app. Try one of the following to get started:

* Edit some view files to make them look less lame.
* Add validation rules to the `create` controller function or the `insert` model function to make your app more secure.
* Create new model/controller/views to add the functionality to edit or delete to-do items.
* Learn more specifically about CodeIgniter at [http://ellislab.com/codeigniter](http://ellislab.com/codeigniter)