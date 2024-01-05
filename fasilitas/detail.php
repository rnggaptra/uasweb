<?php
include '../koneksi.php';

// Ambil ID fasilitas dari parameter URL
$id_fasilitas = $_GET['id'];

// Query untuk mengambil data fasilitas berdasarkan ID
$query = "SELECT * FROM fasilitas WHERE id_fasilitas = $id_fasilitas";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Fasilitas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

    <?php include '../komponen/navbar.php'; ?>

    <div class="container mt-5">
        <h2>Detail Fasilitas</h2>

        <table class="table table-bordered">
            <tr>
                <th>ID Fasilitas</th>
                <td><?php echo $row['id_fasilitas']; ?></td>
            </tr>
            <tr>
                <th>Nama Fasilitas</th>
                <td><?php echo $row['nama_fasilitas']; ?></td>
            </tr>
            <tr>
                <th>Keterangan</th>
                <td><?php echo $row['keterangan']; ?></td>
            </tr>
            <!-- Tambahkan baris untuk ketersediaan -->
            <tr>
                <th>Ketersediaan</th>
                <td><?php echo $row['ketersediaan']; ?></td>
            </tr>
            
        </table>

        <!-- Tombol untuk kembali ke tampilan sebelumnya -->
        <a href="tampil.php" class="btn btn-primary">Kembali</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
