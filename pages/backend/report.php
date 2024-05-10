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
	<link rel="stylesheet" href="../css/register_candidates.css?v=1.9">
	<link rel="stylesheet" href="../css/List_of_all_candidated.css">
	<link rel="icon" href="../image/about pc.PNG">
	<title>Register candidate</title>
	<link rel="stylesheet" href="../css/report.css">
</head>
<body>
<div class="container">
	<ul>
		<li><a href="dashboard.php">Dashboard</a></li>
		<li><a href="register_candidates.php">Register Candidates</a></li>
		<li ><a href="List_of_all_candidated.php">List of Candidates</a></li>
		 <li ><a href="exam.php">Exam</a></li>
		 <li><a href="pass.php">Passed</a></li>
		<li><a href="failed.php">Failed</a></li>
		<li class="register_candidates"><a href="report.php">Report</a></li>
	</ul>
	<div class="report">
		<button><a href="pass_report.php">Passed</a></button>
		<button><a href="failed_report.php">Failed</a></button>
		<button><a href="exam_date_report.php">Exam Date</a></button>
	</div>
	</div>
</body>
</html>
<?php
}else{
	header("location:../../index.php");
}
?>