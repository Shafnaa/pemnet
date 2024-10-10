<?php
include "koneksi.php";

// Hapus semua data
$hapus = "DELETE FROM mahasiswa";
$kirim_hapus = mysqli_query($conn, $hapus);

// redirect
header("Location: view_data.php");
exit();
?>