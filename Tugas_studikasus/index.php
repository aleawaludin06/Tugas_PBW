<?php
include "koneksi.php";

$result = $conn->query("SELECT * FROM buku");
?>

<h2>Data Buku</h2>

<a href="tambah.php">+ Tambah Buku</a>
<br><br>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Tahun</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

    <?php while($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?= $row['ID']; ?></td>
        <td><?= $row['Judul']; ?></td>
        <td><?= $row['Penulis']; ?></td>
        <td><?= $row['Tahun_Terbit']; ?></td>
        <td><?= $row['Harga']; ?></td>
        <td><?= $row['Stok']; ?></td>
        <td>
            <a href="edit.php?id=<?= $row['ID']; ?>">Edit</a> |
            <a href="hapus.php?id=<?= $row['ID']; ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>