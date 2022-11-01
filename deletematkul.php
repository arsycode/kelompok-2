<?php
include "lib/koneksi.php";
$kd_mk = $_GET["kd_mk"];
$sql = "DELETE FROM matakuliah WHERE kd_mk = ".$kd_mk;
// mysqli_query($konek,"DELETE FROM dosen WHERE kd_dosen = '$kd_dosen'");
$konek->query($sql);
header("location:matkul.php");
?>