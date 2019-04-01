<html>
<head><title>Administrator Website</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
session_start();
include "../config/koneksi.php";
echo "<h2>Distribusi Barang</h2><br><h3>PT. MRA Media Group</h3>
<form method=\"POST\" action=\"tabel_produk.php\">
<input type=\"submit\" value=\"Tambah User\">
<form>
<table>
<tr><th>No</th><th>Kode Produk</th><th>Nama Produk</th>
<th>Harga Satuan</th><th>Aksi</th></tr>";
$query = "SELECT * FROM tabel_produk ORDER BY kode_produk";
$tampil = mysqli_query($konek, $query);
$no=1;
while ($r=mysqli_fetch_array($tampil)){
echo "<tr>
<td>$no</td>
<td>$r[kode_produk]</td>
<td>$r[nama_produk]</a></td>
<td>$r[harga_satuan]</td>
<td>
<a href=\"edit_produk.php?id=$r[kode_produk]\">Edit</a> |
<a href=\"hapus_produk.php?id=$r[kode_produk]\">Hapus</a></td>
</tr>";
$no++;
}
?>
</table>
</form>
</body>
</html>