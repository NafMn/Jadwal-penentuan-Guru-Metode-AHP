<?php
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM kriteria WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Kriteria berhasil dihapus";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
<a href="kriteria.php">Kembali</a>
