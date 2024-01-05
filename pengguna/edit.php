<?php
// edit.php

// Sambungkan ke database
include '../koneksi.php';

// Ambil ID pengguna dari parameter URL
$id_pengguna = $_GET['id'];

// Query untuk mengambil data pengguna berdasarkan ID
$query = "SELECT * FROM pengguna WHERE id_pengguna = $id_pengguna";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);

// Tangkap data form jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $kata_sandi = $_POST['kata_sandi'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];

    // Query untuk mengupdate data pengguna ke database
    $query = "UPDATE pengguna SET nama='$nama', email='$email', kata_sandi='$kata_sandi', tanggal_lahir='$tanggal_lahir', alamat='$alamat' WHERE id_pengguna=$id_pengguna";
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
    <title>Edit Pengguna</title>
    <!-- Tambahkan link Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <h2>Edit Pengguna</h2>

        <form method="POST" action="">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>">
            </div>
            <div class="form-group">
                <label for="kata_sandi">Kata Sandi:</label>
                <input type="password" class="form-control" name="kata_sandi" value="<?php echo $row['kata_sandi']; ?>">
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']; ?>">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" name="alamat"><?php echo $row['alamat']; ?></textarea>
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
