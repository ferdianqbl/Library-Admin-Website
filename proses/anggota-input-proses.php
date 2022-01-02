<?php

include '../Koneksi.php';


if (isset($_POST['simpan'])) {
    extract($_POST);
    $nama_file = $_FILES['foto']['name'];
    if (!empty($nama_file)) {
        $lokasi_file = $_FILES['foto']['tmp_name'];
        $tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
        $file_foto = $id_anggota . "." . $tipe_file;

        $folder = "../images/$file_foto";
        move_uploaded_file($lokasi_file, "$folder");
    } else {
        $file_foto = "-";
    }

    $id_anggota = $_POST['id_anggota'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $status = $_POST['status'];

    $query    = mysqli_query($db, "INSERT INTO t_anggota (id_anggota, nama, jk, alamat, status, foto) value ('$id_anggota','$nama','$jk','$alamat','$status', '$file_foto')");

    if ($query) {
        echo "<script>alert('Berhasil Menambahkan Anggota');window.location.href='../index.php?p=anggota';</script>";
    } else {
        echo "<script type='text/javascript'>
	onload =function(){
		alert('Gagal Menambah Anggota');
	}
</script>";
    }
}
