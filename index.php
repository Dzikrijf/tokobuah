<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Buah</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <h2>Data Buah</h2>
    <a href="tambah.php">+ Tambah Buah</a>
    <br><br>
    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama Buah</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $buah = mysqli_query($conn, "SELECT * FROM buah");
        while ($row = mysqli_fetch_assoc($buah)) {
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['nama_buah'] ?></td>
            <td><?= number_format($row['harga'], 2) ?></td>
            <td><?= $row['stok'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id_buah'] ?>">Edit</a> |
                <a href="hapus.php?id=<?= $row['id_buah'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
