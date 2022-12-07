<?php

$server = "localhost";
$user = "myroot";
$password = "1234567890";
$nama_database = "pendaftaran_siswa";

$db = mysqli_connect($server, $user, $password, $nama_database);

if(!$db){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>