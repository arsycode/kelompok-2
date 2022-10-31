<?php
include "koneksi.php";
$kd_dosen = $_POST["kd_dosen"];
$nama_dosen = $_POST["nama_dosen"];
$email = $_POST["email"];
$no_telp = $_POST["no_telp"];
mysqli_query($konek,"insert into dosen values ('$kd_dosen','$nama_dosen','$email','$no_telp')");
header("location:formdosen.php");
?>