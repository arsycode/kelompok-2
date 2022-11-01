<?php
include "lib/koneksi.php";
$kd_dosen = $_GET["kd_dosen"];
$nama_dosen = $_POST["nama_dosen"];
$email = $_POST["email"];
$no_telp = $_POST["no_telp"];
mysqli_query($konek,"UPDATE dosen SET 
                    nama_dosen = '$nama_dosen',
                    email = '$email',
                    no_telp = '$no_telp'
                    WHERE kd_dosen = '$kd_dosen'");
header("location:dosen.php");
?>