<html>
<head><title>Administrator Website</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
session_start();
include "../config/koneksi.php";
echo "<h2>TABEL AGEN</h2>
<form method=\"POST\" action=\"input_agen.php\">
<table>
<tr><td>Kode Agen</td><td>:<input type=\"text\" name=\"kode\" required></td></tr>
<tr><td>Nama Agen</td><td>:<input type=\"text\" name=\"nama_agen\" required></td></tr>
<tr><td>Alamat Agen</td><td> : <input type=\"text\" name=\"alamat_agen\" size=\"30\" required></td></tr>
<tr><td>No. Telp.Agen</td><td>:<input type=\"text\" name=\"no_tlp_agen\" size=\"30\"></td></tr>
<tr><td colspan=\"2\"><input type=\"submit\" value=\"Simpan\">
<input type=\"reset\" value=\"Batal\" >
</td></tr>
</table>
</form>";
?>