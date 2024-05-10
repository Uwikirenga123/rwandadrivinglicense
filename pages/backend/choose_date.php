<?php
session_start();

if($_SESSION['myusername']){
include_once "connection.php";
$d1=$_GET['d1'];
$d2=$_GET['d2'];
echo "$d1<br> $d2";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/register_candidates.css?v=1.8">
	<link rel="stylesheet" href="../../css/List_of_all_candidated.css">
	<link rel="icon" href="../../image/about pc.PNG">
	<title>Register candidate</title>

</head>
<body>
	<?php
	include_once "report.php";

?>
 
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
$select=mysqli_query($conn,"SELECT * FROM `candidate` BETWEEN $ExamDate='$d1' AND $ExamDate='$d2' ");

while($row=mysqli_fetch_array($select)){
	$nationalid=$row['CandidateNationalId'];
	$FirstName=$row['FirstName'];
	$LastName=$row['LastName'];
	$Gender=$row['Gender'];
	$DOB=$row['DOB'];
	$ExamDate=$row['ExamDate'];
	$PhoneNumber=$row['PhoneNumber'];
	$number=$PhoneNumber;
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
</body>
</html>
<?php
}else{
	header("location:../../index.php");
}


?>