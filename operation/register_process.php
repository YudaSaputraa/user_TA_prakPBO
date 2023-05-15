<?php
include '../connection/connection.php';
$usr = $_POST['username'];
$pass = $_POST['password'];
$nama = $_POST['nama'];
$noRm = $_POST['no_rm'];

$sql = "INSERT INTO user VALUES(id_user, '$usr', '$pass', '$nama', '$noRm')";
$query = mysqli_query($connect, $sql);
if ($query) {
    header("location:../register.php?message=berhasil");
} else {
    header("location:../register.php?message=register_gagal");
}
