<?php
include 'koneksi.php';

$stmt = $conn->prepare("SELECT * FROM produk WHERE id=?");
$stmt->bind_param("i", $_GET['id']);
$stmt->execute();
$data = $stmt->get_result()->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    
    <h2>Edit Produk</h2>

    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">

        <input type="text" name="nama_produk" class="form-control mb-2" value="<?= $data['nama_produk']; ?>">

        <input type="text" name="kategori" class="form-control mb-2" value="<?= $data['kategori']; ?>">

        <input type="number" step="0.01" name="harga" class="form-control mb-2" value="<?= $data['harga']; ?>">

        <input type="number" name="stok" class="form-control mb-2" value="<?= $data['stok']; ?>">

        <textarea name="deskripsi" class="form-control mb-2"><?= $data['deskripsi']; ?></textarea>

        <button class="btn btn-warning">Update</button>
    </form>
</div>

</body>
</html>