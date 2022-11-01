<?php 
	include 'lib/koneksi.php';

	$sql = 'SELECT nilai.npm,mahasiswa.nama,matakuliah.nama_mk,nilai.nhadir,nilai.ntugas,nilai.uts,nilai.uas
            FROM nilai,mahasiswa,dosen,matakuliah 
            WHERE nilai.kd_mk = matakuliah.kd_mk
            AND nilai.npm = mahasiswa.npm
            AND nilai.kd_dosen = dosen.kd_dosen';

	$data = $konek->query($sql);

	include 'view/v_laporan.php';
 ?>