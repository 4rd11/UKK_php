<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_kantinn";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?> 