<?php
include "koneksi.php";
							
$npm = $_POST["npm"];
$kd_dosen = $_POST["kd_dosen"];
$kd_mk = $_POST["kd_mk"];
$nhadir = $_POST["nhadir"];
$ntugas = $_POST["ntugas"];
$uts = $_POST["uts"];
$uas = $_POST["uas"];
mysqli_query($konek,"insert into nilai values ('$npm','$kd_dosen','$kd_mk','$nhadir','$ntugas','$uts','$uas')");
header("location:formnilai.php");
?>