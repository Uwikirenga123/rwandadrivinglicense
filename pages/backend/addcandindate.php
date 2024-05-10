<?php
session_start();
if($_SESSION['myusername']){

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/add_candidate.css?b=1.3">
	<title>Add candidate</title>
</head>
<body>
	<div class="candidate">
		<form action="insert_candidate.php" method="post">
			<label for="CandidateNationalId">National Id :</label><br>
			<input type="number" name="nationalid" required><br>
			<label for="FirstName">First Name :</label><br>
			<input type="text" name="fname" required><br>
			<label for="LastName">Last Name :</label><br>
			<input type="text"  name="lname"  required><br>
			<label for="Gender">Gender :</label><br>
			<label for="Gender" required>Male</label>
			<input type="radio" name="gender" value="Male" name="gender">
			<label for="Gender" required >Female</label>
			<input type="radio" name="gender" value="Female" id="gende"><br>
			<label for="DateOfBirth" required>Date of Berith :</label><br>
			<input type="date" name="dob" required><br>
			<label for="DateOf exam">Exam Date :</label><br>
			<input type="date" name="dateofexam" required><br>
			<label for="DateOfBirth">phone number :</label><br>
			<input type="number" name="phone" required><br>
			<button type="submit" name="submit">Add candidate</button>
		</form>
	</div>
</body>
</html>


<?php
}else{
	header("location:../../index.php");
}


?>