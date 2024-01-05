<?php
// tampil.php

// Sambungkan ke database
include '../koneksi.php';

// Ambil data kamar dari database
$query = "SELECT * FROM kamar";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UASWEBDASAR</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

    <?php
    include '../komponen/navbar.php';
    ?>

    <div class="container mt-5">
        <h2>Data Kamar</h2>

        <a href="tambah.php" class="btn btn-primary mb-3">Tambah Kamar</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Kamar</th>
                    <th>Nama Kamar</th>
                    <th>Tipe Kamar</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['id_kamar']}</td>";
                echo "<td>{$row['nama_kamar']}</td>";
                echo "<td>{$row['tipe_kamar']}</td>";
                echo "<td>{$row['harga']}</td>";
                echo "<td>
                        <a href='edit.php?id={$row['id_kamar']}' class='btn btn-warning'>Edit</a>
                        <a href='hapus.php?id={$row['id_kamar']}' class='btn btn-danger'>Hapus</a>
                      </td>";
                echo "</tr>";
            }
            ?>

        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
