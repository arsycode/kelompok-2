<?php 
	include 'lib/koneksi.php';

	$sql = 'SELECT * FROM matakuliah';

	$matakuliah = $konek->query($sql);

	include 'view/v_matkul.php';
 ?>