<?php 
	include 'lib/koneksi.php';
    $npm = $_GET['npm'];
	$sql = "SELECT * FROM mahasiswa WHERE npm ='$npm'";

	$mahasiswa = $konek->query($sql);
    $data = mysqli_fetch_array($mahasiswa);
	header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
    exit();
 ?>