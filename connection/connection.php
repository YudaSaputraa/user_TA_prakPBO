<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'yulje_medical_centre';

$connect = new mysqli($hostname, $username, $password, $database);
if ($connect->connect_error) {
    die("Error : " . $connect->$connect->connect_error);
}
