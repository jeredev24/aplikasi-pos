<?php
include "config.php"; // koneksi database

// ambil id dari URL
$id = $_GET['id'];

// hapus data berdasarkan id
$sql = "DELETE FROM barang WHERE id=$id";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='index.php';</script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
