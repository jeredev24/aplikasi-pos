<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Produk - Point of Sales</title>
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
</head>
<body>
<div class="container mt-4">
    <h4>Produk</h4>
    <h2>Tabel Produk</h2>
;;lml;m
    <!-- Tombol Tambah -->
    <a href="tambah.php" class="btn btn-success mb-3">Tambah Data</a>

    <!-- Form Pencarian -->
    <form method="GET" class="form-inline mb-3">
        <input type="text" name="keyword" class="form-control mr-2"
               placeholder="Cari nama barang..."
               value="<?= isset($_GET['keyword']) ? $_GET['keyword'] : '' ?>">
        <button type="submit" class="btn btn-info">Cari</button>
        <a href="index.php" class="btn btn-secondary ml-2">Reset</a>
    </form>

    <table class="table table-striped table-bordered shadow-sm">
        <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga Pokok</th>
            <th>Harga Jual</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';

        if ($keyword != '') {
            // Cari berdasarkan nama_barang
            $sql = "SELECT * FROM barang 
                    WHERE nama_barang LIKE '%$keyword%'
                    ORDER BY id ASC";
        } else {
            $sql = "SELECT * FROM barang ORDER BY id ASC";
        }

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td class='text-center'>".$no++."</td>";
                echo "<td>".htmlspecialchars($row['nama_barang'])."</td>";
                echo "<td class='text-right'>Rp".number_format($row['harga_pokok'],0,',','.')."</td>";
                echo "<td class='text-right'>Rp".number_format($row['harga_jual'],0,',','.')."</td>";
                echo "<td class='text-center'>".$row['stok']."</td>";
                echo "<td class='text-center'>
                        <a href='edit.php?id=".$row['id']."' class='btn btn-primary btn-sm'>Edit</a>
                        <a href='delete.php?id=".$row['id']."' class='btn btn-danger btn-sm' 
                           onclick=\"return confirm('Yakin hapus data?')\">Delete</a>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6' class='text-center text-muted'>Data tidak ditemukan</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
