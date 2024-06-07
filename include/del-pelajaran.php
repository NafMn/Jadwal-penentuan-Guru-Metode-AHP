<?php
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM mata_pelajaran WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Mata pelajaran berhasil dihapus";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
<a href="pelajaran.php">Kembali</a>
