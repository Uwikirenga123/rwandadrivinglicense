<?php
include_once "connection.php";

$remove=$_GET['delete'];
 
// $deletion="";

$deletion="DELETE FROM `candidate` WHERE PhoneNumber='$remove'";
if($conn->query($deletion)){
	echo "data deleted";
}else{
	echo "error".$deletion."<br>".$conn->error;
}
?>