<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nilai = $_POST['nilai'];

    foreach ($nilai as $kriteria1_id => $subnilai) {
        foreach ($subnilai as $kriteria2_id => $value) {
            $sql = "INSERT INTO nilai_kriteria (kriteria1_id, kriteria2_id, nilai) VALUES ($kriteria1_id, $kriteria2_id, $value)";
            if ($conn->query($sql) === TRUE) {
                echo "Nilai perbandingan berhasil disimpan<br>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
}

$conn->close();
?>
<a href="form-perbandingan-kriteria.php">Kembali</a>
