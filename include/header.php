<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/28ed5f249e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar" class="js-sidebar">
            <!-- Content For Sidebar -->
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">Penentuan Jadwal </a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">Selamat Datang Admin</li>
                    <li class="sidebar-item">
                        <a href="./index.php" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#Guru" data-bs-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-file-lines pe-2"></i>
                            Data Guru
                        </a>
                        <ul id="Guru" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="form-guru.php" class="sidebar-link">Tambah Guru</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="guru.php" class="sidebar-link">Lihat Guru</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#Matpel" data-bs-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-file-lines pe-2"></i>
                            Data Mata Pelajaran
                        </a>
                        <ul id="Matpel" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="form-pelajaran.php" class="sidebar-link">Tambah Mata Pelajaran</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="pelajaran.php" class="sidebar-link">Lihat Mata Pelajaran</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#Jadwal" data-bs-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-file-lines pe-2"></i>
                            Data Jadwal
                        </a>
                        <ul id="Jadwal" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="form-jadwal.php" class="sidebar-link">Tambah Jadwal</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="jadwal.php" class="sidebar-link">Lihat Mata Pelajaran</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#Kriteria" data-bs-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-file-lines pe-2"></i>
                            Data Kriteria
                        </a>
                        <ul id="Kriteria" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="form-kriteria.php" class="sidebar-link">Tambah Kriteria</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="kriteria.php" class="sidebar-link">Lihat Kriteria</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="form-perbandingan-kriteria.php" class="sidebar-link">Perbandingan Kriteria</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#alternatif" data-bs-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-sliders pe-2"></i>
                            Alternatif
                        </a>
                        <ul id="alternatif" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="form-alternatif.php" class="sidebar-link">Tambah Alternatif</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="alternatif.php" class="sidebar-link">Lihat Alternatif</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="form-perbandingan-alternatif.php" class="sidebar-link">Perbandingan Alternatif</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="analisa.php" class="sidebar-link"><i class="fa-solid fa-calculator pe-2"></i>
                        Analisa AHP
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="image/profile.jpg" class="avatar img-fluid rounded" alt="" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Profile</a>
                                <a href="#" class="dropdown-item">Setting</a>
                                <a href="#" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

