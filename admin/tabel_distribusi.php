<html>
<head><title>Administrator Website</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
session_start();
include "../config/koneksi.php";
echo "<h2>TABEL DISTRIBUSI</h2>
<form method=\"POST\" action=\"input_distribusi.php\">
<table>
<tr><td>Kode</td><td>:<input type=\"text\" name=\"kode\" required></td></tr>
<tr><td>Kode Produk</td><td>:<input type=\"text\" name=\"kode_produk\" required></td></tr>
<tr><td>Kode Agen</td><td> : <input type=\"text\" name=\"kode_agen\" size=\"30\" required></td></tr>
<tr><td>Kode Status Barang</td><td>:<input type=\"text\" name=\"kode_status_barang\" size=\"30\"></td></tr>
<tr><td>Harga Satuan</td><td>:<input type=\"text\" name=\"harga_satuan \" size=\"30\"></td></tr>
<tr><td>Jumlah Barang</td><td>:<input type=\"text\" name=\"jumlah_barang\" size=\"30\"></td></tr>
<tr><td colspan=\"2\"><input type=\"submit\" value=\"Simpan\">
<input type=\"reset\" value=\"Batal\" >
</td></tr>
</table>
</form>";
?>