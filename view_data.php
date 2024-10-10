<html>

<head>
    <link rel="stylesheet" href="style2.css">
    <title>View Data Mahasiswa</title>
</head>

<body>
    <br>
    <h1>
        <center><b>DATA MAHASISWA</b></center>
    </h1><br>
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr class="atasan">
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Hapus</th>
            <th>Edit</th>
        </tr>
        <?php
        include "koneksi.php";
        // view data siswa di dalam database
        $Lihat = "SELECT * FROM mahasiswa ORDER BY nim";
        $Tampil = mysqli_query($conn, $Lihat);
        $nomer = 0;
        while ($hasil = mysqli_fetch_array($Tampil)) {
            $nim = stripslashes($hasil['nim']);
            $nama = stripslashes($hasil['nama']);
            $jurusan = stripslashes($hasil['jurusan']); {
                $nomer++;
        ?>

                <tr align="center" height="30">
                    <td>
                        <?= $nomer ?>
                        <div align="center"></div>
                    </td>
                    <td>
                        <?= $nim ?>
                        <div align="center"></div>
                    </td>
                    <td>
                        <?= $nama ?>
                        <div align="center"></div>
                    </td>
                    <td>
                        <?= $jurusan ?>
                        <div align="center"></div>
                    </td>
                    <td><a href="hapus.php?hapus=<?= $nim ?>"
                            onclick="return confirm('Yakin mau menghapus data siswa <?= $nama ?>')"><img
                                src="assets/icons/trash-can.png" alt="" width="25px"></a></td>
                    <td><a href="edit.php?edit=<?= $nim ?>" onclick="return confirm('Edit data siswa <?= $nama ?>')"><img
                                src="assets/icons/pencil.png" alt="" width="20px"></a></td>
                </tr>

        <?php
            }
        }
        mysqli_close($conn);
        ?>
        <tr class="bawahan1">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="bawahan2">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr class="atasan">
            <th> <a href="index.php"><img src="assets/icons/plus.png" alt="" width="30px"></a></th>
            <th><a href="index.php" class="opsiplus">Tambah Data</a></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <tr class="atasan">
            <th> <a href="view_data.php"><img src="assets/icons/eye.png" alt="" width="30px"></a></th>
            <th> <a href="view_data.php" class="opsiplus">Lihat Data</a></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <tr class="atasan">
            <th> <a href="hapusall.php"><img src="assets/icons/delall.png" alt="" width="30px"></a></th>
            <th> <a href="hapusall.php" class="opsiplus" onclick="return confirm('Yakin mau menghapus semua data siswa?')">Hapus Semua Data</a></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </table>
</body>

</html>