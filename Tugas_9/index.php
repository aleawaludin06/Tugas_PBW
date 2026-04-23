<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h2>Selamat Datang di Warung Mamah Ale</h2>
    <h6>Silahkan Cari Produk yang ada mau disini</h6>

    <form method="GET" class="row mb-3">
        <div class="col-md-6">
            <input type="text" name="cari" class="form-control" placeholder="Cari produk..."
                value="<?= isset($_GET['cari']) ? $_GET['cari'] : '' ?>">
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary">Cari</button>
        </div>
        <div class="col-md-2">
            <a href="index.php" class="btn btn-secondary">Reset</a>
        </div>
    </form>

    <a href="tambah.php" class="btn btn-success mb-3">+ Tambah Produk</a>

    <?php
    $cari = $_GET['cari'] ?? '';

    if($cari != ''){
        $stmt = $conn->prepare("SELECT * FROM produk WHERE nama_produk LIKE ?");
        $like = "%$cari%";
        $stmt->bind_param("s", $like);
    } else {
        $stmt = $conn->prepare("SELECT * FROM produk");
    }

    $stmt->execute();
    $result = $stmt->get_result();
    ?>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>

        <?php while($row = $result->fetch_assoc()){ ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= htmlspecialchars($row['nama_produk']); ?></td>
            <td><?= htmlspecialchars($row['kategori']); ?></td>
            <td>Rp<?= number_format($row['harga'],2); ?></td>
            <td><?= $row['stok']; ?></td>
            <td><?= htmlspecialchars($row['deskripsi']); ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm"
                onclick="return confirm('Yakin?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>