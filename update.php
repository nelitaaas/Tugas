<?php
include "koneksi.php";

$id = $_GET['id'];
$a = mysql_fetch_array(mysql_query("SELECT*FROM mantan WHERE id = '$id'"));

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$alasan = $_POST['alasan'];

	$update = mysql_query("UPDATE mantan SET alasan = '$alasan' WHERE id = '$id'");

	if($update){
		echo "<script>
		alert('Data Berhasil di Ubah');
		window.location = 'laporan.php';
		</script>";
	}else{
		echo "<script>
		alert('Data GAGAL di UBAH!');
		window.location = 'laporan.php';
		</script>";
	}
}
?>

<form action = "" method = "POST">
	ID: <input type = "text" name = "id" value = "<? echo $id; ?>" readonly>
	Nama: <input type = "text" name = "nama" value = "<? echo $a[nama]; ?>" readonly>
	Alasan: <input type = "text" name = "alasan" value = "<? echo $a[alasan]; ?>"><br><br>

	<input type = "submit" name = "simpan" value = "Ubah">
</form>