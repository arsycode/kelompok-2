<?php 
	include 'lib/koneksi.php';

	$sql = 'SELECT * FROM dosen';

	$dosen = $konek->query($sql);

	include 'view/v_dosen.php';
 ?>