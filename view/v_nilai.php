<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok 2 | Data Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
    <header style="background-color: #37517e" id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="home.html">Kelompok 2</a></h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="home.html">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="active">
                            <span>Tampil Data</span>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul>
                            <li><a href="mhs.php">Mahasiswa</a></li>
                            <li><a href="dosen.php">Dosen</a></li>
                            <li><a href="matkul.php">Mata Kuliah</a></li>
                            <li><a href="nilai.php">Nilai</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href="laporan.php">Laporan</a></li>
                    <li>
                        <a class="getstarted" href="../about.html">About</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->
    <br><br><br><br><br>
    <div class="container">
        <h2 class="text-center">Tabel Data Nilai</h2>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
            Tambah Data
        </button>
        <br><br>
        <table class="table">
            <thead class="table table-primary">
                <tr>
                    <th>No.</th>
                    <th>NPM</th>
                    <th>Kode Dosen</th>
                    <th>Kode MK</th>
                    <th>Nilai Hadir</th>
                    <th>Nilai Tugas</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $i = 1;
                    foreach ($nilai as $item) {
                ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $item['npm'] ?></td>
                    <td><?= $item['kd_dosen'] ?></td>
                    <td><?= $item['kd_mk'] ?></td>
                    <td><?= $item['nhadir'] ?></td>
                    <td><?= $item['ntugas'] ?></td>
                    <td><?= $item['uts'] ?></td>
                    <td><?= $item['uas'] ?></td>
                    <td>
                        <button type="button" class="btn btn-success" onclick="editModal(<?= $item['id_nilai'] ?>)"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button type="button" class="btn btn-danger" onclick="deleteModal(<?= $item['id_nilai'] ?>)"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
                <?php
                $i++;
                    }
                    ?>
            </tbody>
        </table>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Nilai</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="nilaiadd.php" method="POST">
            <div class="row">
                
            
            <div class="mb-3 col-md-6">
                <label class="form-label ">Mahasiswa</label>
                <select name="npm" class="form-select" required id="">
                    <?php
                     foreach ($mahasiswa as $item) {
                    ?>
                    <option value="<?= $item['npm']?>"><?= $item['nama']?></option>  
                    <?php
                     } 
                    ?>
                </select>
            </div>
            <div class="mb-3 col-md-6">
                <label class="form-label ">Kode Dosen</label>
                <select name="kd_dosen" class="form-select" required id="">
                    <?php
                     foreach ($dosen as $item) {
                    ?>
                    <option value="<?= $item['kd_dosen']?>"><?= $item['nama_dosen']?></option>  
                    <?php
                     } 
                    ?>
                </select>
            </div>
            <div class="mb-3 col-md-6">
                <label class="form-label ">Kode Mata Kuliah</label>
                <select name="kd_mk" class="form-select" required id="">
                    <?php
                     foreach ($matakuliah as $item) {
                    ?>
                    <option value="<?= $item['kd_mk']?>"><?= $item['nama_mk']?></option>  
                    <?php
                     } 
                    ?>
                </select>
            </div>
            <div class="mb-3 col-md-6">
                <label class="form-label ">Nilai Hadir</label>
                <input type="text" class="form-control" required name="nhadir">
            </div>
            <div class="mb-3 col-md-6">
                <label class="form-label ">Nilai Tugas</label>
                <input type="text" class="form-control" required name="ntugas">
            </div>
            <div class="mb-3 col-md-6">
                <label class="form-label">Nilai UTS</label>
                <input type="text" class="form-control" required name="uts">
            </div>
            <div class="mb-3 col-md-6">
                <label class="form-label">Nilai UAS</label>
                <input type="text" class="form-control" required name="uas">
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        </div>
        </div>
    </div>
    </div>
    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Nilai</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="" id="updateForm" method="POST">
        <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label ">Mahasiswa</label>
                    <select name="npm" id="npmUpdate" class="form-select" required id="">
                        <?php
                         foreach ($mahasiswa as $item) {
                        ?>
                        <option value="<?= $item['npm']?>"><?= $item['nama']?></option>  
                        <?php
                         } 
                        ?>
                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label ">Kode Dosen</label>
                    <select name="kd_dosen" id="kd_dosenUpdate" class="form-select" required id="">
                        <?php
                         foreach ($dosen as $item) {
                        ?>
                        <option value="<?= $item['kd_dosen']?>"><?= $item['nama_dosen']?></option>  
                        <?php
                         } 
                        ?>
                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label ">Kode Mata Kuliah</label>
                    <select name="kd_mk" id="kd_mkUpdate" class="form-select" required id="">
                        <?php
                         foreach ($matakuliah as $item) {
                        ?>
                        <option value="<?= $item['kd_mk']?>"><?= $item['nama_mk']?></option>  
                        <?php
                         } 
                        ?>
                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label ">Nilai Hadir</label>
                    <input type="text" id="nhadirUpdate" class="form-control" required name="nhadir">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label ">Nilai Tugas</label>
                    <input type="text" id="ntugasUpdate" class="form-control" required name="ntugas">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label">Nilai UTS</label>
                    <input type="text" id="utsUpdate" class="form-control" required name="uts">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label">Nilai UAS</label>
                    <input type="text" id="uasUpdate" class="form-control" required name="uas">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        </div>
        </div>
    </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Nilai</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="" id="deleteForm" method="POST">
            <div class="mb-3">
                <label class="form-label ">Anda yakin untuk menghapus data nilai berikut?</label>
                <br>
                <label class="form-label ">NPM : </label>
                <input id="npmDelete" disabled type="text" class="form-control" required name="npm">
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
        </div>
        </div>
    </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- {{-- AJAX EDIT --}} -->
<script>
        function editModal(id){
            $.get("shownilai.php?id_nilai="+id, function(data){
                $('#updateForm').attr('action', "updatenilai.php?id_nilai="+id);
                $('#npmUpdate').val(data.npm).change();
                $('#kd_dosenUpdate').val(data.kd_dosen).change();
                $('#kd_mkUpdate').val(data.kd_mk).change();
                $('#nhadirUpdate').val(data.nhadir);
                $('#ntugasUpdate').val(data.ntugas);
                $('#utsUpdate').val(data.uts);
                $('#uasUpdate').val(data.uas);
                $('#editModal').modal('show');
            });
        }
        function deleteModal(id){
            $.get("shownilai.php?id_nilai="+id, function(data){
                $('#deleteForm').attr('action', "deletenilai.php?id_nilai="+id);
                $('#npmDelete').val(data.npm);
                $('#deleteModal').modal('show');
            });
        }
    </script>
</html>