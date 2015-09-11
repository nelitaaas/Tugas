<?php
include "koneksi.php";

$id = $_GET['id'];

$hapus = mysql_query("DELETE FROM mantan WHERE id = '$id'");

if ($hapus){
	echo "<script>
	alert('Data Berhasil di Hapus');
	window.location = 'laporan.php';
	<script>";
}else{
	echo "<script>
	alert('Data GAGAL!!! di Hapus');
	window.location = 'laporan.php';
	</script>";
}