<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/account.css?v=1.3">
<style>
	
</style>
	<title>Create Account</title>
</head>
<body>
	<div class="conatiner">
		<div class="login">
			<form action="Admin_insert.php" method="post">
			<h2>Create Account</h2>
			<label for="UserName">User Name:</label><br>
			<input type="text" name="name" placeholder="Enter Username" required><br>
			<label for="UserName">Password:</label><br>
			<input type="password" name="password" placeholder="Enter password" required><br>
			<input type="submit" name="submit" value="Create Account"><br>
			<a href="../../index.php">I have account</a>
			</form>
		</div>
	</div>
</body>
</html>