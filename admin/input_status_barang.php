<?php
include "../config/koneksi.php";
// Cek username di database
$cek_statusb=mysqli_num_rows(mysqli_query($konek,"SELECT kode FROM tabel_status_barang WHERE kode_status_barang='$_POST[kode_status_barang]'"));
// Kalau username sudah ada yang pakai
if ($cek_statusb > 0){
echo "Kode sudah ada yang pakai.<a href=tabel_status_barang.php> Ulangi lagi</a>";
}
// Kalau username valid, inputkan data ke tabel users
else{
$kode_status_barang = $_POST['kode_status_barang'];
$status_barang = $_POST['status_barang'];
$input = "INSERT INTO tabel_status_barang(kode_status_barang,
status_barang)
VALUES('$kode_status_barang',
'$status_barang')";
mysqli_query($konek, $input);
header("location:tampil_status_barang.php");
}
?>