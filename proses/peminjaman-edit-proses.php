<?php

include '../Koneksi.php';

$id_transaksi = $_POST['id_transaksi'];
$anggota = $_POST['anggota'];
$buku    = $_POST['buku'];

if (isset($_POST['simpan'])) {
    extract($_POST);

    $query    = mysqli_query($db, "UPDATE t_transaksi SET id_anggota='$anggota', id_buku='$buku' WHERE id_transaksi='$id_transaksi'");

    if ($query) {
        echo "<script>alert('Data Berhasil Diedit');window.location.href='../index.php?p=transaksi-peminjaman';</script>";
    } else {
        echo "<script type='text/javascript'>
        onload =function(){
            alert('Gagal Edit Data');
        }
        </script>";
    }
}
