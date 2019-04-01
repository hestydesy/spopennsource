<?php
include "../config/koneksi.php";
// Cek username di database
$cek_distribusi=mysqli_num_rows(mysqli_query($konek,"SELECT kode FROM tabel_distribusi WHERE kode='$_POST[kode]'"));
// Kalau username sudah ada yang pakai
if ($cek_distribusi > 0){
echo "Kode sudah ada yang pakai.<a href=tabel_distribusi.php> Ulangi lagi</a>";
}
// Kalau username valid, inputkan data ke tabel users
else{
$kode = $_POST['kode'];
$kode_produk = $_POST['kode_produk'];
$kode_agen = $_POST['kode_agen'];
$kode_status_barang = $_POST['kode_status_barang'];
$harga_satuan = $_POST['harga_satuan'];
$jumlah_barang = $_POST['jumlah_barang'];
$input = "INSERT INTO tabel_distribusi(kode,
kode_produk,
kode_agen,
kode_status_barang,
harga_satuan,
jumlah_barang)
VALUES('$kode',
'$kode_produk',
'$kode_agen',
'$kode_status_barang',
'$harga_satuan',
'$jumlah_barang')";
mysqli_query($konek, $input);
header("location:tampil_distribusi.php");
}
?>