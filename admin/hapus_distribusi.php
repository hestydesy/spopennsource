<?php
include "../config/koneksi.php";
$hapus = "DELETE FROM tabel_distribusi WHERE kode='$_GET[id]'";
mysqli_query($konek, $hapus);
header("location:tampil_distribusi.php");
?>