<h3>Soal 4 - Genap / Ganjil</h3>

<form method="post">
    Masukkan angka: <input type="number" name="angka">
    <button type="submit">Cek</button>
</form>

<?php
if(isset($_POST['angka'])){
    $a = $_POST['angka'];

    $hasil = ($a % 2 == 0) ? "Genap" : "Ganjil";

    echo "Hasil: $hasil";
}
?>