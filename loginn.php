<?php
session_start();

include 'dbh.php';
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];

//echo $first."<br>";
//echo $last."<br>";
//echo $uid."<br>";
//echo $pwd."<br>";
$sql = "SELECT * from userid WHERE uid='$uid' AND pwd='$pwd'";
$result = $conn->query($sql);
if(!$row=$result->fetch_assoc()){
	echo "your username or password incorect!";
}
else
{
	$_SESSION['id']=$row['id'];
}
header("Location: login.php");
