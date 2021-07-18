<?php
    include 'koneksi.php';
    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM pembeli WHERE id_pembeli= '{$id}'");

    header('location: index.php');
?> 