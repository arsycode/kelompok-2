<?php 
	include 'lib/koneksi.php';
    $kd_dosen = $_GET['kd_dosen'];
	$sql = "SELECT * FROM dosen WHERE kd_dosen ='$kd_dosen'";

	$dosen = $konek->query($sql);
    $data = mysqli_fetch_array($dosen);
	header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
    exit();
 ?>