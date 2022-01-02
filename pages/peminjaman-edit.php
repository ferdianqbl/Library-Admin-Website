<?php 
    $id = $_GET['id'];
    $sql1 = "SELECT * FROM t_anggota";
    $sql2 = "SELECT * FROM t_buku";
    $sql = "SELECT * FROM (t_transaksi LEFT JOIN t_buku ON t_transaksi.id_buku = t_buku.id_buku) LEFT JOIN t_anggota ON t_anggota.id_anggota = t_transaksi.id_anggota WHERE id_transaksi = '$id'";
    $result1 = $db->query($sql1);
    $result2 = $db->query($sql2);
    $result = $db->query($sql);
    while ($data = mysqli_fetch_array($result)){ 
?>

<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php?p=beranda">Beranda</a>
        </li>
        <li class="breadcrumb-item">
            <a href="index.php?p=transaksi-peminjaman">Tabel Transaksi Peminjaman</a>
        </li>
        <li class="breadcrumb-item active">Edit Transaksi Peminjaman</li>
    </ol>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i> Data Peminjaman
        </div>
        <div class="card-body">
            <form method="post" action="proses/peminjaman-edit-proses.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>ID Transaksi</label>
                            <input type="text" placeholder="<?= $data['id_transaksi'];?>" name="id_transaksi" value="<?= $data['id_transaksi'];?>" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Peminjaman</label>
                            <input type="text" placeholder="<?= $data['tgl_pinjam'];?>" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label>Anggota</label>
                            <select name="anggota" class="form-control">
                                <option>Pilih Data Anggota</option>
                        <?php 
                            while ($anggota = mysqli_fetch_array($result1)){ 
                        ?>
                                <option value="<?= $anggota['id_anggota']; ?>" <?php if($anggota['id_anggota']==$data['id_anggota']){ echo 'selected';} ?>><?= $anggota['nama']; ?></option>
                        <?php } ?>
                            </select>	
                        
                        </div>
                        <div class="form-group">
                            <label>Buku</label>
                            <select name="buku" class="form-control">
                                <option>Pilih Data Anggota</option>
                        <?php 
                            while ($buku = mysqli_fetch_array($result2)){ 
                        ?>
                                <option value="<?= $buku['id_buku']; ?>"<?php if($buku['id_buku']==$data['id_buku']){ echo 'selected';} ?>><?= $buku['nama_buku']; ?></option>
                        <?php } ?> 
                            </select>                                                     
                        </div>	
                        <?php } ?>
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