<?php
include "lib/koneksi.php";
$npm = $_GET["npm"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
mysqli_query($konek,"UPDATE mahasiswa SET 
                    nama = '$nama',
                    alamat = '$alamat'
                    WHERE npm = '$npm'");
header("location:mhs.php");
?>