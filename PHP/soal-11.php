<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Masukan Nilai</label>
        <input type="number" value="" step="any" name="nilai">
        <button type="submit" name="kirim">Kirim</button>
    </form>

    <?php

    if (isset($_POST["kirim"])){
        $nilai= (int)$_POST['nilai'];
        if ($nilai % 2 === 0) {
            echo "<br>Genap";
        } else {
            echo "<br>Ganjil";
        }
    }

    ?>
</body>

</html>