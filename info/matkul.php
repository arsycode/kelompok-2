<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mata Kuliah</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header style="background-color: #37517e" id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="../home.html">Kelompok 2</a></h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="../home.html">Home</a></li>
                    <li class="dropdown">
                        <a href="#">
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
                    <li><a class="nav-link" href="../laporan.html">Laporan</a></li>
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
        <h2 class="text-center">Tabel Data Mata Kuliah</h2>
        <a href="../forms/formmatkul.php">
        <button type="button" class="btn btn-primary">Tambah Data</button>
        </a>
        <br><br>
        <table class="table">
            <thead class="table table-primary">
                <tr>
                    <th>No.</th>
                    <th>Kode MK</th>
                    <th>Nama MK</th>
                    <th>SKS</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>123</td>
                    <td>Database</td>
                    <td>3</td>
                    <td>
                        <button type="button" class="btn btn-warning">Edit</button>
                        <button type="button" class="btn btn-danger">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>