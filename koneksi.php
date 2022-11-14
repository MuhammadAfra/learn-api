<?php
    $hostname = "localhost";
    $database = "belajar-api";
    $username = "root";
    $password = "";

    $connect = mysqli_connect($hostname, $username, $password, $database);

    if(!$connect) {
        die("Koneksi tidak berhasil". mysqli_connect_error());
    }
?>
