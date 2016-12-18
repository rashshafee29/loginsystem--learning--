<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title></title>
</head>
<body>
<form action="loginn.php" method="POST">
		<input type="text" name="uid" placeholder="Username"><br>
	<input type="password" name="pwd" placeholder="Password"><br>
	<button type="submit">
		LOGIN
	</button>
</form>
<?php
if(isset($_SESSION['id'])){
	echo $_SESSION['id'];
}
else
{
	echo "You are not logged it";
}
?>

<form action="signup.php" method="POST">
	<input type="text" name="first" placeholder="Firstname"><br>
	<input type="text" name="last" placeholder="Lastname"><br>
	<input type="text" name="uid" placeholder="Username"><br>
	<input type="password" name="pwd" placeholder="Password"><br>
	<button type="submit">
		SIGN UP
	</button>
</form>
</body>
</html>