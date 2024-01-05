<?php
include 'koneksi.php';

// Ambil data pendaftaran pasien yang menunggu diperiksa
$sql = "SELECT * FROM pendaftaran_pasien WHERE status = 'Menunggu' ORDER BY tanggal_pendaftaran";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasien yang Akan Diperiksa</title>
</head>
<body>
    <h2>Pasien yang Akan Diperiksa</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Pasien</th>
            <th>Dokter Poli</th>
            <th>Tanggal Pendaftaran</th>
            <th>Status</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["nama_pasien"] . "</td>
                        <td>" . $row["dokter_poli"] . "</td>
                        <td>" . $row["tanggal_pendaftaran"] . "</td>
                        <td>" . $row["status"] . "</td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Tidak ada pasien yang akan diperiksa.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
