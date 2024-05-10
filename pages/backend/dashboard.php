<?php
include_once "connection.php";
session_start();
if(isset($_SESSION['myusername'])){
?>

<?php
$username=$_SESSION['myusername'];
if(isset($username)){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../image/about pc.PNG">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/style.css?v=1.4">
</head>
<body>
    <div class="container">
        <div class="rightsider">
            <ul>
                <li><a href="">Dashboard</a></li>
                <li><a href="register_candidates.php">Register Candidates</a></li>
                <li><a href="List_of_all_candidated.php">List of Candidates</a></li>
                 <li><a href="exam.php">Exam</a></li>
                 <li><a href="passed.php">Passed</a></li>
                <li><a href="failed.php">Failed</a></li>
                <li><a href="report.php">Report</a></li>
            </ul>

        </div>
        <div class="leftsider">

       
        <div class="icon">
         <a href="logout.php"><img src="../image/login.png" alt="" title="Log out"></a>
        </div>
        <div class="sidebar">

        </div>

        <div class="part1">
            <div class="card1">
                <!-- tottal candidattes -->
            <?php
            $select=mysqli_query($conn,"SELECT COUNT(*) AS counts FROM `candidate`");
            $row=mysqli_fetch_array($select);           
            ?>
                <h2>Total Candidates</h2>
                <h3 class="viewed"><?php echo $row['counts'] ?></h3>
            </div>
            <!-- passed candidates -->
            <div class="card1">
                <h2>Passed Candidates</h2>
                <?php
                 $select2=mysqli_query($conn,"SELECT COUNT(*) AS count FROM `grade` WHERE Decision='Pass' ");
                 $row2=mysqli_fetch_array($select2);      
                 ?>
                    <h3 class="viewed"><?php echo $row2['count'] ?></h3>

                 
        <h3 class="viewed"></h3>

            </div>
        </div>
        
        <div class="part1">
            <div class="card1">
                <h2>Failed Candidates</h2>
                <?php
                $select3=mysqli_query($conn,"SELECT COUNT(*)newcount FROM `grade` WHERE Decision='Failed'");
                $row3=mysqli_fetch_array($select3);
               
                ?>

                <h3 class="viewed"><?php  echo $row3['newcount']; ?></h3>

            </div>
             
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
<?php
}else{
    header("location:../../index.php");
}


?>