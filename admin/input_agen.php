<?php
include "../config/koneksi.php";
// Cek username di database
$cek_agen=mysqli_num_rows(mysqli_query($konek,"SELECT kode FROM tabel_agen WHERE kode_agen='$_POST[kode_agen]'"));
// Kalau username sudah ada yang pakai
if ($cek_agen > 0){
echo "Kode sudah ada yang pakai.<a href=tabel_agen.php> Ulangi lagi</a>";
}
// Kalau username valid, inputkan data ke tabel users
else{
$kode_agen = $_POST['kode_agen'];
$nama_agen = $_POST['nama_agen'];
$alamat_agen = $_POST['alamat_agen'];
$no_tlp_agen = $_POST['no_tlp_agen'];
$input = "INSERT INTO tabel_agen(kode_agen,
nama_agen,
alamat_agen,
no_tlp_agen)
VALUES('$kode_agen',
'$nama_agen',
'$alamat_agen',
'$no_tlp_agen')";
mysqli_query($konek, $input);
header("location:tampil_agen.php");
}
?>