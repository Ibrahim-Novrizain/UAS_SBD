<?php
    include 'koneksi.php';
    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM motor WHERE id_motor= '{$id}'");

    header('location: index.php');
?> 