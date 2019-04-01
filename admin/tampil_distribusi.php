<html>
<head><title>Administrator Website</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
session_start();
include "../config/koneksi.php";
echo "<h2>Distribusi Barang</h2><br><h3>PT. MRA Media Group</h3>
<form method=\"POST\" action=\"tabel_distribusi.php\">
<input type=\"submit\" value=\"Tambah User\">
<form>
<table>
<tr><th>No</th><th>Kode</th><th>Kode Produk</th><th>Kode Agen</th><th>Kode Status Barang</th>
<th>Harga Satuan</th><th>Jumlah Barang</th><th>Aksi</th></tr>";
$query = "SELECT * FROM tabel_distribusi ORDER BY kode";
$tampil = mysqli_query($konek, $query);
$no=1;
while ($r=mysqli_fetch_array($tampil)){
echo "<tr>
<td>$no</td>
<td>$r[kode]</td>
<td>$r[kode_produk]</td>
<td>$r[kode_agen]</a></td>
<td>$r[kode_status_barang]</td>
<td>$r[harga_satuan]</td>
<td>$r[jumlah_barang]</td>
<td>
<a href=\"edit_distribusi.php?id=$r[kode]\">Edit</a> |
<a href=\"hapus_distribusi.php?id=$r[kode]\">Hapus</a></td>
</tr>";
$no++;
}
?>
</table>
</form>
</body>
</html>