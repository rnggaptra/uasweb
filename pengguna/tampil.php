<?php
include '../koneksi.php';

$query = "SELECT * FROM pengguna";
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
        <h2>Data Pengguna</h2>

        <a href="tambah.php" class="btn btn-primary mb-3">Tambah Pengguna</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['id_pengguna']}</td>";
                echo "<td>{$row['nama']}</td>";
                echo "<td>{$row['email']}</td>";
                echo "<td>{$row['tanggal_lahir']}</td>";
                echo "<td>{$row['alamat']}</td>";
                echo "<td>
                        <a href='edit.php?id={$row['id_pengguna']}' class='btn btn-warning'>Edit</a>
                        <a href='hapus.php?id={$row['id_pengguna']}' class='btn btn-danger'>Hapus</a>
                      </td>";
                echo "</tr>";
            }
            ?>

            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
