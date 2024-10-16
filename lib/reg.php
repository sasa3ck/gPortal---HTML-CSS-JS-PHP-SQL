<?php

$login = trim(filter_var($_POST["login"], FILTER_SANITIZE_SPECIAL_CHARS));
$name = trim(filter_var($_POST["name"], FILTER_SANITIZE_SPECIAL_CHARS));
$email = trim(filter_var($_POST["email"], FILTER_SANITIZE_SPECIAL_CHARS));
$password = trim(filter_var($_POST["password"], FILTER_SANITIZE_SPECIAL_CHARS));

if (strlen($login) < 4) { echo "login error"; exit; }
if (strlen($name) < 2) { echo "Name error"; exit; }
if (strlen($password) < 4) { echo "Password error"; exit; }

if (strlen($email) < 4 && !str_contains($email, "@")) { 
 echo "Email error"; 
 exit; 
}

// Password
$salt = '34#3)2b_42_3$j-4^b3@2!-4(%_j(3';
$password = md5($salt.$password);

// DB
require "db.php";

// INSERT
$sql = "INSERT INTO users(login, username, email, password) VALUES(?, ?, ?, ?)";
$query = $pdo->prepare($sql);
$query->execute([$login, $name, $email, $password]);

header("Location: ../index.php");