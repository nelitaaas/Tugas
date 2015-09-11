<?php
include "koneksi.php";

	//1
	$nama = $_POST['namaMantan'];
	$alasan = $_POST['alasanMantan'];
	$cb1 = $_POST['cb100'];

	//echo "<pre>".print_r($_POST,true)."</pre>";

	//2
	$simpan = mysql_query("INSERT INTO mantan (nama, alasan) VALUES ('$nama', '$alasan')");

	//3
	if ($simpan){
		echo "Data berhasil disimpan";
		echo $cb1;
	}else{
		echo "TEU BISAEUN!!!";
	}
?>