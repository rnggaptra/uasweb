<?php
include '../koneksi.php';

// Periksa apakah parameter ID fasilitas ada pada URL
if (isset($_GET['id'])) {
    $id_fasilitas = $_GET['id'];

    // Query untuk menghapus data fasilitas
    $query = "DELETE FROM fasilitas WHERE id_fasilitas = $id_fasilitas";
    $result = mysqli_query($koneksi, $query);

    // Periksa apakah penghapusan berhasil
    if ($result) {
        // Redirect ke halaman tampil.php setelah menghapus data
        header("Location: tampil.php");
    } else {
        // Jika penghapusan gagal, tampilkan pesan error atau sesuaikan dengan kebutuhan
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    // Jika parameter ID fasilitas tidak ditemukan, tampilkan pesan error atau sesuaikan dengan kebutuhan
    echo "ID fasilitas tidak ditemukan.";
}
?>
