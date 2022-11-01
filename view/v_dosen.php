<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok 2 | Data Dosen</title>
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
                            <li><a href="dosen.php" class="active">Dosen</a></li>
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
        <h2 class="text-center">Tabel Data Dosen</h2>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
            Tambah Data
        </button>
        <br><br>
        <table class="table">
            <thead class="table table-primary">
                <tr>
                    <th>No.</th>
                    <th>Kode Dosen</th>
                    <th>Nama Dosen</th>
                    <th>Email</th>
                    <th>No Telp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $i = 1;
                    foreach ($dosen as $item) {
                ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $item['kd_dosen'] ?></td>
                    <td><?= $item['nama_dosen'] ?></td>
                    <td><?= $item['email'] ?></td>
                    <td><?= $item['no_telp'] ?></td>
                    <td>
                        <button type="button" class="btn btn-success" onclick="editModal(<?= $item['kd_dosen']?>)"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button type="button" class="btn btn-danger" onclick="deleteModal(<?= $item['kd_dosen']?>)"><i class="fa-solid fa-trash"></i></button>
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
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Dosen</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="dosenadd.php" method="POST">
            <div class="mb-3">
                <label class="form-label ">Kode Dosen</label>
                <input type="text" class="form-control" required name="kd_dosen">
            </div>
            <div class="mb-3">
                <label class="form-label ">Nama Dosen</label>
                <input type="text" class="form-control" required name="nama_dosen">
            </div>
            <div class="mb-3">
                <label class="form-label ">Email Dosen</label>
                <input type="text" class="form-control" required name="email">
            </div>
            <div class="mb-3">
                <label class="form-label ">No Telepon Dosen</label>
                <input type="text" class="form-control" required name="no_telp">
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
            <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Dosen</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="" id="updateForm" method="POST">
            <div class="mb-3">
                <label class="form-label ">Kode Dosen</label>
                <input id="kd_dosenUpdate" disabled type="text" class="form-control" required name="kd_dosen">
            </div>
            <div class="mb-3">
                <label class="form-label ">Nama Dosen</label>
                <input id="nama_dosenUpdate" type="text" class="form-control" required name="nama_dosen">
            </div>
            <div class="mb-3">
                <label class="form-label ">Email Dosen</label>
                <input id="emailUpdate" type="text" class="form-control" required name="email">
            </div>
            <div class="mb-3">
                <label class="form-label ">No Telepon Dosen</label>
                <input id="no_telpUpdate" type="text" class="form-control" required name="no_telp">
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
            <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Dosen</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="" id="deleteForm" method="POST">
            <div class="mb-3">
                <label class="form-label ">Anda yakin untuk menghapus data dosen berikut?</label>
                <br>
                <label class="form-label ">Kode Dosen : </label>
                <input id="kd_dosenDelete" disabled type="text" class="form-control" required name="kd_dosen">
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
            $.get("showdosen.php?kd_dosen="+id, function(data){
                $('#updateForm').attr('action', "updatedosen.php?kd_dosen="+id);
                $('#kd_dosenUpdate').val(data.kd_dosen);
                $('#nama_dosenUpdate').val(data.nama_dosen);
                $('#emailUpdate').val(data.email);
                $('#no_telpUpdate').val(data.no_telp);
                $('#editModal').modal('show');
            });
        }
        function deleteModal(id){
            $.get("showdosen.php?kd_dosen="+id, function(data){
                $('#deleteForm').attr('action', "updatedosen.php?kd_dosen="+id);
                $('#kd_dosenDelete').val(data.kd_dosen);
                $('#deleteModal').modal('show');
            });
        }
    </script>
    <!-- {{-- AJAX DESTROY --}} -->
    <script>
        function destroy(id){
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type    : 'GET',
                        url     : "deletedosen.php?kd_dosen="+id,
                        success: function (data) {
                            location.reload();
                        },
                        error: function (data) {
                            console.log('Error:', data);
                        }
                    });
                }
                else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire(
                        'Dibatalkan',
                        'Foto tidak jadi dihapus :)',
                        'error')
                }
            })
        }
    </script>
</html>