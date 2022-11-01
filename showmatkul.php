<?php 
	include 'lib/koneksi.php';
    $kd_mk = $_GET['kd_mk'];
	$sql = "SELECT * FROM matakuliah WHERE kd_mk ='$kd_mk'";

	$matakuliah = $konek->query($sql);
    $data = mysqli_fetch_array($matakuliah);
	header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
    exit();
 ?>