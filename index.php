<html>

<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Input Data ke Database dengan PHP dan MySql</title>
</head>

<body>
    <form action="action_input.php" method="POST" enctype="multipart/form-data">
        <h1>INPUT DATA SISWA</h1>
        <div>
            <label>
                NIM
            </label>
            <input type="text" name="nim" class="inputan">
        </div>
        <div>
            <label>
                Nama
            </label>
            <input type="text" name="nama" class="inputan">
        </div>
        <div>
            <label>
                Jurusan
            </label>
            <select name="jurusan" class="inputan-jurusan">
                <option value="-">Pilih Jurusan</option>
                <option value="ELEKTRO">ELEKTRO</option>
                <option value="SIPIL">SIPIL</option>
                <option value="INDUSTRI">INDUSTRI</option>
                <option value="INFORMATIKA">INFORMATIKA</option>
                <option value="GEOLOGI">GEOLOGI</option>
            </select>
        </div>
        <div style="display:flex; align-items:center">
            <input type="submit" name="submit" value="Submit" class="button">
            <input type="reset" name="reset" value="Reset" class="button">
            <button class="button-view"><a href="view_data.php">View Data</a></button>
        </div>
    </form>
</body>

</html>