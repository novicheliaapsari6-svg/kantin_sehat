<?php
$Koneksi = mysqli_connect("localhost", "root", "", "kantin_sehat");

if(!$Koneksi){
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
