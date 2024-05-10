<?php


session_start();

if(isset($_SESSION['myusername'])){


include_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/register_candidates.css?v=1.8">
	<link rel="stylesheet" href="../css/List_of_all_candidated.css">
	<link rel="icon" href="../image/about pc.PNG">
	<title>Register candidate</title>

</head>
<body>
<div class="container">
	<ul>
		<li><a href="dashboard.php">Dashboard</a></li>
		<li><a href="register_candidates.php">Register Candidates</a></li>
		<li ><a href="List_of_all_candidated.php">List of Candidates</a></li>
		 <li ><a href="exam.php">Exam</a></li>
		 <li ><a href="passed.php">Passed</a></li>
		<li class="register_candidates"><a href="failed.php">Failed</a></li>
		<li><a href="report.php">Report</a></li>
	</ul>
	<div class="allcontent">
		
		<div class="addnew">
			
		
		</div>
	<div class="displayed">
		<table>
			<tr>
				<th>National Id</th>
  				<th>Category</th>
  				<th>Marks</th>
				<th>Status</th>
			</tr>
<?php
$select=mysqli_query($conn,"SELECT * FROM `grade` WHERE Decision='Failed'");

while($row=mysqli_fetch_array($select)){
	$nationalid=$row['CandidateNationalId'];
 	$LicenseExamCategory=$row['LicenseExamCategory'];
	$ObtainedMarks=$row['ObtainedMarks'];
	$Decision=$row['Decision'];

	echo "
	
	<tr>
	<td>$nationalid</td>
	<td>$LicenseExamCategory</td>
	<td>$ObtainedMarks</td>
	<td>$Decision</td>

	 
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