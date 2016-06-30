<?php 
$dbhost = 'localhost';
$dbuser = 'root';
#$dbpass = '7gw3rJ7q';
$dbpass = ''; #password to the database
$conn = @mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("campustry") or die(mysql_error());
?>