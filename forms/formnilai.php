<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Nilai</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body style="background-color: #f3f5fa">
    <!-- ======= Header ======= -->
    <header style="background-color: #37517e" id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="../home.html">Kelompok 2</a></h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="../home.html">Home</a></li>
                    <li class="dropdown">
                        <a href="#">
                            <span>Tampil Data</span>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul>
                            <li><a href="../info/mhs.php">Mahasiswa</a></li>
                            <li><a href="../info/dosen.php">Dosen</a></li>
                            <li><a href="../info/matkul.php">Mata Kuliah</a></li>
                            <li><a href="../info/nilai.php">Nilai</a></li>
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
        <h1>Tambah Data Nilai</h1>
        <form method="post" action="nilaiadd.php">
            <div class="mb-3">
                <label class="form-label ">NPM Mahasiswa</label>
                <input type="text" class="form-control" name="npm">
            </div>
            <div class="mb-3">
                <label class="form-label ">Kode Dosen</label>
                <input type="text" class="form-control" name="kd_dosen">
            </div>
            <div class="mb-3">
                <label class="form-label ">Kode Mata Kuliah</label>
                <input type="text" class="form-control" name="kd_mk">
            </div>
            <div class="mb-3">
                <label class="form-label ">Nilai Hadir</label>
                <input type="text" class="form-control" name="nhadir">
            </div>
            <div class="mb-3">
                <label class="form-label ">Nilai Tugas</label>
                <input type="text" class="form-control" name="ntugas">
            </div>
            <div class="mb-3">
                <label class="form-label">Nilai UTS</label>
                <input type="text" class="form-control" name="uts">
            </div>
            <div class="mb-3">
                <label class="form-label">Nilai UAS</label>
                <input type="text" class="form-control" name="uas">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>