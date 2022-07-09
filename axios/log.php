<?php
require('../require/db.php');

$email = trim($_POST['email']);
$pass = trim($_POST['password']);
$hash = 'fdgdofgoikdfjhoidfjhoifgjhogfjhfgoi';
$pass = md5($pass . $hash);


$query = $pdo->query("SELECT * FROM `users` WHERE email='$email' AND password='$password'");

if ($query) {
	setcookie('log', $email, time() + 3600 * 24 * 30, '/');
	echo ('done');
}
