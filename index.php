<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="pages/css/account.css?v=1">

	<title>Login</title>
</head>
<body>
	<div class="conatiner">
		<div class="login">
			<form action="index.php" method="post">
			<h2>Login</h2>
			<label for="UserName">User Name:</label><br>
			<input type="text" name="name" placeholder="Enter Username" required><br>
			<label for="UserName">Password:</label><br>
			<input type="password" name="password" placeholder="Enter password" required><br>
			<input type="submit" name="submit" value="Login"><br>
			<a href="pages/backend/signup.php">Create Account</a>
			</form>
		</div>
	</div>
</body>
</html>

<?php
include_once "pages/backend/connection.php";
if(isset($_POST['submit'])){
	// values from form 
	$name=$_POST['name'];
	$password=$_POST['password'];

 	$display=(mysqli_query($conn,"SELECT AdminName,Password FROM `admin` WHERE AdminName='$name' AND Password='$password'"));
	
	$fetch=mysqli_fetch_array($display);
	// data from database

		$dbname=$fetch['AdminName'];
		$dbpassword=$fetch['Password'];
		if($name==$dbname AND $password==$dbpassword){
			session_start();
			$_SESSION['myusername']=$dbname;
			header("location:pages/backend/dashboard.php");
		}else{
 
 			echo "<p class='errors'>Wrong email or password</p>";
 			echo "<p class='myerrors'>Wrong email or password</p>";

		}
}   
?>