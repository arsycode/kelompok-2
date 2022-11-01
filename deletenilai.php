<?php
include "lib/koneksi.php";
$id_nilai = $_GET["id_nilai"];
$sql = "DELETE FROM nilai WHERE id_nilai = ".$id_nilai;
// mysqli_query($konek,"DELETE FROM dosen WHERE kd_dosen = '$kd_dosen'");
$konek->query($sql);
header("location:nilai.php");
?>