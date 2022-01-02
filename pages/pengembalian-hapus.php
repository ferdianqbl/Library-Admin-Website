<?php
include "Koneksi.php";
  $id = $_GET['id'];
  
  $query = mysqli_query($db, "DELETE FROM t_transaksi WHERE id_transaksi ='$id'");
  
  if($query){
	      echo "<script>alert('Data Berhasil Di Hapus');window.location.href='index.php?p=transaksi-pengembalian';</script>";
  }