<?php 
$id_anggota = $_GET['id'];
$query = mysqli_query($db, "SELECT * FROM t_anggota WHERE  id_anggota = '$id_anggota'");
$data = mysqli_fetch_array($query);
if(empty($data['foto'])or($data['foto']=='-')){
    $foto = "admin-no-photo.png";
}else {
    $foto = $data['foto'];
}

?>

<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php?p=beranda">Beranda</a>
        </li>
        <li class="breadcrumb-item">
            <a href="index.php?p=anggota">Table Anggota</a>
        </li>
        <li class="breadcrumb-item active">Edit Anggota</li>
    </ol>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i> Data Anggota 
        </div>
        <div class="card-body">
            <form method="post" action="proses/anggota-edit-proses.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label><br>
                            <img class="mb-2" src="images/<?php echo $foto; ?>" width='75' height='70'>
                            <input class="form-control" type="file" name="foto" id="foto">
                            <input type="hidden" name="foto_awal" value="<?php echo $data['foto']; ?>">
                        </div>
                        <div class="form-group">
                            <label>ID Anggota</label>
                            <input type="text" placeholder="ID Anggota" name="id_anggota" value="<?php echo $data['id_anggota'];?>" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" placeholder="Nama" name="nama" value="<?php echo $data['nama'];?>" class="form-control" required>
                        </div>
                        <label>Jenis Kelamin</label>
                        <?php 
                        if($data['jk']=="Pria"){
                            echo '                                    
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jk" value="Pria" id="jk" checked/>
                                    <label class="form-check-label" for="jk"> Pria </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="jk" value="Wanita" id="jk" />
                                    <label class="form-check-label" for="jk"> Wanita </label>
                                </div>';
                        } else{                                    
                            echo '                                    
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jk" value="Pria" id="jk"/>
                                    <label class="form-check-label" for="jk"> Pria </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="jk" value="Wanita" id="jk" checked/>
                                    <label class="form-check-label" for="jk"> Wanita </label>
                                </div>';
                        }
                        ?>
                        <div class="form-floating mb-3">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" placeholder="Alamat" name="alamat" id="alamat" style="height: 100px"><?php echo $data['alamat']; ?></textarea>
                        </div>									
                            <div class="form-group">
                            <input type="submit" name="simpan" value="Simpan" class="btn btn-sm btn-info">
                        </div>
                    </div>
                </div>
            </form>    
        </div>
    </div>
</div>
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
