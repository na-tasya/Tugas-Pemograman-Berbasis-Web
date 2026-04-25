<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
    <style>
        body {
            font-family: Arial;
            background-color: #ffe6f0;
            text-align: center;
        }
        .box {
            background: white;
            width: 350px;
            margin: 80px auto;
            padding: 20px;
            border-radius: 15px;
        }
        h2 { color: #ffbaba; }
        a {
            display: block;
            margin: 10px;
            padding: 10px;
            background: #ffbaba;
            color: white;
            border-radius: 10px;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Menu</h2>

    <a href="?page=soal1">Soal 1 - Switch</a>
    <a href="?page=soal2">Soal 2 - For Loop</a>
    <a href="?page=soal3">Soal 3 - Foreach</a>
    <a href="?page=soal4">Soal 4 - Ternary</a>

    <a href="index.php">← Kembali</a>

    <hr>

    <?php
    if(isset($_GET['page'])){
        switch($_GET['page']){
            case 'soal1': include "soal1.php"; break;
            case 'soal2': include "soal2.php"; break;
            case 'soal3': include "soal3.php"; break;
            case 'soal4': include "soal4.php"; break;
        }
    }
    ?>
</div>

</body>
</html>