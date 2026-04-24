<!DOCTYPE html>
<html>
<head>
    <title>Diskon UKT</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Form Pembayaran UKT</h2>

    <form method="post" action="">
        NPM: <br>
        <input type="text" name="npm"><br>

        Nama: <br>
        <input type="text" name="nama"><br>

        Prodi: <br>
        <input type="text" name="prodi"><br>

        Semester: <br>
        <input type="number" name="semester"><br>

        Biaya UKT: <br>
        <input type="number" name="ukt"><br><br>

        <input type="submit" value="Hitung">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $semester = $_POST['semester'];
    $ukt = $_POST['ukt'];

    $bayar = $ukt;
    $diskon = 0;

    // Diskon bertahap
    if ($ukt >= 5000000) {
        // diskon 10%
        $bayar = $bayar - (0.10 * $bayar);
        $diskon = 10;

        if ($semester > 8) {
            // diskon tambahan 5% dari hasil sebelumnya
            $bayar = $bayar - (0.05 * $bayar);
            $diskon += 5;
        }
    }

    echo "<hr>";
    echo "NPM: $npm <br>";
    echo "Nama: $nama <br>";
    echo "Prodi: $prodi <br>";
    echo "Semester: $semester <br>";
    echo "Biaya UKT: Rp. $ukt <br>";
    if ($diskon == 15) {
        echo "Diskon yang didapat: 10% + 5% <br>";
    } elseif ($diskon == 10) {
        echo "Diskon yang didapat: 10% <br>";
    } else {
        echo "Maaf diskon Anda: 0% <br>";
    }
    echo "UKT Yang harus dibayar: Rp. $bayar";
}
?>

</div>

</body>
</html>