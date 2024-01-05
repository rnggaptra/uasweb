<?php
// hapus.php

// Sambungkan ke database
include '../koneksi.php';

// Ambil ID kamar dari parameter URL
$id_kamar = $_GET['id'];

// Query untuk menghapus data kamar berdasarkan ID
$query = "DELETE FROM kamar WHERE id_kamar = $id_kamar";
$result = mysqli_query($koneksi, $query);

// Redirect ke tampil.php setelah berhasil hapus data
header("Location: tampil.php");
?>
