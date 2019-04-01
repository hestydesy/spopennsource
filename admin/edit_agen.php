<html>
<head><title>Administrator Website</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include "../config/koneksi.php";
$id=$_GET['id'];
$edit = "SELECT * FROM tabel_agen WHERE kode_agen='$id'";
$hasil = mysqli_query($konek, $edit);
$r = mysqli_fetch_array($hasil);
echo "<h2>Edit Kode</h2>
<form method=\"POST\" action=\"update_agen.php\">
<input type=\"hidden\" name=\"id\" value=\"$r[kode_agen]\">
<table>
<tr><td>Kode Agen</td> <td> : <input type=\"text\" name=\"kode_agen\" value=\"$r[kode_agen]\"></td></tr>
<tr><td>Nama Agen</td> <td> : <input type=\"text\" name=\"nama_agen\" value=\"$r[nama_agen]\"></td></tr>
<tr><td>Alamat Agen</td><td> : <input type=\"text\" name=\"alamat_agen\" size=\"30\" value=\"$r[alamat_agen]\"></td></tr>
<tr><td>No. tlp. Agen</td><td> : <input type=\"text\" name=\"no_tlp_agen\" size=\"30\" value=\"$r[no_tlp_agen]\"></td></tr>
<tr><td colspan=\"2\"><input type=\"submit\" value=\"Update\">
<input type=\"button\" value=\"Batal\" onclick=\"self.history.back()\"></td></tr>
</table>
</form>";
?>