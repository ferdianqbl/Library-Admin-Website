<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php?p=beranda">Beranda</a>
        </li>
        <li class="breadcrumb-item">
            <a href="index.php?p=buku">Table buku</a>
        </li>
        <li class="breadcrumb-item active">Tambah buku</li>
    </ol>
    <div class="card mb-3">
        <div class="card-header">
        <i class="fas fa-table"></i> Data buku
        </div>
        <div class="card-body">
            <form method="post" action="proses/buku-input-proses.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>ID buku</label>
                            <input type="text" placeholder="ID buku" name="id_buku" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Buku</label>
                            <input type="text" placeholder="Nama Buku" name="nama_buku" class="form-control" required>
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