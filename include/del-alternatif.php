<?php
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM alternatif WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Alternatif berhasil dihapus";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
<a href="alternatif.php">Kembali</a>
