<?php
$host="localhost";
$username="root";
$password="";
$db_name="travellers_fashion";

$connection=mysqli_connect($host,$username,$password,$db_name);
if($connection)
	echo 'connected';
else
	echo 'connection failed!';

?>