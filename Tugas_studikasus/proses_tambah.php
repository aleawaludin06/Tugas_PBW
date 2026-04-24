<?php
include "koneksi.php";

$stmt = $conn->prepare("
    INSERT INTO buku (ID, Judul, Penulis, Tahun_Terbit, Harga, Stok)
    VALUES (?, ?, ?, ?, ?, ?)
");

$stmt->bind_param(
    "issidi",
    $_POST['ID'],
    $_POST['Judul'],
    $_POST['Penulis'],
    $_POST['Tahun_Terbit'],
    $_POST['Harga'],
    $_POST['Stok']
);

$stmt->execute();

header("Location: index.php");
?>