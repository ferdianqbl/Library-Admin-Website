<?php 
include'Koneksi.php';
?>

<div class="container-fluid">
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i> Laporan Transaksi
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id Transaksi</th>
                            <th>Nama Anggota</th>
                            <th>Nama Buku</th>
                            <th>Alamat</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal kembali</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php 
                        $query = mysqli_query($db, "SELECT * FROM t_transaksi 
                        JOIN t_anggota ON t_anggota.id_anggota = t_transaksi.id_anggota
                        JOIN t_buku ON t_buku.id_buku = t_transaksi.id_buku");
                        $data = mysqli_fetch_array($query);


                        if(mysqli_num_rows($query) >0) {
                            $no = 1;
                            do{  
                                if(empty($data['tgl_kembali'])or($data['tgl_kembali'] =='0000-00-00')){
                                    $kmbl = "Belum Dikembalikan";           
                                }else {
                                    $kmbl = $data['tgl_kembali'];
                                }       
                    ?>
                        <tr>
                            <td><?=$no++;?></td>
                            <td><?=$data['id_transaksi'];?></td>
                            <td><?=$data['nama'];?></td>
                            <td><?=$data['nama_buku']; ?></td>
                            <td><?=$data['alamat'];?></td>
                            <td><?=$data['tgl_pinjam'];?></td>
                            <td><?php echo $kmbl; ?></td>
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
