<?php 
	include 'lib/koneksi.php';
    $id_nilai = $_GET['id_nilai'];
	$sql = "SELECT * FROM nilai WHERE id_nilai ='$id_nilai'";

	$nilai = $konek->query($sql);
    $data = mysqli_fetch_array($nilai);
	header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
    exit();
 ?>