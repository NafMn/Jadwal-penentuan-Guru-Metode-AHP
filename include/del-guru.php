<?php
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM guru WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Guru berhasil dihapus";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
<a href="guru.php">Kembali</a>
