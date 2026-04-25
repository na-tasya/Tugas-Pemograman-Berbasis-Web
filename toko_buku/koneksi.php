<?php
$conn = new mysqli("localhost", "root", "", "toko_buku");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>