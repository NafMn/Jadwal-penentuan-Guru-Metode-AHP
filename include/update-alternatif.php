<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];

    $sql = "UPDATE alternatif SET nama='$nama' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Data alternatif berhasil diupdate";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<a href="alternatif.php">Kembali</a>
