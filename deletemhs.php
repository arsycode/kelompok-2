<?php
include "lib/koneksi.php";
$npm = $_GET["npm"];
$sql = "DELETE FROM mahasiswa WHERE npm = ".$npm;
// mysqli_query($konek,"DELETE FROM dosen WHERE kd_dosen = '$kd_dosen'");
$konek->query($sql);
header("location:mhs.php");
?>