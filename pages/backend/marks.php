<?php

session_start();

if(isset($_SESSION['myusername'])){


include_once "connection.php";
$update=$_GET['delete'];
 $select=mysqli_query($conn,"SELECT * FROM `candidate` WHERE PhoneNumber='$update'");
while($row=mysqli_fetch_array($select)){
	$nationalid=$row['CandidateNationalId'];
	$FirstName=$row['FirstName'];
	$LastName=$row['LastName'];
	$Gender=$row['Gender'];
	$DOB=$row['DOB'];
	$ExamDate=$row['ExamDate'];
	$PhoneNumber=$row['PhoneNumber'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/add_candidate.css?b=1.4">
	<link rel="stylesheet" href="../css/update.css">
	<title>Add candidate</title>
	<style>
		
	</style>
</head>
<body>
	<a href="List_of_all_candidated.php"><img src="../image/back.png" alt=""></a>
	<div class="candidate">

		<form action="" method="post">
			<h2>Update Candidate Information</h2>
			<label for="CandidateNationalId">National Id :</label><br>
			<input type="number" name="nationalid" value="<?php  echo "$nationalid" ?>" readonly required><br>
			<label for="FirstName">First Name :</label><br>
			<input type="text" name="fname"  value="<?php  echo "$FirstName" ?>"readonly  required><br>
			<label for="LastName">Last Name :</label><br>
			<input type="text"  name="lname" value="<?php  echo "$LastName" ?>" readonly required><br>
			<label for="category">Category :</label><br>
  			<select name="category" id="" required>
				<option value="">Select Category</option>
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C">C</option>
				<option value="D">D</option>
				<option value="E">E</option>
				<option value="F">F</option>
			</select><br>
			<label for="Marks">Add Marks :</label><br>
  			<input type="text" name="Marks" required><br>
 			<button type="submit" name="submit">Add candidate</button>
		</form>
	</div>
</body>
</html>
<?php
include_once "connection.php";
if(isset($_POST['submit'])){
	$nationalid=$_POST['nationalid'];
	$category=$_POST['category'];
	$Marks=$_POST['Marks'];
 	$decision=$_POST['decision'];

	if($Marks>=12){
		$decision="Pass";
	}else{
		$decision="Failed";
	}

 	$insert= "INSERT INTO grade(`CandidateNationalId`,`LicenseExamCategory`,`ObtainedMarks`,`Decision`)
	 VALUES('$nationalid','$category','$Marks','$decision')";
	 if($conn->query($insert)){
		header("location:exam.php");
	 }else{
		echo "error".$insert."<br>".$conn->error;
	 }
}
?>

<?php
}else{
	header("location:../../index.php");
}


?>