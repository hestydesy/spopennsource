<html>
<head><title>Administrator Website</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include "../config/koneksi.php";
$id=$_GET['id'];
$edit = "SELECT * FROM tabel_status_barang WHERE kode_status_barang='$id'";
$hasil = mysqli_query($konek, $edit);
$r = mysqli_fetch_array($hasil);
echo "<h2>Edit Kode</h2>
<form method=\"POST\" action=\"update_status_barang.php\">
<input type=\"hidden\" name=\"id\" value=\"$r[kode_status_barang]\">
<table>
<tr><td>Kode Status Barang</td> <td> : <input type=\"text\" name=\"kode_status_barang\" value=\"$r[kode_status_barang]\"></td></tr>
<tr><td>Status Barang</td> <td> : <input type=\"text\" name=\"status_barang\" value=\"$r[status_barang]\"></td></tr>
<tr><td colspan=\"2\"><input type=\"submit\" value=\"Update\">
<input type=\"button\" value=\"Batal\" onclick=\"self.history.back()\"></td></tr>
</table>
</form>";
?>