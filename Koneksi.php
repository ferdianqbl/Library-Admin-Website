<?php

$server = 'localhost';
$user = 'root';
// $password = '423525';
$password = '';
$nama_database = 'db_perpus';

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db) {
    die('Gagal terhubung dengan database: ' . mysqli_connect_error());
}
