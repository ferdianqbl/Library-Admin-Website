<?php

include '../Koneksi.php';


if (isset($_POST['simpan'])) {
	extract($_POST);

	$id_buku = $_POST['id_buku'];
	$nama_buku = $_POST['nama_buku'];

	$query	= mysqli_query($db, "INSERT INTO t_buku (id_buku, nama_buku) value ('$id_buku','$nama_buku')");

	if ($query) {
		echo "<script>alert('Berhasil Menambahkan buku');window.location.href='../index.php?p=buku';</script>";
	} else {
		echo "<script type='text/javascript'>
	onload =function(){
		alert('Gagal Menambah buku');
	}
</script>";
	}
}
