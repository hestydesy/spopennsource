<html>
<head><title>Administrator Website</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
session_start();
include "../config/koneksi.php";
echo "<h2>Distribusi Barang</h2><br><h3>PT. MRA Media Group</h3>
<form method=\"POST\" action=\"tabel_status_barang.php\">
<input type=\"submit\" value=\"Tambah User\">
<form>
<table>
<tr><th>No</th><th>Kode Status Barang</th><th>Status Barang</th>
<th>Aksi</th></tr>";
$query = "SELECT * FROM tabel_status_barang ORDER BY kode_status_barang";
$tampil = mysqli_query($konek, $query);
$no=1;
while ($r=mysqli_fetch_array($tampil)){
echo "<tr>
<td>$no</td>
<td>$r[kode_status_barang]</td>
<td>$r[status_barang]</td>
<td>
<a href=\"edit_status_barang.php?id=$r[kode_status_barang]\">Edit</a> |
<a href=\"hapus_status_barang.php?id=$r[kode_status_barang]\">Hapus</a></td>
</tr>";
$no++;
}
?>
</table>
</form>
</body>
</html>