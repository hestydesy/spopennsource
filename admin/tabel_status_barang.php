<html>
<head><title>Administrator Website</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
session_start();
include "../config/koneksi.php";
echo "<h2>TABEL BARANG</h2>
<form method=\"POST\" action=\"input_status_barang.php\">
<table>
<tr><td>Kode Status Barang</td><td>:<input type=\"text\" name=\"kode_status_barang\" required></td></tr>
<tr><td>Status Barang</td><td>:<input type=\"text\" name=\"status_barang\" required></td></tr>
<tr><td colspan=\"2\"><input type=\"submit\" value=\"Simpan\">
<input type=\"reset\" value=\"Batal\" >
</td></tr>
</table>
</form>";
?>