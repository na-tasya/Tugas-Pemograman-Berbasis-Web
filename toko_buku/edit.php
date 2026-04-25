<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM buku WHERE id=$id")->fetch_assoc();
?>

<form action="proses_edit.php" method="POST">
<input type="hidden" name="id" value="<?= $data['id'] ?>">

Judul: <input type="text" name="judul" value="<?= $data['judul'] ?>"><br>
Penulis: <input type="text" name="penulis" value="<?= $data['penulis'] ?>"><br>
Tahun: <input type="number" name="tahun" value="<?= $data['tahun_terbit'] ?>"><br>
Harga: <input type="number" name="harga" value="<?= $data['harga'] ?>"><br>
Stok: <input type="number" name="stok" value="<?= $data['stok'] ?>"><br>

<button>Update</button>
</form>