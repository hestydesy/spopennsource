<?php
include "../config/koneksi.php";
$id = $_POST['id'];
$kode = $_POST['kode_produk'];
$nama_produk = $_POST['nama_produk'];
$harga_produk = $_POST['harga_produk'];
// Apabila Nama Produk tidak diubah
$update = "UPDATE tabel_produk SET kode = '$kode_produk',
nama_produk = '$nama_produk',
harga_produk = '$harga_produk',
WHERE kode_produk = '$id'";
mysqli_query($konek, $update);
header("location:tampil_distribusi.php");

?>