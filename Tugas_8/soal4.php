<h3>Menentukan Ganjil atau Genap</h3>

<form method="POST">
    <input type="number" name="angka" placeholder="Masukkan Angka">
    <button type="submit">Cek</button>
</form>

<?php
if (isset($_POST['angka'])) {
    $angka = $_POST['angka'];
    $hasil = ($angka % 2 == 0) ? "Genap" : "Ganjil";
    echo "Hasil: " . $hasil;
}
?>