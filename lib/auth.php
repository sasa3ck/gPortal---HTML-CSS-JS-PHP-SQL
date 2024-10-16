<?php

$login = trim(filter_var($_POST["login"], FILTER_SANITIZE_SPECIAL_CHARS));
$password = trim(filter_var($_POST["password"], FILTER_SANITIZE_SPECIAL_CHARS));

if (strlen($login) < 4) { echo "login error"; exit; }
if (strlen($password) < 4) { echo "Password error"; exit; }


// Password
$salt = '34#3)2b_42_3$j-4^b3@2!-4(%_j(3';
$password = md5($salt.$password);

// DB
require "db.php";

// Auth user
$sql = "SELECT id, username FROM users WHERE login=? AND password=?";
$query = $pdo->prepare($sql);
$query->execute([$login, $password]);

if ($query->rowCount() == 0) {
 echo "User or pass incorect";
} else {
 setcookie("login", $login, time() + 3600 * 24, "/");
 header("Location: ../user.php");
}