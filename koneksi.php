<?php
// konfigurasi database
$host = "localhost"; // nama host
$username = "root"; // username database
$password = ""; // password database
$database = "siswa"; // nama database yang mau dikoneksikan

// Membuat koneksi
$conn = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>