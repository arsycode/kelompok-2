<?php 
	include 'lib/koneksi.php';

	$sql = 'SELECT * FROM mahasiswa';

	$mahasiswa = $konek->query($sql);

	include 'view/v_mhs.php';
 ?>