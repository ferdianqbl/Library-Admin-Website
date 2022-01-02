<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php?p=beranda">Beranda</a>
        </li>
        <li class="breadcrumb-item">
            <a href="index.php?p=anggota">Table Anggota</a>
        </li>
        <li class="breadcrumb-item active">Tambah Anggota</li>
    </ol>
    <div class="card mb-3">
        <div class="card-header">
        <i class="fas fa-table"></i> Data Anggota
        </div>
        <div class="card-body">
            <form method="post" action="proses/anggota-input-proses.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input class="form-control" type="file" name="foto" id="foto">
                        </div>
                        <div class="form-group">
                            <label>ID Anggota</label>
                            <input type="text" placeholder="ID Anggota" name="id_anggota" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" placeholder="Nama" name="nama" class="form-control" required>
                        </div>
                        <label>Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" value="Pria" id="jk" />
                            <label class="form-check-label" for="jk"> laki-Laki </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="jk" value="Wanita" id="jk" />
                            <label class="form-check-label" for="jk"> Perempuan </label>
                        </div>
                        <div class="form-floating mb-3">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" placeholder="Alamat" name="alamat" id="alamat" style="height: 100px"></textarea>
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