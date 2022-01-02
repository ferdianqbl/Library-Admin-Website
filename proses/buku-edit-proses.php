<?php

include '../Koneksi.php';

$id_buku = $_POST['id_buku'];
$nama_buku = $_POST['nama_buku'];

if (isset($_POST['simpan'])) {

    $query    = mysqli_query($db, "UPDATE t_buku SET nama_buku='$nama_buku' WHERE id_buku='$id_buku'");

    if ($query) {
        echo "<script>alert('Data buku Berhasil Diedit');window.location.href='../index.php?p=buku';</script>";
    } else {
        echo "<script type='text/javascript'>
        onload =function(){
            alert('Gagal Edit buku');
        }
        </script>";
    }
}
