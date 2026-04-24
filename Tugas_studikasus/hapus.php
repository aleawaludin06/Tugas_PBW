<?php
include "koneksi.php";

$stmt = $conn->prepare("DELETE FROM buku WHERE ID=?");
$stmt->bind_param("i", $_GET['id']);

$stmt->execute();

header("Location: index.php");
?>