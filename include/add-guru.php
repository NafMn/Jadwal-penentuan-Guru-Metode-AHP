<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];

    $sql = "INSERT INTO guru (nama) VALUES ('$nama')";

    if ($conn->query($sql) === TRUE) {
        echo "Guru berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<a href="form-guru.php">Kembali</a>
