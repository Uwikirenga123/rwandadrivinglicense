<?php
include_once "connection.php";

 


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
	if(isset($_SESSION['myusername'])){


?>
 
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
</body>
</html>

<?php

}else{
	header("location:../../index.php");
}

?>