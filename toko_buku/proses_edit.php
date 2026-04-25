<?php
include 'koneksi.php';

$stmt = $conn->prepare("UPDATE buku SET judul=?, penulis=?, tahun_terbit=?, harga=?, stok=? WHERE id=?");
$stmt->bind_param("ssidii", $_POST['judul'], $_POST['penulis'], $_POST['tahun'], $_POST['harga'], $_POST['stok'], $_POST['id']);

$stmt->execute();

header("Location: index.php");
?>