<h3>Soal 2 - Bilangan Genap</h3>

<form method="post">
    Angka awal: <input type="number" name="awal"><br><br>
    Angka akhir: <input type="number" name="akhir"><br><br>
    <button type="submit">Tampilkan</button>
</form>

<?php
if(isset($_POST['awal']) && isset($_POST['akhir'])){
    $awal = $_POST['awal'];
    $akhir = $_POST['akhir'];

    for($i = $awal; $i <= $akhir; $i++){
        if($i % 2 == 0){
            echo $i . " ";
        }
    }
}
?>