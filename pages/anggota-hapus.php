<?php
include "Koneksi.php";
  $id_anggota = $_GET['id'];
  
  $query = mysqli_query($db, "DELETE FROM t_anggota WHERE id_anggota ='$id_anggota'");
  
  if($query){
	      echo "<script>alert('Sukses Di Hapus');window.location.href='index.php?p=anggota';</script>";
  }