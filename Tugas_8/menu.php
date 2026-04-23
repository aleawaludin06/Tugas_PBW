<h1>Menu Soal</h1>
<ul>
    <li><a href="?halaman=soal1">Soal 1</a></li>
    <li><a href="?halaman=soal2">Soal 2</a></li>
    <li><a href="?halaman=soal3">Soal 3</a></li>
    <li><a href="?halaman=soal4">Soal 4</a></li>
</ul>

<hr>

<?php
if (isset($_GET['halaman'])) {
    include $_GET['halaman'] . ".php";
} else {
    echo "Pilih soal yang ingin Anda pilih";
}
?>