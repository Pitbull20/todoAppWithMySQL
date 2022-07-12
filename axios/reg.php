<?php
require('../require/db.php');

$email = trim($_POST['email']);
$pass = trim($_POST['password']);
$hash = 'fdgdofgoikdfjhoidfjhoifgjhogfjhfgoi';
$pass = md5($pass . $hash);


$sql = "INSERT INTO `users` (email, password) VALUES('$email', '$pass')";

$mysqli->query($sql);
$mysqli->close();	
echo ('done');