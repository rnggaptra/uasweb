<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Proses pendaftaran akun
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Proses penyimpanan data ke database atau validasi lainnya dapat dilakukan di sini

    // Redirect ke halaman login setelah pendaftaran berhasil
    header("Location: /UASLaluRendi/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Daftar Akun</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input type="text" class="form-control" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                        </form>
                        <p class="text-center mt-3">Sudah punya akun? <a href="/UASLaluRendi/auth/login.php">Login disini</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
