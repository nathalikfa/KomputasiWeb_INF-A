<?php
    $host = "localhost";
    $user = "root";
    $password = "dede1006";
    $database = "data_diri";

    $koneksi = new mysqli($host, $user, $password, $database);

    if ($koneksi->connect_error){
        die("Koneksi Gagal: ".$koneksi->connect_error);
    }
?>