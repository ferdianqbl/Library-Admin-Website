<?php 
    include 'Koneksi.php';
    $sql = "SELECT * FROM t_anggota ORDER BY id_anggota";
    $sqli = "SELECT * FROM t_buku ORDER BY id_buku";
    $result = $db->query($sql);
    $result1 = $db->query($sqli);

    $selectidmax =mysqli_query($db, "SELECT max(id_transaksi) as maxid FROM t_transaksi WHERE id_transaksi LIKE 'TR%'");
    $hslidmax=mysqli_fetch_array($selectidmax);
    $idmax=$hslidmax['maxid'];
    $nourut = (int) substr($idmax, 2,3);
    $nourut++;
    $IDbaru = "TR" . sprintf("%03s", $nourut);
?>
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php?p=beranda">Beranda</a>
        </li>
        <li class="breadcrumb-item">
            <a href="index.php?p=transaksi-peminjaman">Data Transaksi Peminjaman</a>
        </li>
        <li class="breadcrumb-item active">Tambah Data</li>
    </ol>
    <div class="card mb-3">
        <div class="card-header">
        <i class="fas fa-table"></i> Input Data Peminjaman
        </div>
        <div class="card-body">
            <form method="post" action="proses/peminjaman-input-proses.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="id">ID Transaksi</label>
                            <input type="text" name="id" class="form-control" value="<?= $IDbaru; ?>" readonly required="required">
                        </div>
                        <div class="form-group">
                            <label>Anggota</label>
                            <select name="anggota" class="form-control" required>
                                <option value="" selected>Pilih Data Anggota</option>
                        <?php 
                            while ($list = mysqli_fetch_array($result)){ 
                        ?>
                                <option value="<?= $list['id_anggota']; ?>"><?= $list['nama']; ?></option>
                        <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Buku</label>
                            <select name="buku" class="form-control" required>
                                <option  value="" selected>Pilih Data Buku</option>
                        <?php 
                            while ($list1 = mysqli_fetch_array($result1)){ 
                        ?>
                                <option value="<?= $list1['id_buku']; ?>"><?= $list1['nama_buku']; ?></option>
                        <?php } ?>
                            </select>
                        </div>
                    
                        <div class="form-floating mb-3">
                            <label for="tgl">Tanggal Pinjam</label>
                            <input type="text" name="tgl" class="form-control" disabled="disabled" placeholder="<?= date("d-m-Y"); ?>">
                        </div>
                            <input type="hidden" name="status" value="Tidak Meminjam">
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
