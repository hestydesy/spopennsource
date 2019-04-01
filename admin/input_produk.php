<?php
include "../config/koneksi.php";
// Cek username di database
$cek_produk=mysqli_num_rows(mysqli_query($konek,"SELECT kode FROM tabel_produk WHERE kode_produk='$_POST[kode_produk]'"));
// Kalau username sudah ada yang pakai
if ($cek_produk > 0){
echo "Kode sudah ada yang pakai.<a href=tabel_produk.php> Ulangi lagi</a>";
}
// Kalau username valid, inputkan data ke tabel users
else{
$kode_produk = $_POST['kode_produk'];
$nama_produk = $_POST['nama_produk'];
$harga_satuan = $_POST['harga_satuan'];
$input = "INSERT INTO tabel_produk(kode_produk,
nama_produk,
harga_satuan)
VALUES('$kode_produk',
'$nama_produk',
'$harga_satuan')";
mysqli_query($konek, $input);
header("location:tampil_produk.php");
}
?>