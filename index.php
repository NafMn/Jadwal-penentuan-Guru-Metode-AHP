<?php 
include './include/header.php';
?>


<?php
include 'config.php';

// Fungsi-fungsi AHP

// Ambil data guru
$sql_guru = "SELECT * FROM guru";
$result_guru = $conn->query($sql_guru);

// Ambil data mata pelajaran
$sql_pelajaran = "SELECT * FROM mata_pelajaran";
$result_pelajaran = $conn->query($sql_pelajaran);

// Ambil data jadwal
$sql_jadwal = "SELECT * FROM jadwal";
$result_jadwal = $conn->query($sql_jadwal);

// Proses analisis AHP

// Tampilkan hasil analisis AHP
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Analisis AHP</title>
</head>
<body>
    <h1>Hasil Analisis AHP</h1>
    <h2>Prioritas Kriteria</h2>
    <!-- Tampilkan tabel prioritas kriteria -->

    <h2>Prioritas Alternatif untuk Setiap Kriteria</h2>
    <!-- Tampilkan tabel prioritas alternatif -->

    <h2>Jadwal Optimal</h2>
    <table border="1">
        <tr>
            <th>Hari</th>
            <th>Jam Ke</th>
            <th>Guru</th>
            <th>Mata Pelajaran</th>
        </tr>
        <!-- Tampilkan jadwal optimal -->
    </table>
</body>
</html>

<?php
$conn->close();
?>


<?php include_once './include/footer.php' ?>