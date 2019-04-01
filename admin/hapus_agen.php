<?php
include "../config/koneksi.php";
$hapus = "DELETE FROM tabel_agen WHERE kode_agen='$_GET[id]'";
mysqli_query($konek, $hapus);
header("location:tampil_agen.php");
?>