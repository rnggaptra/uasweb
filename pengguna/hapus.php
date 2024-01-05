<?php
// hapus.php

// Sambungkan ke database
include '../koneksi.php';

// Ambil ID pengguna dari parameter URL
$id_pengguna = $_GET['id'];

// Query untuk menghapus data pengguna dari database
$query = "DELETE FROM pengguna WHERE id_pengguna = $id_pengguna";
$result = mysqli_query($koneksi, $query);

// Redirect ke tampil.php setelah berhasil hapus data
header("Location: tampil.php");
?>

