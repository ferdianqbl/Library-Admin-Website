<?php 
include'Koneksi.php';
?>

<div class="container-fluid">
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i> Data Buku
            <a href="index.php?p=buku-input" class="btn btn-sm btn-info">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Buku</th>
                            <th>Id Buku</th>
                            <th style="text-align: center;">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php  
                        $query = mysqli_query($db, "SELECT * FROM t_buku");
                        $data = mysqli_fetch_array($query);

                        if(mysqli_num_rows($query) >0) {
                            $no = 1;
                            do{

                    ?>
                        <tr>
                            <td><?=$no++;?></td>
                            <td><?=$data['nama_buku'];?></td>
                            <td><?=$data['id_buku'];?></td>
                            <td align="center">
                                <a href="index.php?p=buku-edit&id=<?=$data['id_buku'];?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="index.php?p=buku-hapus&id=<?=$data['id_buku'];?>" onclick="return confirm('Yakin Menghapus buku?');" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php 
                            }while($data = mysqli_fetch_assoc($query));
                        }else{
                            echo "<tr><td colspan='7'><center>Belum ada data!</center></td></tr>";
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
