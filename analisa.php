<?php 
include './include/header.php';
?>
<?php
include 'config.php';

// Fungsi AHP dan proses analisis AHP

// Misalnya, setelah proses analisis AHP selesai
$prioritas_alternatif = array(); // Array berisi nilai prioritas untuk setiap alternatif (jadwal)

// Ambil data guru
$sql_guru = "SELECT * FROM guru";
$result_guru = $conn->query($sql_guru);

// Ambil data mata pelajaran
$sql_pelajaran = "SELECT * FROM mata_pelajaran";
$result_pelajaran = $conn->query($sql_pelajaran);

// Ambil data jadwal
$sql_jadwal = "SELECT jadwal.*, guru.nama AS guru_nama, mata_pelajaran.nama AS pelajaran_nama FROM jadwal
                JOIN guru ON jadwal.guru_id = guru.id
                JOIN mata_pelajaran ON jadwal.pelajaran_id = mata_pelajaran.id";
$result_jadwal = $conn->query($sql_jadwal);

// Tampilkan hasil jadwal mengajar guru berdasarkan prioritas alternatif
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Penentuan Jadwal Mengajar Guru</title>
</head>
<body>
    <h1>Hasil Penentuan Jadwal Mengajar Guru</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Hari</th>
            <th>Jam Ke</th>
            <th>Guru</th>
            <th>Mata Pelajaran</th>
        </tr>
        <?php
        if ($result_jadwal->num_rows > 0) {
            $no = 1;
            while($row = $result_jadwal->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $row["hari"] . "</td>";
                echo "<td>" . $row["jam_ke"] . "</td>";
                echo "<td>" . $row["guru_nama"] . "</td>";
                echo "<td>" . $row["pelajaran_nama"] . "</td>";
                echo "</tr>";
                $no++;
            }
        } else {
            echo "<tr><td colspan='5'>Tidak ada jadwal yang tersedia</td></tr>";
        }
        ?>
    </table>


<?php
$conn->close();
include_once './include/footer.php'
?>
