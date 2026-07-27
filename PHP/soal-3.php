<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    body {
        margin: 5rem 2rem;
        /* text-align: center; */
        width: auto;
    }

    label {
        padding-right: 10px;
    }

    input {
        height: 25px;
    }

    div {
        padding: 10px;
    }
    </style>
</head>

<body>
    <form action="" method="post">
        <div class="form">
            <label for="">Nama Depan</label>
            <input type="text" name="namaDepan" placeholder="Masukan Nama Depan">
        </div>
        <div class="form">
            <label for="">Nama Tengah</label>
            <input type="text" name="namaTengah" placeholder="Masukan Nama Tengah">
        </div>
        <div class="form">
            <label for="">Nama Belakang</label>
            <input type="text" name="namaBelakang" placeholder="Masukan Nama Belakang">
        </div>
        <button type="submit" name="kirim">Kirim</button> <br>
    </form>

    <?php
        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['kirim'])){
            $namaDepan = $_POST['namaDepan'];
            $namaTengah = $_POST['namaTengah'];
            $namaBelakang = $_POST['namaBelakang'];
    
            echo $namaDepan." ".$namaTengah." ".$namaBelakang;
        }
    ?>
</body>

</html>