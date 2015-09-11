<table border="2">
<tr>
	<td>No</td>
	<td>Nama</td>
	<td>Alasan</td>
	<td colspan="2">Action</td>
</tr>

<?php
	include "koneksi.php";
	$cari=mysql_query("select *from mantan");
	while($a=mysql_fetch_array($cari)){
		echo"
		<tr>
			<td>$a[id]</td>
			<td>$a[nama]</td>
			<td>$a[alasan]</td>
			<td><a href ='update.php?id=$a[id]'>Ubah</td>
			<td><a href ='delete.php?id=$a[id]'>Hapus</td>
		</tr>";
	}

?>
</table>