<?php
include "../config/koneksi.php";
$hapus = "DELETE FROM tabel_status_barang WHERE kode_status_barang='$_GET[id]'";
mysqli_query($konek, $hapus);
header("location:tampil_status_barang.php");
?>