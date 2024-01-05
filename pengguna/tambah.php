<?php
// tambah.php

// Sambungkan ke database
include '../koneksi.php';

// Tangkap data form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $kata_sandi = $_POST['kata_sandi'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];

    // Query untuk menambahkan data pengguna ke database
    $query = "INSERT INTO pengguna (nama, email, kata_sandi, tanggal_lahir, alamat) VALUES ('$nama', '$email', '$kata_sandi', '$tanggal_lahir', '$alamat')";
    $result = mysqli_query($koneksi, $query);

    // Redirect ke tampil.php setelah berhasil tambah data
    header("Location: tampil.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengguna</title>
    <!-- Tambahkan link Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <h2>Tambah Pengguna</h2>

        <form method="POST" action="">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="kata_sandi">Kata Sandi:</label>
                <input type="password" class="form-control" name="kata_sandi">
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" class="form-control" name="tanggal_lahir">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" name="alamat"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>

    <!-- Tambahkan script Bootstrap JS dan Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
