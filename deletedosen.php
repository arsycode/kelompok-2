<?php
include "lib/koneksi.php";
$kd_dosen = $_GET["kd_dosen"];
$sql = "DELETE FROM dosen WHERE kd_dosen = ".$kd_dosen;
// mysqli_query($konek,"DELETE FROM dosen WHERE kd_dosen = '$kd_dosen'");
$konek->query($sql);
header("location:dosen.php");
?>