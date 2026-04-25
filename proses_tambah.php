<?php
include 'koneksi.php';

$stmt = $conn->prepare("INSERT INTO buku (judul, penulis, tahun_terbit, harga, stok) VALUES (?,?,?,?,?)");
$stmt->bind_param("ssidi", $_POST['judul'], $_POST['penulis'], $_POST['tahun'], $_POST['harga'], $_POST['stok']);

$stmt->execute();

header("Location: index.php");
?>