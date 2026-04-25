<!DOCTYPE html>
<html>
<head>
<style>
body { background:#ffe6f0; font-family:Arial; }
.box {
    width: 400px;
    margin: 50px auto;
    background:white;
    padding:20px;
    border-radius:10px;
}
button {
    background:#ff66b2;
    color:white;
    padding:10px;
    border:none;
}
</style>
</head>
<body>

<div class="box">
<h2>Tambah Buku</h2>

<form action="proses_tambah.php" method="POST">
Judul: <input type="text" name="judul"><br><br>
Penulis: <input type="text" name="penulis"><br><br>
Tahun: <input type="number" name="tahun"><br><br>
Harga: <input type="number" name="harga"><br><br>
Stok: <input type="number" name="stok"><br><br>

<button>Simpan</button>
</form>

</div>

</body>
</html>