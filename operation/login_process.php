<?php
session_start();
include '../connection/connection.php';
$usr = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT * FROM user WHERE username = '$usr' AND password = '$pass'";
$query = mysqli_query($connect, $sql);

$check = mysqli_num_rows($query);
if ($check > 0) {
    $_SESSION['username'] = $usr;
    $_SESSION['status'] = "login";
    header("location:../user/home.php");
} else {
    header("location:../index.php?message=failed");
}
