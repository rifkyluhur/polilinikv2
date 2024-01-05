<?php
include 'koneksi.php';

// Ambil data dari tabel riwayat_pasien
$sql = "SELECT * FROM riwayat_pasien";
$result = $conn->query($sql);

// Tampilkan data dalam tabel HTML
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pasien</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Riwayat Pasien</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama Pasien</th>
            <th>Tanggal Pemeriksaan</th>
            <th>Hasil Pemeriksaan</th>
            <th>Catatan Medis</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["nama_pasien"] . "</td>
                        <td>" . $row["tanggal_pemeriksaan"] . "</td>
                        <td>" . $row["hasil_pemeriksaan"] . "</td>
                        <td>" . $row["catatan_medis"] . "</td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Tidak ada data riwayat pasien.</td></tr>";
        }
        ?>
    </table>

</body>
</html>

<?php
// Tutup koneksi database
$conn->close();
?>
