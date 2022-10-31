<?php
include "forms/koneksi.php";
$username = $_POST["username"];
$password= $_POST["password"];
mysqli_query($konek,"select * from users where username =  '$username'and password = '$password'");
header("location:home.html");
?>