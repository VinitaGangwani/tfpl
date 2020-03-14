<?php
//tf-pl : AtKe1c&*3Ro*pEd3E!T^
include "init.php";

$user_name=$_POST["user_name"];
$user_password=$_POST["user_password"];

$sql="select * from user where user_name='$user_name'";


$result=mysqli_query($connection,$sql);

if(mysqli_num_rows($result)>0)
{
	$status="exists";
	$row=mysqli_fetch_assoc($result);
	echo json_encode(array("response"=>$status,"user_name"=>$user_name));
}
else
{
	$status="Invalid Login";
	echo json_encode(array("response"=>$status));
}



mysqli_close($connection);	
?>