<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buah</title>
    <link rel="stylesheet" type="text/css" href="css/tambah.css">
</head>
<body>
    <h2>Tambah Buah</h2>
    <form method="post">
        Nama Buah: <input type="text" name="nama"><br>
        Harga: <input type="number" name="harga"><br>
        Stok: <input type="number" name="stok"><br>
        <button type="submit" name="simpan">Simpan</button>
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $stok  = $_POST['stok'];
        mysqli_query($conn, "INSERT INTO buah (nama_buah, harga, stok) VALUES ('$nama', '$harga', '$stok')");
        header("Location: index.php");
    }
    ?>
</body>
</html>
