<?php
session_start();

include 'dbh.php';

$first=$_POST['first'];
$last=$_POST['last'];
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];

//echo $first."<br>";
//echo $last."<br>";
//echo $uid."<br>";
//echo $pwd."<br>";
$sql = "INSERT INTO userid(first,last,uid,pwd) 
VALUES('$first','$last','$uid','$pwd')";
$result = $conn->query($sql);

header("Location: login.php");