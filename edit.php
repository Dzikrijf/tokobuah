<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM buah WHERE id_buah = $id");
$row = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Buah</title>
    <link rel="stylesheet" type="text/css" href="css/edit.css">
</head>
<body>
    <h2>Edit Buah</h2>
    <form method="post">
        Nama Buah: <input type="text" name="nama" value="<?= $row['nama_buah'] ?>"><br>
        Harga: <input type="number" name="harga" value="<?= $row['harga'] ?>"><br>
        Stok: <input type="number" name="stok" value="<?= $row['stok'] ?>"><br>
        <button type="submit" name="update">Update</button>
    </form>

    <?php
    if (isset($_POST['update'])) {
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        mysqli_query($conn, "UPDATE buah SET nama_buah='$nama', harga='$harga', stok='$stok' WHERE id_buah=$id");
        header("Location: index.php");
    }
    ?>
</body>
</html>
