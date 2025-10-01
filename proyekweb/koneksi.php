<?php
$host = 'localhost';
$user = 'root';      // default XAMPP
$pass = '';          // default kosong
$db   = 'db_pertemuan3';

$koneksi = new mysqli($host, $user, $pass, $db);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>