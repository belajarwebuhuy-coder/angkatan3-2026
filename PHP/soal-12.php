<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Nilai 1</label>
        <input type="number" name="nilai1" step="any">
        <label for="">Nilai 2</label>
        <input type="number" name="nilai2" step="any">
        <label for="">Nilai 3</label>
        <input type="number" name="nilai3" step="any">
        <button type="Submit" name="kirim">Kirim</button>
    </form>

    <?php
    
    if (isset($_POST["kirim"])) {
        $n1 = (float)($_POST["nilai1"]);
        $n2 = (float)($_POST["nilai2"]);
        $n3 = (float)($_POST["nilai3"]);

        if ($n1 >= $n2 && $n1 >= $n3) {
            echo "Nilai Terbesar adalah = <b>$n1</b>";
        } elseif ($n2 >= $n1 && $n2 >= $n3) {
            echo "Nilai Terbesar adalah = <b>$n2</b>";
        } elseif ($n3 >= $n1 && $n3 >= $n2) {
            echo "Nilai Terbesar adalah = <b>$n3</b>";    
        }
    }

    ?>
</body>

</html>