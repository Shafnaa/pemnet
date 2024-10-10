<?php
include "koneksi.php";

// Kirimkan variabel
$nim = mysqli_real_escape_string($conn, $_POST['nim']);
$nama = mysqli_real_escape_string($conn, $_POST['nama']);
$kompetensi = mysqli_real_escape_string($conn, $_POST['jurusan']);

// Simpan NIM asli sebelum diubah
$nim_asli = $_POST['nim_asli'];

// update data ke tabel mahasiswa dalam database
$input = "UPDATE mahasiswa SET nim='$nim', nama='$nama', kompetensi='$kompetensi', alamat='$alamat', telepon='$telepon', hobi='$hobi' WHERE nim='$nim_asli'";
$query_update = mysqli_query($conn, $input);

if ($query_update) {
    # code...
    ?>
    <script language="JavaScript">
        alert('Data Mahasiswa Berhasil Diinput!');
        document.location = 'view_data.php';
    </script>
    <?php
    header("Location: view_data.php");
} else {
    echo "Data mahasiswa gagal diinput, silahkan coba lagi!";
}

?>