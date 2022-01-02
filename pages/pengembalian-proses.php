<?php

include'Koneksi.php';

$id = $_GET['id'];
$tgl = date("Y-m-d");

$query	= mysqli_query ($db, "UPDATE t_transaksi SET tgl_kembali='$tgl' WHERE id_transaksi='$id'");

if($query){
    echo "<script>alert('Proses Pengembalian Buku Berhasil');window.location.href='index.php?p=transaksi-pengembalian';</script>";
}else{
	echo "<script type='text/javascript'>
        onload =function(){
            alert('Proses Data Gagal');
        }
        </script>";
}