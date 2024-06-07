<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];

    $sql = "INSERT INTO mata_pelajaran (nama) VALUES ('$nama')";

    if ($conn->query($sql) === TRUE) {
        echo "Mata pelajaran berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<a href="form-pelajaran.php">Kembali</a>
