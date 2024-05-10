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
	<link rel="stylesheet" href="../css/add_candidate.css?b=1.3">
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
			<input type="number" name="nationalid" value="<?php  echo "$nationalid" ?>" required><br>
			<label for="FirstName">First Name :</label><br>
			<input type="text" name="fname"  value="<?php  echo "$FirstName" ?>" required><br>
			<label for="LastName">Last Name :</label><br>
			<input type="text"  name="lname" value="<?php  echo "$LastName" ?>" required><br>
			<label for="Gender">Gender :</label><br>
  			<input type="text" name="gender" value="<?php  echo "$Gender" ?>"" id="gende"><br>
			<label for="DateOfBirth" required>Date of Berith :</label><br>
			<input type="date" name="dob" value="<?php  echo "$DOB" ?>" required><br>
			<label for="DateOf exam">Exam Date :</label><br>
			<input type="date" name="dateofexam" value="<?php  echo "$ExamDate" ?>" required><br>
			<label for="DateOfBirth">phone number :</label><br>
			<input type="number" name="phone" value="<?php  echo "$PhoneNumber" ?>" required><br>
			<button type="submit" name="submit">Add candidate</button>
		</form>
	</div>
</body>
</html>
<?php

if(isset($_POST['submit'])){
	$updates=$_GET['delete'];

   $nationalid=$_POST['nationalid'];
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $gender=$_POST['gender'];
   $gender=$_POST['gender'];
   $dob=$_POST['dob'];
   $dateofexam=$_POST['dateofexam'];
   $phone=$_POST['phone'];
   $update="UPDATE `candidate` SET CandidateNationalId='$nationalid',FirstName='$fname',LastName='$lname',Gender='$gender',DOB='$dob',ExamDate='$dateofexam',PhoneNumber='$phone' WHERE PhoneNumber='$updates' ";
    if($conn->query($update)){
	  header("location:List_of_all_candidated.php");
   }else{
	   echo "error:".$update."<br>".$conn->error;
   }
}
?>
<?php
}else{
	header("location:../../index.php");
}

?>