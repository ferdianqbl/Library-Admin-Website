<?php 
include'koneksi.php';
?>

<div class="container-fluid">
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i> Data Transaksi Peminjaman
            <a href="index.php?p=peminjaman-input" class="btn btn-sm btn-info">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Transaksi</th>
                            <th>Nama</th>
                            <th>Judul Buku</th>
                            <th>Tanggal Pinjam</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        <?php 
                            $query = mysqli_query($db,"SELECT * FROM (t_transaksi LEFT JOIN t_buku ON t_transaksi.id_buku = t_buku.id_buku) LEFT JOIN t_anggota ON t_anggota.id_anggota = t_transaksi.id_anggota WHERE tgl_kembali='0000-00-00'");
                            $data = mysqli_fetch_assoc($query);
                            if(mysqli_num_rows($query) >0) {
                                $no = 1;
                                do{
                        ?>
                        <tr>
                            <td><?=$no++;?></td>
                            <td><?=$data['id_transaksi'];?></td>
                            <td><?=$data['nama'];?></td>
                            <td><?=$data['nama_buku'];?></td>
                            <td><?=$data['tgl_pinjam'];?></td>
                            <td align="center">
                            <a href="index.php?p=peminjaman-edit&id=<?=$data['id_transaksi'];?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="index.php?p=peminjaman-hapus&id=<?=$data['id_transaksi'];?>" onclick="return confirm('Yakin Menghapus Data?');" class="btn btn-sm btn-danger">Hapus</a>
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