<?php
$host = "localhost";
$user = "root";
$pass = ""; // Kosongkan jika menggunakan settingan default Laragon
$db   = "db_portofolio"; // Sesuaikan dengan nama database kamu

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>