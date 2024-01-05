<?php
// edit.php

// Sambungkan ke database
include '../koneksi.php';

// Ambil ID kamar dari parameter URL
$id_kamar = $_GET['id'];

// Query untuk mengambil data kamar berdasarkan ID
$query = "SELECT * FROM kamar WHERE id_kamar = $id_kamar";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);

// Tangkap data form jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_kamar = $_POST['nama_kamar'];
    $tipe_kamar = $_POST['tipe_kamar'];
    $harga = $_POST['harga'];

    // Query untuk mengupdate data kamar ke database
    $query = "UPDATE kamar SET nama_kamar='$nama_kamar', tipe_kamar='$tipe_kamar', harga='$harga' WHERE id_kamar=$id_kamar";
    $result = mysqli_query($koneksi, $query);

    // Redirect ke tampil.php setelah berhasil edit data
    header("Location: tampil.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kamar</title>
    <!-- Tambahkan link Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <h2>Edit Kamar</h2>

        <form method="POST" action="">
            <div class="form-group">
                <label for="nama_kamar">Nama Kamar:</label>
                <input type="text" class="form-control" name="nama_kamar" value="<?php echo $row['nama_kamar']; ?>">
            </div>
            <div class="form-group">
                <label for="tipe_kamar">Tipe Kamar:</label>
                <input type="text" class="form-control" name="tipe_kamar" value="<?php echo $row['tipe_kamar']; ?>">
            </div>
            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="number" class="form-control" name="harga" value="<?php echo $row['harga']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <!-- Tambahkan script Bootstrap JS dan Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
