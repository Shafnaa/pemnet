<?php
include "koneksi.php";

// Ambil NIM yang akan diedit
$nim = $_GET['edit'];

// Ambil data mahasiswa berdasarkan NIM
$Lihat = "SELECT * FROM mahasiswa WHERE nim='$nim'";
$Tampil = mysqli_query($conn, $Lihat);
$hasil = mysqli_fetch_array($Tampil);

?>

<!-- Tampilkan Form -->
<html>
    <head>
        <link rel="stylesheet" href="assets/css/style3.css">
        <title>Edit Data Mahasiswa <?=$hasil['nama']?></title>
    </head>
    <body>
        <form action="simpan_edit.php" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td height="40">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><h1>EDIT DATA MAHASISWA</h1></td>
                </tr>
                <tr>
                    <td height="40">&nbsp;</td>
                </tr>

                <tr>
                    <td height="40">&nbsp;</td>
                    <td class="keterangan">NIM</td>
                    <td><input type="text" name="nim" class="inputan" value="<?=$hasil['nim']?>"></td>
                </tr>
                <tr>
                    <td height="40">&nbsp;</td>
                    <td class="keterangan">Nama</td>
                    <td><input type="text" name="nama" class="inputan" value="<?=$hasil['nama']?>"></td>
                </tr>
                <tr>
                    <td height="40">&nbsp;</td>
                    <td class="keterangan">Jurusan</td>
                    <td><select name="jurusan" class="inputan-jurusan">
                            <option value="<?=$hasil['jurusan']?>"><?=$hasil['jurusan']?></option>
                            <option value="ELEKTRO">ELEKTRO</option>
                            <option value="SIPIL">SIPIL</option>
                            <option value="INDUSTRI">INDUSTRI</option>
                            <option value="INFORMATIKA">INFORMATIKA</option>
                            <option value="GEOLOGI">GEOLOGI</option>
                    </select></td>
                </tr>
                <tr>
                    <td height="50">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>
                        <input type="submit" name="submit" value="Simpan Edit" class="button">&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
            </table>
        </form>
    </body>
</html>



