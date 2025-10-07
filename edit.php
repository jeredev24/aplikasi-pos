<?php
include "config.php"; // koneksi mysqli

// Ambil id dari URL
$id = $_GET['id'];

// Ambil data barang berdasarkan id
$result = mysqli_query($conn, "SELECT * FROM barang WHERE id=$id");
$data   = mysqli_fetch_assoc($result);

// Jika form disubmit
if (isset($_POST['update'])) {
    $nama   = $_POST['nama_barang'];
    $harga_pokok = $_POST['harga_pokok'];
    $harga_jual  = $_POST['harga_jual'];
    $stok   = $_POST['stok'];

    // Update ke database
    $sql = "UPDATE barang SET 
                nama_barang='$nama',
                harga_pokok='$harga_pokok',
                harga_jual='$harga_jual',
                stok='$stok'
            WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data berhasil diubah!'); window.location='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <!-- Bootstrap CSS -->
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
</head>
<body>
<div class="container mt-4">
    <a href="index.php" class="btn btn-info mb-3">Kembali</a>
    <div class="card">
        <div class="card-header">
            <h4>Edit Data Barang</h4>
        </div>
        <div class="card-body">
            <form method="POST">
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control"
                           value="<?= $data['nama_barang'] ?>" required>
                </div>
                <div class="form-group">
                    <label>Harga Pokok</label>
                    <input type="number" name="harga_pokok" class="form-control"
                           value="<?= $data['harga_pokok'] ?>" required>
                </div>
                <div class="form-group">
                    <label>Harga Jual</label>
                    <input type="number" name="harga_jual" class="form-control"
                           value="<?= $data['harga_jual'] ?>" required>
                </div>
                <div class="form-group">
                    <label>Stok</label>
                    <input type="number" name="stok" class="form-control"
                           value="<?= $data['stok'] ?>" required>
                </div>
                <button type="submit" name="update" class="btn btn-primary">Ubah Data</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
