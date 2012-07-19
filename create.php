<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 


// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect server "); 
mysql_select_db("$db_name")or die("cannot select DB");

CREATE TABLE 'guestbook' (
'id' int(4) NOT NULL auto_increment,
'name' varchar(65) NOT NULL default ,
'email' varchar(65) NOT NULL default ,
PRIMARY KEY ('id')
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

?>
