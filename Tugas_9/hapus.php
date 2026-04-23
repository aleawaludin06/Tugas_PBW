<?php
include 'koneksi.php';

$stmt = $conn->prepare("DELETE FROM produk WHERE id=?");
$stmt->bind_param("i", $_GET['id']);

if($stmt->execute()){
    header("Location: index.php");
} else {
    echo "Gagal hapus";
}
?>