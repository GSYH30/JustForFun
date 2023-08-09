<?php
    require 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud | GSYH</title>
    <link rel="icon" href="../img/sharingan.png">
    <link rel="stylesheet" href="../css/crud.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="box-content">
            <div class="isi-content">
                <h1>Add</h1>
                <form action="" method="post">
                    <div class="inputan">
                        <label for="">Id Object</label>
                        <input required type="number" name="id_object" placeholder="Lorem Ipsum">
                    </div>
                    <div class="inputan">
                        <label for="">Nama</label>
                        <input type="text" name="nama" required placeholder="qwerty123">
                    </div>
                    <div class="inputan">
                        <label for="">Harga</label>
                        <input type="text" name="harga" required placeholder="qwerty123">
                    </div>
                    <div class="inputan-gambar">
                        <label for="">Gambar</label>
                        <input type="file" name="gambar" required>
                    </div>
                
                <div class="button">
                    <button type="submit" name="create">Create</button>
                </div>
                </form>
                <div class="buat-akun">
                    <p>Data dimasukan ke ReDyUp | <a href="index.html">Back</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>