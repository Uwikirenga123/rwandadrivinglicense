<?php
 
 

include_once "connection.php";
if(isset($_POST['submit'])){
 	$display=(mysqli_query($conn,"SELECT * FROM `admin`"));
	
	while($fetch=mysqli_fetch_array($display)){
		$dbname=$fetch['AdminName'];
	}
	$name=$_POST['name'];
	$password=$_POST['password'];

if($dbname===$name){
	echo "<p class='error'>User Name Taken</p>";
	include "signup.php";
}else{
	 $insert="INSERT INTO admin(`AdminName`,`Password`) VALUES('$name','$password')";
	if($conn->query($insert)){
		header("location:../../index.php");
}
}
}   
?>

 

?>