<?php
include "../config/koneksi.php";
$id = $_POST['id'];
$kode = $_POST['kode'];
$kode_produk = $_POST['kode_produk'];
$kode_agen = $_POST['kode_agen'];
$kode_status_barang = $_POST['kode_status_barang'];
$harga_satuan = $_POST['harga_satuan'];
$jumlah_barang = $_POST['jumlah_barang'];
//proses
$update = "UPDATE tabel_distribusi SET kode = '$kode',
kode_produk = '$kode_produk',
kode_agen = '$kode_agen',
kode_status_barang = '$kode_status_barang',
harga_satuan = '$harga_satuan',
jumlah_barang = '$jumlah_barang',
WHERE kode = '$id'";
mysqli_query($konek, $update);
header("location:tampil_distribusi.php");
