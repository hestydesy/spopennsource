<html>
<head><title>Administrator Website</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
session_start();
include "../config/koneksi.php";
echo "<h2>Distribusi Barang</h2><br><h3>PT. MRA Media Group</h3>
<form method=\"POST\" action=\"tabel_agen.php\">
<input type=\"submit\" value=\"Tambah Agen\">
<form>
<table>
<tr><th>No</th><th>Kode Agen</th><th>Nama Agen</th><th>Alamat Agen</th><th>No Telp. Agen</th>
<th>Aksi</th></tr>";
$query = "SELECT * FROM tabel_agen ORDER BY kode_agen";
$tampil = mysqli_query($konek, $query);
$no=1;
while ($r=mysqli_fetch_array($tampil)){
echo "<tr>
<td>$no</td>
<td>$r[kode_agen]</td>
<td>$r[nama_agen]</td>
<td>$r[alamat_agen]</a></td>
<td>$r[no_tlp_agen]</td>
<td>
<a href=\"edit_agen.php?id=$r[kode_agen]\">Edit</a> |
<a href=\"hapus_agen.php?id=$r[kode_agen]\">Hapus</a></td>
</tr>";
$no++;
}
?>
</table>
</form>
</body>
</html>