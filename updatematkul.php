<?php
include "lib/koneksi.php";
$kd_mk = $_GET["kd_mk"];
$nama_mk = $_POST["nama_mk"];
$sks = $_POST["sks"];
mysqli_query($konek,"UPDATE matakuliah SET 
                    nama_mk = '$nama_mk',
                    sks = '$sks'
                    WHERE kd_mk = '$kd_mk'");
header("location:matkul.php");
?>