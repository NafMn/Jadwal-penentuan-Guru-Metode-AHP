<?php
include 'config.php';

$sql = "SELECT * FROM alternatif";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Alternatif</title>
</head>
<body>
    <h1>Daftar Alternatif</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Alternatif</th>
            <th>Aksi</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nama"] . "</td>";
                echo "<td><a href='./include/del-alternatif.php?id=" . $row["id"] . "'>Hapus</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Tidak ada alternatif</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
