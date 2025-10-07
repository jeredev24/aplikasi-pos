<?php
$host = "localhost";
$user = "root";     // default di XAMPP
$pass = "";         // kosong default
$db   = "pos";      // nama database Anda

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
