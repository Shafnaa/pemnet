<?php
include "koneksi.php";

// Ambil NIM yang akan dihapus
$nim = $_GET['hapus'];

// Hapus data
$hapus = "DELETE FROM mahasiswa WHERE nim='$nim'";
$kirim_hapus = mysqli_query($conn, $hapus);

// redirect
header("Location: view_data.php");
exit();
?>