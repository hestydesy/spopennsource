<?php
include "../config/koneksi.php";
$id = $_POST['id'];
$kode_agen = $_POST['kode_agen'];
$nama_agen = $_POST['nama_agen'];
$alamat_agen = $_POST['alamat_agen'];
$no_tlp_agen = $_POST['no_tlp_agen'];





// Apabila Nama Produk tidak diubah
$update = "UPDATE tabel_agen SET kode_agen = '$kode_agen',
nama_agen = '$nama_agen',
alamat_agen = '$alamat_agen',
no_tlp_agen = '$no_tlp_agen'
WHERE kode_agen = '$id'";
mysqli_query($konek, $update);
header("location:tampil_agen.php");

?>