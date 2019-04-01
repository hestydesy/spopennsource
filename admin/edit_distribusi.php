<html>
<head><title>Administrator Website</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include "../config/koneksi.php";
$id=$_GET['id'];
$edit = "SELECT * FROM tabel_distribusi WHERE kode='$id'";
$hasil = mysqli_query($konek, $edit);
$r = mysqli_fetch_array($hasil);
echo "<h2>Edit Kode</h2>
<form method=\"POST\" action=\"update_distribusi.php\">
<input type=\"hidden\" name=\"id\" value=\"$r[kode]\">
<table>
<tr><td>Kode</td> <td> : <input type=\"text\" name=\"kode\" value=\"$r[kode]\"></td></tr>
<tr><td>Kode Produk</td> <td> : <input type=\"text\" name=\"kode_produk\" value=\"$r[kode_produk]\"></td></tr>
<tr><td>Kode Agen</td><td> : <input type=\"text\" name=\"kode_agen\" size=\"30\" value=\"$r[kode_agen]\"></td></tr>
<tr><td>Kode Status Barang</td><td> : <input type=\"text\" name=\"kode_status_barang\" size=\"30\" value=\"$r[kode_status_barang]\"></td></tr>
<tr><td>Harga Satuan</td><td> : <input type=\"text\" name=\"harga_satuan\" size=\"30\" value=\"$r[harga_satuan]\"></td></tr>
<tr><td>Jumlah Barang</td><td> : <input type=\"text\" name=\"jumlah_barang\" size=\"30\" value=\"$r[jumlah_barang]\"></td></tr>
<tr><td colspan=\"2\"><input type=\"submit\" value=\"Update\">
<input type=\"button\" value=\"Batal\" onclick=\"self.history.back()\"></td></tr>
</table>
</form>";
?>