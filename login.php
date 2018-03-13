<?php

session_start();
$usr = $_POST["email"];
$pass = $_POST["password"];
//--------------------------
$dbuser = "admin@gmail.com";
$dbpass = "admin";
//--------------------------
if ($usr == $dbuser && $pass == $dbpass) {
    echo '<h1>Selamat Sukses</h1>';
} else {
    $_SESSION["salah"]++;
    header("location:index.php");
}