<?php
include '../koneksi.php';

// Ambil ID fasilitas dari parameter URL
$id_fasilitas = $_GET['id'];

// Query untuk mengambil data fasilitas berdasarkan ID
$query = "SELECT * FROM fasilitas WHERE id_fasilitas = $id_fasilitas";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);

// Tangkap data form jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_fasilitas = $_POST['nama_fasilitas'];
    $keterangan = $_POST['keterangan'];
    $ketersediaan = $_POST['ketersediaan'];
    
    // Query untuk mengupdate data fasilitas ke database
    $query = "UPDATE fasilitas SET nama_fasilitas='$nama_fasilitas', keterangan='$keterangan', ketersediaan='$ketersediaan' WHERE id_fasilitas=$id_fasilitas";
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
    <title>Edit Fasilitas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

    <?php include '../komponen/navbar.php'; ?>

    <div class="container mt-5">
        <h2>Edit Fasilitas</h2>

        <form method="POST" action="">
            <div class="form-group">
                <label for="nama_fasilitas">Nama Fasilitas:</label>
                <input type="text" class="form-control" name="nama_fasilitas" value="<?php echo $row['nama_fasilitas']; ?>">
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan:</label>
                <textarea class="form-control" name="keterangan"><?php echo $row['keterangan']; ?></textarea>
            </div>
            <!-- Tambahkan input untuk ketersediaan -->
            <div class="form-group">
                <label for="ketersediaan">Ketersediaan:</label>
                <input type="text" class="form-control" name="ketersediaan" value="<?php echo $row['ketersediaan']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
