<?php

 


include_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/register_candidates.css?v=1.9">
	<link rel="stylesheet" href="../../css/List_of_all_candidated.css?v=1.1">
	<link rel="icon" href="../../image/about pc.PNG">
	<title>Register candidate</title>

	<style>
		
.newreport input{
 padding: 13px;
width: 134px;
margin: 7px 20%;
border-radius: 12px;
font-size: 18px;
color: white;
background: none;
 margin: 0px 51px;
 color: black;


}
.newreport > form input{

border: none;
padding: 13px;
width: 122px;
margin: 1px 20px;
border-radius: 20px;
font-size: 18px;
cursor: pointer;
transition:0.5s ease-in-out;
font-size: 20px;
box-shadow: 0px 3px 20px 0px #2c272d52;



}
.newreport > form input:hover{
border: none;
 cursor: pointer;
border: solid 2px #f288f2;
color: black;
transition:0.3s ease-in-out;
box-shadow: 0px 3px 20px 0px rgb(110, 116, 109);
background: rgb(242, 136, 242);
color: white;

}
	</style>

</head>
<body>
	<?php include_once "report.php";
	if(isset($_SESSION['myusername'])){

	?>
	
	<div class="report newreport">
		<form action="dail_report.php" method="get">
			<input type="hidden"  value="<?php echo date('Y-m-d')?>" name="date">
			<input style=" border: solid 2px  rgb(242, 136, 242);" type="submit" value="Daily">
		</form>
		<button><a href="select_date.php">Select</a></button>
 	</div>

</div>
</body>
</html>

<?php
}else{
	header("location:../../index.php");
}

?>