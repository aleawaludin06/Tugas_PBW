<h3>Menentukan Jenis Kendaraan Berdasarkan Roda</h3>

<form method="POST">
    <input type="number" name="roda" placeholder="Masukkan jumlah roda">
    <button type="submit">Cek</button>
</form>

<?php
if (isset($_POST['roda'])) {
    $roda = $_POST['roda'];

    switch ($roda) {
        case 1:
            echo "Kendaraan: Unicycle";
            break;
        case 2:
            echo "Kendaraan: Motor, Sepeda, Scooter";
            break;
        case 3:
            echo "Kendaraan: Bajaj";
            break;
        case 4:
            echo "Kendaraan: Mobil, Bus";
            break;
        default:
            echo "Tidak diketahui";
    }
}
?>