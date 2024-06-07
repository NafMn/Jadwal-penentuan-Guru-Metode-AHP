<?php
include 'config.php';

$sql_guru = "SELECT * FROM guru";
$result_guru = $conn->query($sql_guru);

$sql_pelajaran = "SELECT * FROM mata_pelajaran";
$result_pelajaran = $conn->query($sql_pelajaran);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Jadwal</title>
</head>
<body>
    <h1>Tambah Jadwal</h1>
    <form action="add-jadwal.php" method="post">
        <label>Hari:</label><br>
        <input type="text" name="hari"><br>
        <label>Jam Ke:</label><br>
        <input type="number" name="jam_ke"><br>
        <label>Guru:</label><br>
        <select name="guru_id">
            <?php
            if ($result_guru->num_rows > 0) {
                while($row = $result_guru->fetch_assoc()) {
                    echo "<option value='" . $row["id"] . "'>" . $row["nama"] . "</option>";
                }
            }
            ?>
        </select><br>
        <label>Mata Pelajaran:</label><br>
        <select name="pelajaran_id">
            <?php
            if ($result_pelajaran->num_rows > 0) {
                while($row = $result_pelajaran->fetch_assoc()) {
                    echo "<option value='" . $row["id"] . "'>" . $row["nama"] . "</option>";
                }
            }
            ?>
        </select><br>
        <input type="submit" value="Tambah">
    </form>
</body>
</html>
