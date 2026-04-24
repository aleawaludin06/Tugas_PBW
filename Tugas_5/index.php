<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <div class="kotak">
    <h1>Perhitungan Total Pembelian</h1>
    <hr>

<?php

    define("Pajak", 0.10);

    $nama_barang = ["Beras", "Minyak", "Gula"];

    $harga = [30000, 15000, 20000];

    $pilih_barang = 0;

    $jumlah = 2;

    $barang = $nama_barang[$pilih_barang];

    $harga_barang = $harga[$pilih_barang];

    $total = $harga_barang * $jumlah;

    $pajak = $total * Pajak;

    $total_akhir = $total + $pajak;

    echo "Nama Barang yang Dibeli: " . $barang . "<br>";

    echo "Harga Satuan Barang: Rp " . $harga_barang . "<br>";

    echo "Jumlah Beli: " . $jumlah . "<br>";

    echo "Total Harga Sebelum Pajak: Rp " . $total . "<br>";

    echo "Pajak 10%: Rp " . $pajak . "<br>";

    echo "<b>Total Bayar Belanjaan Anda: Rp <b>" . $total_akhir . "<br>";

?>
</div>
</body>
</html>