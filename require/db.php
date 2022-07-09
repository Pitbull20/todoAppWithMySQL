<?php
$host = 'localhost';
$dbName = 'todoapp';
$dbUserName = 'root';
$dbUserPassword = '';

$dns = "mysql:host=$host;dbname=$dbName";
$pdo = new PDO($dns, $dbUserName, $dbUserPassword);
