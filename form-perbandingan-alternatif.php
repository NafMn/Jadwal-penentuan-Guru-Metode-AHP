<?php
include 'config.php';

$sql_kriteria = "SELECT * FROM kriteria";
$result_kriteria = $conn->query($sql_kriteria);

$sql_alternatif = "SELECT * FROM alternatif";
$result_alternatif = $conn->query($sql_alternatif);

$kriteria = [];
$alternatif = [];
if ($result_kriteria->num_rows > 0) {
    while ($row = $result_kriteria->fetch_assoc()) {
        $kriteria[] = $row;
    }
}
if ($result_alternatif->num_rows > 0) {
    while ($row = $result_alternatif->fetch_assoc()) {
        $alternatif[] = $row;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Perbandingan Alternatif</title>
</head>
<body>
    <h1>Perbandingan Alternatif untuk Setiap Kriteria</h1>
    <form action="./include/proses-perbandingan-alternatif.php" method="post">
        <?php
        foreach ($kriteria as $k) {
            echo "<h2>Kriteria: " . $k['nama'] . "</h2>";
            echo "<table border='1'>
                <tr>
                    <th>Alternatif 1</th>
                    <th>Alternatif 2</th>
                    <th>Nilai</th>
                </tr>";
            for ($i = 0; $i < count($alternatif); $i++) {
                for ($j = $i + 1; $j < count($alternatif); $j++) {
                    echo "<tr>";
                    echo "<td>" . $alternatif[$i]['nama'] . "</td>";
                    echo "<td>" . $alternatif[$j]['nama'] . "</td>";
                    echo "<td><input type='text' name='nilai[" . $k['id'] . "][" . $alternatif[$i]['id'] . "][" . $alternatif[$j]['id'] . "]'></td>";
                    echo "</tr>";
                }
            }
            echo "</table>";
        }
        ?>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>

<?php
$conn->close();
?>
