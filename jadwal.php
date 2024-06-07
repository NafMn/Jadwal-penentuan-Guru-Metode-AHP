<?php
include 'config.php';

$sql = "SELECT jadwal.*, guru.nama as guru_nama, mata_pelajaran.nama as pelajaran_nama FROM jadwal
        JOIN guru ON jadwal.guru_id = guru.id
        JOIN mata_pelajaran ON jadwal.pelajaran_id = mata_pelajaran.id";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Jadwal</title>
</head>
<body>
    <h1>Daftar Jadwal</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Hari</th>
            <th>Jam Ke</th>
            <th>Guru</th>
            <th>Mata Pelajaran</th>
            <th>Aksi</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["hari"] . "</td>";
                echo "<td>" . $row["jam_ke"] . "</td>";
                echo "<td>" . $row["guru_nama"] . "</td>";
                echo "<td>" . $row["pelajaran_nama"] . "</td>";
                echo "<td><a href='del-jadwal.php?id=" . $row["id"] . "'>Hapus</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Tidak ada jadwal</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
