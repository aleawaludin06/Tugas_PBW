<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Nilai</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container">

    <form method="post" action="">
        Masukkan Nama Anda: <input type="text" name="nama">
        <br>
        Masukkan Nilai Anda: <input type="number" name="nilai">
        <br>
        <input type="submit" value="Proses">
        <br>
    </form>

<?php  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];

    if ($nilai >= 85 && $nilai <= 100) {
        $predikat = "A";
        $status = "Lulus";
    } elseif ($nilai >= 75 && $nilai <= 84) {
        $predikat = "B";
        $status = "Lulus";
    } elseif ($nilai >= 65 && $nilai <= 74) {
        $predikat = "C";
        $status = "Lulus";
    } elseif ($nilai >= 50 && $nilai <= 64) {
        $predikat = "D";
        $status = "Tidak Lulus";
    } elseif ($nilai >= 0 && $nilai <= 49) {
        $predikat = "E";
        $status = "Tidak Lulus";
    } else {
        $predikat = "Tidak valid";
        $status = "-";
    }

    echo "<br>Nama : $nama";
    echo "<br>Nilai : $nilai";
    echo "<br>Predikat : $predikat";
    echo "<br>Status : $status";
}
?>

</div>

</body>
</html>