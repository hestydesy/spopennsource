<html>
<head><title>Administrator Website</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
session_start();
include "../config/koneksi.php";
echo "<h2>TABEL PRODUK</h2>
<form method=\"POST\" action=\"input_produk.php\">
<table>
<tr><td>Kode Produk</td><td>:<input type=\"text\" name=\"kode_produk\" required></td></tr>
<tr><td>Nama Produk</td><td>:<input type=\"text\" name=\"nama_produk\" required></td></tr>
<tr><td>Harga Satuan</td><td> : <input type=\"text\" name=\"harga_satuan\" size=\"30\" required></td></tr>
<tr><td colspan=\"2\"><input type=\"submit\" value=\"Simpan\">
<input type=\"reset\" value=\"Batal\" >
</td></tr>
</table>
</form>";
?>