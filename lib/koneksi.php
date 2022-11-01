<?php
$konek = mysqli_connect ("localhost","root","","db_akademik");
if (mysqli_connect_errno()){
echo "koneksi gagal :"  .mysqli_connect_error();
}
?>