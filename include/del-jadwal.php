<?php
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM jadwal WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Jadwal berhasil dihapus";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
<a href="jadwal.php">Kembali</a>
