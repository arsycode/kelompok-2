<?php 
	include 'lib/koneksi.php';

	$sql = 'SELECT * FROM nilai';
	$sql2 = 'SELECT * FROM dosen';
	$sql3 = 'SELECT * FROM mahasiswa';
	$sql4 = 'SELECT * FROM matakuliah';

	$nilai = $konek->query($sql);
	$dosen = $konek->query($sql2);
	$mahasiswa = $konek->query($sql3);
	$matakuliah = $konek->query($sql4);

	include 'view/v_nilai.php';
 ?>