<?php
include 'koneksi.php';
$data = $conn->query("SELECT * FROM buku");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>

    <style>
        body {
            font-family: 'Segoe UI';
            background: #fff0f5;
            margin: 0;
        }

        .header {
            background: #f8bbd0;
            color: #6a1b4d;
            text-align: center;
            padding: 20px;
        }

        .btn {
            background: #f48fb1;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 8px;
        }

        .container {
            width: 85%;
            margin: 30px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.08);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th {
            background: #f8bbd0;
            color: #6a1b4d;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        tr:nth-child(even) {
            background: #fff5f8;
        }

        .edit {
            background: #ffcc80;
            color: #5d4037;
            padding: 5px 10px;
            border-radius: 6px;
            text-decoration: none;
        }

        .hapus {
            background: #ef9a9a;
            color: white;
            padding: 5px 10px;
            border-radius: 6px;
            text-decoration: none;
        }

        .harga {
            text-align: right;
            padding-right: 15px;
        }
    </style>
</head>

<body>

<div class="header">
    <h1>Data Buku</h1>
    <a href="tambah.php" class="btn">+ Tambah Buku</a>
</div>

<div class="container">

<table>
<tr>
    <th>No</th>
    <th>Judul</th>
    <th>Penulis</th>
    <th>Tahun</th>
    <th>Harga</th>
    <th>Stok</th>
    <th>Aksi</th>
</tr>

<?php $no=1; while($row=$data->fetch_assoc()){ ?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $row['judul'] ?></td>
    <td><?= $row['penulis'] ?></td>
    <td><?= $row['tahun_terbit'] ?></td>

    <td class="harga">
        Rp <?= number_format($row['harga'], 0, ',', '.') ?>
    </td>

    <td><?= $row['stok'] ?></td>
    <td>
        <a href="edit.php?id=<?= $row['id'] ?>" class="edit">Edit</a>
        <a href="hapus.php?id=<?= $row['id'] ?>" class="hapus">Hapus</a>
    </td>
</tr>
<?php } ?>

</table>

</div>

</body>
</html>