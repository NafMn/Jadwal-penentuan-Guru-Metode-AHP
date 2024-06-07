<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $hari = $_POST['hari'];
    $jam_ke = $_POST['jam_ke'];
    $guru_id = $_POST['guru_id'];
    $pelajaran_id = $_POST['pelajaran_id'];

    $sql = "INSERT INTO jadwal (hari, jam_ke, guru_id, pelajaran_id) VALUES ('$hari', $jam_ke, $guru_id, $pelajaran_id)";

    if ($conn->query($sql) === TRUE) {
        echo "Jadwal berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<a href="form-jadwal.php">Kembali</a>
