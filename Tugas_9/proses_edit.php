<?php
include 'koneksi.php';

$stmt = $conn->prepare(
    "UPDATE produk SET nama_produk=?, kategori=?, harga=?, stok=?, deskripsi=? WHERE id=?"
);

$stmt->bind_param("ssdisi",
    $_POST['nama_produk'],
    $_POST['kategori'],
    $_POST['harga'],
    $_POST['stok'],
    $_POST['deskripsi'],
    $_POST['id']
);

if($stmt->execute()){
    header("Location: index.php");
} else {
    echo "Gagal update";
}
?>