<?php
    $conn = mysqli_connect("localhost", "root", "", "db_object");

    $result = mysqli_query($conn, "SELECT * FROM tb_object");

    // CREATE
    if (isset($_POST["create"])) {
        $id_object = htmlspecialchars( $_POST["id_object"]);
        $nama = htmlspecialchars( $_POST["nama"]);
        $harga = htmlspecialchars( $_POST["harga"]);
        $gambar = htmlspecialchars( $_POST["gambar"]);

        $query = "INSERT INTO tb_object VALUES ('', '$id_object', '$nama',  '$harga', '$gambar')";
        mysqli_query($conn, $query);
    } if (isset($_POST["create"])) {
        header("Location: notif-create.php");
    }

    // DELETE
        
?>