<?php
include 'config.php';

$sql = "SELECT * FROM guru";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Guru</title>
</head>
<body>
    <h1>Daftar Guru</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Guru</th>
            <th>Aksi</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nama"] . "</td>";
                echo "<td><a href='del-guru.php?id=" . $row["id"] . "'>Hapus</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Tidak ada guru</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
