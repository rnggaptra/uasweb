<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UASWEBDASAR</title>
    <!-- Tambahkan link Bootstrap CSS atau CSS lainnya jika diperlukan -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #3498db;
        }

        .navbar-brand {
            color: #ffffff;
        }

        .navbar-nav .nav-link {
            color: #ffffff;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light text-db-danger">
        <a class="navbar-brand" href="#">PERHOTELAN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
               
                <li class="nav-item active">
                    <a class="nav-link" href="/UASLaluRendi/beranda.php">BERANDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/UASLaluRendi/pengguna/tampil.php">PENGGUNA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/UASLaluRendi/kamar/tampil.php">KAMAR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/UASLaluRendi/fasilitas/tampil.php">FASILITAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="konfirmasiLogout()">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
        function konfirmasiLogout() {
            if (confirm("Apakah Anda yakin ingin logout?")) {
                window.location.href = "/UASLaluRendi/auth/logout.php";
            }
        }
    </script>

</body>
</html>
