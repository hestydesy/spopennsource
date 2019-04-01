<?php
include "../config/koneksi.php";
$id = $_POST['id'];
$kode_status_barang = $_POST['kode_status_barang'];
$status_barang = $_POST['status_barang'];

// Apabila Nama Produk tidak diubah
$update = "UPDATE tabel_status_barang SET kode_status_barang = '$kode_status_barang',
status_barang = '$status_barang'
WHERE kode_status_barang = '$id'";
mysqli_query($konek, $update);
header("location:tampil_status_barang.php");

?>