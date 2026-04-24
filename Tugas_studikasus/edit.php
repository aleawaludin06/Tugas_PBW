<?php
include "koneksi.php";

$stmt = $conn->prepare("SELECT * FROM buku WHERE ID=?");
$stmt->bind_param("i", $_GET['id']);
$stmt->execute();

$data = $stmt->get_result()->fetch_assoc();
?>

<h2>Edit Buku</h2>

<form action="proses_edit.php" method="POST">

    <input type="hidden" name="ID" value="<?= $data['ID']; ?>">

    Judul: <input type="text" name="Judul" value="<?= $data['Judul']; ?>"><br><br>

    Penulis: <input type="text" name="Penulis" value="<?= $data['Penulis']; ?>"><br><br>

    Tahun Terbit: <input type="number" name="Tahun_Terbit" value="<?= $data['Tahun_Terbit']; ?>"><br><br>

    Harga: <input type="number" step="0.01" name="Harga" value="<?= $data['Harga']; ?>"><br><br>

    Stok: <input type="number" name="Stok" value="<?= $data['Stok']; ?>"><br><br>

    <button type="submit">Update</button>

</form>

<br>
<a href="index.php">Kembali</a>