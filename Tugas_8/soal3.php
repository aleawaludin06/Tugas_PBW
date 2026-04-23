<h3>Membuat Array Nama Hewan</h3>

<form method="POST">
    <input type="text" name="hewan" placeholder="Pisahkan dengan Koma">
    <button type="submit">Tampilkan</button>
</form>

<?php
if (isset($_POST['hewan'])) {
    $hewan = explode(",", $_POST['hewan']);

    foreach ($hewan as $h) {
        echo trim($h) . "<br>";
    }
}
?>