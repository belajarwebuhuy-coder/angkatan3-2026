<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Uang Saya</label>
        <input type="number" step="0.1" name=" uangSaya" placeholder="0">
        <label for="">Uang Dia</label>
        <input type="number" step="0.1" name=" uangDia" placeholder="0">
        <button type="submit" name="kirim">Kirim</button>
    </form>

    <?php
        if (isset($_POST["kirim"])) {
            $uSaya =(float)$_POST["uangSaya"];
            $uDia =(float)$_POST["uangDia"];
            $total = $uSaya + $uDia;

            echo "
            <pre>
            Uang Sendiri: $uSaya
            Uang Dia    : $uDia
            Total       : $total
            ";
        }
    ?>
</body>

</html>