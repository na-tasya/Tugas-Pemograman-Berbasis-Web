<h3>Soal 1 - Jenis Kendaraan</h3>

<form method="post">
    Jumlah roda: <input type="number" name="roda">
    <button type="submit">Cek</button>
</form>

<?php
if(isset($_POST['roda'])){
    $r = $_POST['roda'];

    switch($r){
        case 2: echo "Motor"; break;
        case 3: echo "Bajaj"; break;
        case 4: echo "Mobil"; break;
        default: echo "Tidak diketahui";
    }
}
?>