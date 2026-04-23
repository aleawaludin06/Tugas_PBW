<h3>Mencetak Bilangan Genap</h3>

<form method="POST">
    <input type="number" name="awal" placeholder="Masukkan Angka Awal">
    <input type="number" name="akhir" placeholder="Masukkan Angka Akhir">
    <button type="submit">Tampilkan</button>
</form>

<?php
if (isset($_POST['awal']) && isset($_POST['akhir'])) {
    $awal = $_POST['awal'];
    $akhir = $_POST['akhir'];

    $jumlah = 0;

    echo "<div class='hasil'>";

    for ($i = $awal; $i <= $akhir; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
            $jumlah++;
        }
    }

    echo "<br>Total bilangan genap: $jumlah";
    echo "</div>";
}
?>