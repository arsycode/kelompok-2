<?php
include "koneksi.php";	
$kd_mk = $_POST["kd_mk"];
$nama_mk = $_POST["nama_mk"];
$sks = $_POST["sks"];
mysqli_query($konek,"insert into matakuliah values ('$kd_mk','$nama_mk','$no_telp')");
header("location:formmatkul.php");
?>