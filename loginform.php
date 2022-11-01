<?php
include "lib/koneksi.php";
$username = $_POST["username"];
$password= $_POST["password"];
$sql = mysqli_query($konek,"select * from users where username =  '$username'and password = '$password'");
if($sql){
    header("location:home.html");
}else[
    header("location:index.html")
]
?>