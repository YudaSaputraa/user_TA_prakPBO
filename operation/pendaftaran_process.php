<?php
include '../connection/connection.php';
$code_regist = $_POST['kode_registrasi'];
$nama = $_POST['nama'];
$dokter = $_POST['dropdown_dokter'];
$status = "On Process";

$mysql = "INSERT INTO registrasi VALUES (id_registrasi, '$code_regist', '$nama', '$dokter', '$status')";
$query = mysqli_query($connect, $mysql) or die(mysqli_error($connect));

if ($query) {
    header("location:../user/pendaftaran.php");
} else {
    echo "Input Eror";
}
