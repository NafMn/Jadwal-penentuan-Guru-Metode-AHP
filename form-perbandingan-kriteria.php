<?php
include 'config.php';

$sql = "SELECT * FROM kriteria";
$result = $conn->query($sql);

$kriteria = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $kriteria[] = $row;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Perbandingan Kriteria</title>
</head>
<body>
    <h1>Perbandingan Kriteria</h1>
    <form action="./include/proses-perbandingan-kriteria.php" method="post">
        <table border="1">
            <tr>
                <th>Kriteria 1</th>
                <th>Kriteria 2</th>
                <th>Nilai</th>
            </tr>
            <?php
            for ($i = 0; $i < count($kriteria); $i++) {
                for ($j = $i + 1; $j < count($kriteria); $j++) {
                    echo "<tr>";
                    echo "<td>" . $kriteria[$i]['nama'] . "</td>";
                    echo "<td>" . $kriteria[$j]['nama'] . "</td>";
                    echo "<td><input type='text' name='nilai[" . $kriteria[$i]['id'] . "][" . $kriteria[$j]['id'] . "]'></td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>

<?php
$conn->close();
?>
