<!-- Menyimpan configurasi database -->
<?php

$server = "localhost";
$user = "myroot";
$password = "charmander1";
$nama_database = "pendaftaran_siswa";

$db = mysqli_connect($server, $user, $password, $nama_database);

if(!$db){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
else{
    // echo "Berhasil terhusbung ke database";
}
?>