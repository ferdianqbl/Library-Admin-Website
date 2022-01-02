<?php
include "Koneksi.php";
  $id_buku = $_GET['id'];
  
  $query = mysqli_query($db, "DELETE FROM t_buku WHERE id_buku ='$id_buku'");
  
  if($query){
	      echo "<script>alert('Sukses Di Hapus');window.location.href='index.php?p=buku';</script>";
  }