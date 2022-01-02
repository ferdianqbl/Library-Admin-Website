<?php

include '../Koneksi.php';


if (isset($_POST['simpan'])) {
	extract($_POST);

	$id = $_POST['id'];
	$anggota = $_POST['anggota'];
	$buku    = $_POST['buku'];
	$tgl     = date("Y-m-d");

	$query	= mysqli_query($db, "INSERT INTO t_transaksi (id_transaksi, id_anggota, id_buku, tgl_pinjam, tgl_kembali) value ('$id','$anggota','$buku','$tgl','')");

	if ($query) {
		echo "<script>alert('Berhasil Menambahkan Data');window.location.href='../index.php?p=transaksi-peminjaman';</script>";
	} else {
		echo "<script type='text/javascript'>
	onload =function(){
		alert('Gagal Menambah Data');history.go(-1);
	}
</script>";
	}
}
