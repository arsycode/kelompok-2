<?php
include "lib/koneksi.php";
$id_nilai = $_GET["id_nilai"];
$npm = $_POST["npm"];
$kd_dosen = $_POST["kd_dosen"];
$kd_mk = $_POST["kd_mk"];
$nhadir = $_POST["nhadir"];
$ntugas = $_POST["ntugas"];
$uts = $_POST["uts"];
$uas = $_POST["uas"];
mysqli_query($konek,"UPDATE nilai SET 
                    npm = '$npm',
                    kd_dosen = '$kd_dosen',
                    kd_mk = '$kd_mk',
                    nhadir = '$nhadir',
                    ntugas = '$ntugas',
                    uts = '$uts',
                    uas = '$uas'
                    WHERE id_nilai = ".$id_nilai);
header("location:nilai.php");
?>