<html>
<head><title>Administrator Website</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
session_start();
include "../config/koneksi.php";
echo "<h2>Manajemen User</h2>
<form method=\"POST\" action=\"form_user.php\">
<input type=\"submit\" value=\"Tambah User\">
</form>
<table>
<tr><th>No</th><th>Username</th><th>Nama Lengkap</th><th>Email</th><th>Telpon</th><th>Level</th><th>Blokir</th><th>Aksi</th></th></tr>";
$query = "SELECT * FROM users ORDER BY username";
$tampil = mysqli_query($konek, $query);
$no=1;
while($r=mysqli_fetch_array($tampil)){
echo "<tr>
<td>$no</td>
<td>$r[username]</td>
<td>$r[nama_lengkap]</td>
<td><a href=\"mailto:$r[email]\">$r[email]</a></td>
<td>$r[no_telp]</td>
<td>$r[level]</td>
<td>$r[blokir]</td>
<td>
<a href=\"edit_user.php?id=$r[username]\">Edit</a> |
<a href=\"hapus_user.php?id=$r[username]\">Hapus</a></td>
</tr>";
$no++;
}
?>
</table>