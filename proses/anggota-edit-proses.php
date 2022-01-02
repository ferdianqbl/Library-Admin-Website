<?php

include '../Koneksi.php';

$id_anggota = $_POST['id_anggota'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];

if (isset($_POST['simpan'])) {
    extract($_POST);
    $nama_file = $_FILES['foto']['name'];
    if (!empty($nama_file)) {
        $lokasi_file = $_FILES['foto']['tmp_name'];
        $tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
        $file_foto = $id_anggota . "." . $tipe_file;
        @unlink("$folder");
        $folder = "../images/$file_foto";
        move_uploaded_file($lokasi_file, "$folder");
    } else {
        $file_foto = "$foto_awal";
    }

    $query    = mysqli_query($db, "UPDATE t_anggota SET nama='$nama', jk='$jk', alamat='$alamat', foto='$file_foto' WHERE id_anggota='$id_anggota'");

    if ($query) {
        echo "<script>alert('Data Anggota Berhasil Diedit');window.location.href='../index.php?p=anggota';</script>";
    } else {
        echo "<script type='text/javascript'>
        onload =function(){
            alert('Gagal Edit Anggota');
        }
        </script>";
    }
}
