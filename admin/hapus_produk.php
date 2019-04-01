<?php
include "../config/koneksi.php";
$hapus = "DELETE FROM tabel_produk WHERE kode_produk='$_GET[id]'";
mysqli_query($konek, $hapus);
header("location:tampil_produk.php");
?>