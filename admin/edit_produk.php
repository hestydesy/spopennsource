<html>
<head><title>Administrator Website</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include "../config/koneksi.php";
$id=$_GET['id'];
$edit = "SELECT * FROM tabel_produk WHERE kode_produk='$id'";
$hasil = mysqli_query($konek, $edit);
$r = mysqli_fetch_array($hasil);
echo "<h2>Edit Kode</h2>
<form method=\"POST\" action=\"update_produk.php\">
<input type=\"hidden\" name=\"id\" value=\"$r[kode_produk]\">
<table>
<tr><td>Kode</td> <td> : <input type=\"text\" name=\"kode_produk\" value=\"$r[kode_produk]\"></td></tr>
<tr><td>Nama Produk</td> <td> : <input type=\"text\" name=\"nama_produk\" value=\"$r[nama_produk]\"></td></tr>
<tr><td>Harga Produk</td><td> : <input type=\"text\" name=\"harga_satuan\" size=\"30\" value=\"$r[harga_satuan]\"></td></tr>
<tr><td colspan=\"2\"><input type=\"submit\" value=\"Update\">
<input type=\"button\" value=\"Batal\" onclick=\"self.history.back()\"></td></tr>
</table>
</form>";
?>