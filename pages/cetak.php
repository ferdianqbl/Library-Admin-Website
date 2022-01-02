<?php 
include "../koneksi.php";
if(empty($data['foto'])or($data['foto'] =='-')){
    $foto = "admin-no-photo.png";           
}else {
    $foto = $data['foto'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />

</head>
<body>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Id Anggota</th>
            <th>Foto</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
        </tr>
        </thead>
        <tbody>        
        <?php 
        $query = mysqli_query($db, "SELECT * FROM t_anggota");
        $data = mysqli_fetch_array($query);

        if(mysqli_num_rows($query) >0) {
            $no = 1;
            do{
            if(empty($data['foto'])or($data['foto'] =='-')){
                $foto = "admin-no-photo.png";           
            }else {
                $foto = $data['foto'];
            }
        ?>
        <tr>
            <td><?=$no++;?></td>
            <td><?=$data['nama'];?></td>
            <td><?=$data['id_anggota'];?></td>
            <td align="center"><?php echo "<img src='../images/$foto' width='80' height='75' />";?></td>
            <td><?=$data['jk'];?></td>
            <td><?=$data['alamat'];?></td>
        </tr>
        <?php 
                }while($data = mysqli_fetch_assoc($query));
            }else{
                echo "<tr><td colspan='7'><center>Belum ada data!</center></td></tr>";
            }
        ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</div>
</body>
</html>
