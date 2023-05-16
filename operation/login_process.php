<?php
session_start();
include '../connection/connection.php';
$usr = $_POST['username'];
$pass = $_POST['password'];
// $id_userr = $_POST['id_userr'];

$sql = "SELECT * FROM user WHERE username = '$usr' AND password = '$pass'";
$query = mysqli_query($connect, $sql);
($data = mysqli_fetch_array($query));
$id_userr = $data['id_user'];


$check = mysqli_num_rows($query);
if ($check > 0) {
    $_SESSION['username'] = $usr;
    $_SESSION['id_userr'] = $id_userr;
    $_SESSION['status'] = "login";
    header("location:../user/home.php?id_user=$id_userr");
} else {
    header("location:../index.php?message=failed");
}
