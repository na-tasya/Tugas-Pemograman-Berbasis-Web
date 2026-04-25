<h3>Soal 3 - Daftar Hewan</h3>

<form method="post">
    Hewan 1: <input type="text" name="h1"><br><br>
    Hewan 2: <input type="text" name="h2"><br><br>
    Hewan 3: <input type="text" name="h3"><br><br>
    Hewan 4: <input type="text" name="h4"><br><br>
    Hewan 5: <input type="text" name="h5"><br><br>

    <button type="submit">Tampilkan</button>
</form>

<?php
if(isset($_POST['h1'])){
    $hewan = [
        $_POST['h1'],
        $_POST['h2'],
        $_POST['h3'],
        $_POST['h4'],
        $_POST['h5']
    ];

    foreach($hewan as $h){
        echo $h . "<br>";
    }
}
?>