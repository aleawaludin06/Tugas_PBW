<h2>Tambah Buku</h2>

<form action="proses_tambah.php" method="POST">

    ID: <input type="number" name="ID" required><br><br>

    Judul: <input type="text" name="Judul" required><br><br>

    Penulis: <input type="text" name="Penulis" required><br><br>

    Tahun Terbit: <input type="number" name="Tahun_Terbit" required><br><br>

    Harga: <input type="number" step="0.01" name="Harga" required><br><br>

    Stok: <input type="number" name="Stok" required><br><br>

    <button type="submit">Simpan</button>

</form>

<br>
<a href="index.php">Kembali</a>