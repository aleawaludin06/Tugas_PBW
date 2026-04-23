<?php
include 'koneksi.php';

$stmt = $conn->prepare(
    "INSERT INTO produk (nama_produk, kategori, harga, stok, deskripsi)
    VALUES (?,?,?,?,?)"
);

$stmt->bind_param("ssdis",
    $_POST['nama_produk'],
    $_POST['kategori'],
    $_POST['harga'],
    $_POST['stok'],
    $_POST['deskripsi']
);

if($stmt->execute()){
    header("Location: index.php");
} else {
    echo "Gagal tambah";
}
?>