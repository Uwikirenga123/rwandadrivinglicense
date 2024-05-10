<?php
include_once "connection.php";

 


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.2">
	<link rel="stylesheet" href="../../css/register_candidates.css?v=1.9">
	<link rel="stylesheet" href="../../css/List_of_all_candidated.css">
	<link rel="icon" href="../../image/about pc.PNG">
	<title>Register candidate</title>
	 
	<style>
		.selectdate input{
			padding: 14px;
			width: 254px;
			border: none;
			border-radius: 16px;
			font-size: 16px;
		}
		.selectdate p{
			font-size: 21px;
			line-height: 25px;
		}
	 
	</style>
</head>

<body>
	<?php include_once "exam_date_report.php";
	if(isset($_SESSION['myusername'])){

	?>
	<div class="selectdate">
		<center>
			<form action="" method="get">
			<p>From</p>
			<input type="date" name="d1" required><br>
			<p>To</p>
			<input type="date" name="d2" required><br><br>
			<input style="border: solid 1px rgba(203, 81, 255, 0.799); cursor: pointer;" type="submit">
			</form>

	</center>
</div>

</body>

</html>
<?php
}else{
	header("location:../../index.php");
}

?>