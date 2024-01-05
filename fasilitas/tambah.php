<?php
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_fasilitas = $_POST['nama_fasilitas'];
    $keterangan = $_POST['keterangan'];
    $ketersediaan = $_POST['ketersediaan'];
    $tanggal = $_POST['tanggal'];

    $query = "INSERT INTO fasilitas (nama_fasilitas, keterangan, ketersediaan, tanggal) VALUES ('$nama_fasilitas', '$keterangan', '$ketersediaan', '$tanggal')";
    $result = mysqli_query($koneksi, $query);

    header("Location: tampil.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Fasilitas</title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <h2>Tambah Fasilitas</h2>

        <form method="POST" action="">
            <div class="form-group">
                <label for="nama_fasilitas">Nama Fasilitas:</label>
                <input type="text" class="form-control" name="nama_fasilitas">
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan:</label>
                <textarea class="form-control" name="keterangan"></textarea>
            </div>
            <div class="form-group">
                <label for="ketersediaan">Ketersediaan:</label>
                <input type="text" class="form-control" name="ketersediaan">
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
