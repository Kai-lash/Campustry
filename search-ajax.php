<?php
require_once('db_conn.php');
$key=$_GET['key'];
$array = array();
$query=mysql_query("SELECT U.FirstName, U.LastName
	FROM Users U LEFT JOIN UsersProfile P
	ON U.UserID = P.UserID
	WHERE P.Active = 1 AND (CONCAT(U.FirstName, ' ', U.LastName) LIKE '$key%' OR U.LastName LIKE '$key%')");
while($row=mysql_fetch_assoc($query))
{
	$array[] = $row['FirstName'].' '.$row['LastName'];
}
echo json_encode($array);
?>
