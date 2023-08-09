<?php
    require 'functions.php';

    $no = $_GET['no'];

    $row = mysqli_query($conn, "DELETE FROM tb_object WHERE no=$no");
?>