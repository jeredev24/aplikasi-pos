<?php
include 'config.php';

// proses simpan data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_barang = $_POST['nama_barang'];
    $harga_pokok = $_POST['harga_pokok'];
    $harga_jual  = $_POST['harga_jual'];
    $stok        = $_POST['stok'];

    // query insert
    $sql = "INSERT INTO barang (nama_barang, harga_pokok, harga_jual, stok) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "siii", $nama_barang, $harga_pokok, $harga_jual, $stok);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Data berhasil disimpan');window.location='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_stmt_close($stmt);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Data-Formulir</title>
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
</head>
<body>
<div class="container">
    <a href="index.php">
        <button class="btn btn-info mb-3 mt-3">Kembali</button>
    </a>
    <div class="card">
        <div class="card-header">
            <h4>Tambah Data</h4>
        </div>
        <div class="card-body">
            <!-- pakai method POST dan action ke halaman ini -->
            <form action="" method="POST">
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input
                            type="text"
                            class="form-control"
                            name="nama_barang"
                            id="nama_barang"
                            placeholder="Ex: Mizone"
                            required
                    />
                </div>
                <div class="form-group">
                    <label for="harga_pokok">Harga Pokok</label>
                    <input
                            type="number"
                            class="form-control"
                            name="harga_pokok"
                            id="harga_pokok"
                            placeholder="Ex: 12000"
                            required
                    />
                </div>
                <div class="form-group">
                    <label for="harga_jual">Harga Jual</label>
                    <input
                            type="number"
                            class="form-control"
                            name="harga_jual"
                            id="harga_jual"
                            placeholder="Ex: 15000"
                            required
                    />
                </div>
                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input
                            type="number"
                            class="form-control"
                            name="stok"
                            id="stok"
                            placeholder="Ex: 17"
                            required
                    />
                </div>
                <button class="btn btn-primary" type="submit">Simpan data</button>
                <button class="btn btn-danger" type="reset">Reset data</button>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
