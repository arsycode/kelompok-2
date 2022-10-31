<?php
include "koneksi.php";	
$npm = $_POST["npm"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];

mysqli_query($konek,"insert into mahasiswa values ('$npm','$nama','$alamat')");
header("location:formmatkul.php");
?>