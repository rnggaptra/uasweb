<?php

include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_kamar = $_POST['nama_kamar'];
    $tipe_kamar = $_POST['tipe_kamar'];
    $harga = $_POST['harga'];

    $query = "INSERT INTO kamar (nama_kamar, tipe_kamar, harga) VALUES ('$nama_kamar', '$tipe_kamar', '$harga')";
    $result = mysqli_query($koneksi, $query);

    header("Location: tampil.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kamar</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <h2>Tambah Kamar</h2>

        <form method="POST" action="">
            <div class="form-group">
                <label for="nama_kamar">Nama Kamar:</label>
                <input type="text" class="form-control" name="nama_kamar">
            </div>
            <div class="form-group">
                <label for="tipe_kamar">Tipe Kamar:</label>
                <input type="text" class="form-control" name="tipe_kamar">
            </div>
            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="number" class="form-control" name="harga">
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
