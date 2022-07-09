<?php
require('../require/db.php');

$email = trim($_POST['email']);
$pass = trim($_POST['password']);
$hash = 'fdgdofgoikdfjhoidfjhoifgjhogfjhfgoi';
$pass = md5($pass . $hash);


$sql = 'INSERT INTO users(email, password) VALUES (:email, :password)';
$query = $pdo->prepare($sql);
$query->execute(['email' => $email, 'password' => $pass]);

echo('done');