<?php
$conn = mysqli_connect("localhost", "root", "", "toko_buah");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
