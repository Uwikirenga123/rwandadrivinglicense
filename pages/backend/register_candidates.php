<?php


include_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/register_candidates.css?v=1.7">
	<link rel="icon" href="../image/about pc.PNG">
	<title>Register candidate</title>
	 

</head>
<body>
<div class="container">
	<ul>
		<li><a href="dashboard.php">Dashboard</a></li>
		<li class="register_candidates"><a href="register_candidates.php">Register Candidates</a></li>
		<li><a href="List_of_all_candidated.php">List of Candidates</a></li>
		<li><a href="exam.php">Exam</a></li>
		 <li><a href="passed.php">Passed</a></li>
		<li><a href="failed.php">Failed</a></li>
		<li><a href="report.php">Report</a></li>
	</ul>
	<div class="allcontent">
		
		<div class="addnew">
			<?php
			include "addcandindate.php";
			if(isset($_SESSION['myusername'])){

			?>
		
		</div>
	<div class="displayed">
		<table>
			<tr>
				<th>National Id</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Gender</th>
				<th>Date Of Berith</th>
				<th>Exam Date</th>
				<th>Phone Number </th>
			</tr>

<?php
$select=mysqli_query($conn,"SELECT * FROM `candidate`");

while($row=mysqli_fetch_array($select)){
	$nationalid=$row['CandidateNationalId'];
	$FirstName=$row['FirstName'];
	$LastName=$row['LastName'];
	$Gender=$row['Gender'];
	$DOB=$row['DOB'];
	$ExamDate=$row['ExamDate'];
	$PhoneNumber=$row['PhoneNumber'];
	echo "
	
	<tr>
	<td>$nationalid</td>
	<td>$FirstName</td>
	<td>$LastName</td>
	<td>$Gender</td>
	<td>$DOB</td>
	<td>$ExamDate</td>
	<td>$PhoneNumber</td>
</tr>
	";
}
?>
 
		</table>

	</div>
	</div>
	
	</div>
</body>
</html>
<?php
}else{
	header("location:../../index.php");
}

?>