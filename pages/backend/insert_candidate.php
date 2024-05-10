<?php
include_once "connection.php";
if(isset($_POST['submit'])){
	$nationalid=$_POST['nationalid'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$dateofexam=$_POST['dateofexam'];
	$phone=$_POST['phone'];
	$insert= "INSERT INTO candidate(`CandidateNationalId`,`FirstName`,`LastName`,`Gender`,`DOB`,`ExamDate`,`PhoneNumber`)
	 VALUES('$nationalid','$fname','$lname','$gender','$dob','$dateofexam','$phone')";
	 if($conn->query($insert)){
		header("location:register_candidates.php");
	 }else{
		echo "error".$insert."<br>".$conn->error;
	 }
}
?>