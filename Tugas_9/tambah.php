<?php 

include 'koneksi.php'; 

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-4">
        <h2>Tambah Produk</h2>

        <form action="proses_tambah.php" method="POST">
            <input type="text" name="nama_produk" class="form-control mb-2" placeholder="Nama Produk" required>

            <select name="kategori" class="form-control mb-2" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="Makanan">Makanan</option>
                <option value="Minuman">Minuman</option>
                <option value="Snack">Snack</option>
                <option value="Sembako">Sembako</option>
            </select>

            <input type="number" step="0.01" name="harga" class="form-control mb-2" placeholder="Harga" required>

            <input type="number" name="stok" class="form-control mb-2" placeholder="Stok" required>

            <textarea name="deskripsi" class="form-control mb-2" placeholder="Deskripsi"></textarea>

            <button class="btn btn-success">Simpan</button>
        </form>
    </div>

</body>
</html>