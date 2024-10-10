<?php
    include "koneksi.php";
    // Kirimkan variabel
    $nisn = mysqli_real_escape_string($conn, $_POST['nim']);
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $jurusan = mysqli_real_escape_string($conn, $_POST['jurusan']);

    // validasi NIM Mahasiswa dalam database
    $cek = mysqli_num_rows(mysqli_query($conn, "SELECT nim FROM mahasiswa WHERE nim='$nim'"));
    if ($cek >= 1) {
    ?>
        <script language="JavaScript">
            alert('NIM sudah didaftarkan! Silahkan isikan NIM yang lain');
            document.location = 'index.php';
        </script>
    <?php
    }

    // input data ke tabel mahasiswa dalam database
    $input = "INSERT INTO mahasiswa (nim, nama, jurusan) VALUES ('$nim', '$nama', '$jurusan')";
    $query_input = mysqli_query($conn, $input);
    if ($query_input) {
        // Jika sukses
    ?>
        <script language="JavaScript">
            alert('Data mahasiswa Berhasil Diinput!');
            document.location = 'index.php';
        </script>
    <?php
    } else {
        // Jika gagal
        echo "Data mahasiswa gagal diinput, silahkan coba lagi!";
    }

    // Tutup koneksi engine MySQL
    mysqli_close($conn);
?>