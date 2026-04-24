<?php

$conn = new mysqli(
    'localhost',
    'root',
    '',
    'toko_mamah_ale'
);

if ($conn->connect_error){
    die("Gagal: " . $conn->connect_error);
}

?>