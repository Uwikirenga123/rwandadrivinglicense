<?php
 
include_once "connection.php";
$date=$_GET['date'];
$select=mysqli_query($conn,"SELECT * FROM `candidate` WHERE ExamDate='$date'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../css/register_candidates.css?v=1.8">
	<link rel="stylesheet" href="../css/List_of_all_candidated.css">
	<style>
		.messsage{
			width: 211px;
			padding: 21px;
			border-radius:17px;
			background-color: greenyellow;
			color: white;
		}
	</style>
</head>
<body>
<?php include_once "exam_date_report.php";
if(isset($_SESSION['myusername'])){

?>

<div class="displayed">
		<table>
			
<?php
$select=mysqli_query($conn,"SELECT * FROM `candidate` WHERE ExamDate='$date'");
$countmim=mysqli_query($conn,"SELECT COUNT(*) AS counts FROM `candidate` WHERE ExamDate='$date'");
if(mysqli_num_rows($countmim)>0){
	echo '
	<tr>
				<th>National Id</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Gender</th>
				<th>Date Of Berith</th>
				<th>Exam Date</th>
				<th>Phone Number </th>
			</tr>
	';
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
}else{
		echo "<p class='messsage'>No candidate found</p>";
} 
?>
</table>
	
</body>
</html>

<?php
}else{
	header("location:../../index.php");
}

?>