<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nilai = $_POST['nilai'];

    foreach ($nilai as $kriteria_id => $subnilai) {
        foreach ($subnilai as $alternatif1_id => $subsubnilai) {
            foreach ($subsubnilai as $alternatif2_id => $value) {
                $sql = "INSERT INTO nilai_alternatif (kriteria_id, alternatif1_id, alternatif2_id, nilai) VALUES ($kriteria_id, $alternatif1_id, $alternatif2_id, $value)";
                if ($conn->query($sql) === TRUE) {
                    echo "Nilai perbandingan berhasil disimpan<br>";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }
    }
}

$conn->close();
?>
<a href="form-perbandingan-alternatif.php">Kembali</a>
