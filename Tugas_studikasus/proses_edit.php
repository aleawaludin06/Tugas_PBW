<?php
include "koneksi.php";

$stmt = $conn->prepare("
    UPDATE buku
    SET Judul=?, Penulis=?, Tahun_Terbit=?, Harga=?, Stok=?
    WHERE ID=?
");

$stmt->bind_param(
    "ssidis",
    $_POST['Judul'],
    $_POST['Penulis'],
    $_POST['Tahun_Terbit'],
    $_POST['Harga'],
    $_POST['Stok'],
    $_POST['ID']
);

$stmt->execute();

header("Location: index.php");
?>