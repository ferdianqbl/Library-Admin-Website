<?php 
include "../Koneksi.php";

$id_anggota = $_GET['id'];
$query = mysqli_query($db, "SELECT * FROM t_anggota WHERE id_anggota='$id_anggota'");
$data = mysqli_fetch_array($query);
if(empty($data['foto']) or ($data['foto']=='-')){
    $foto = "admin-no-photo.png";
}else{
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

</head>
<body>
      <div class="container">
        <div class="row justify-content-center mt-5">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header bg-transparent mb-3">
                <h1 class="text-center text-primary">Kartu Anggota</h1>
              </div>
              <div class="card-body">
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Foto</label>
                    <div class="col-sm-9">
                    <p class="form-control-plaintext"><img src="../images/<?php echo $foto; ?>" width=80px height=75px></p>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Id Anggota</label>
                    <div class="col-sm-9">
                    <p class="form-control-plaintext"><?php echo $data['id_anggota']; ?></p>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                    <p class="form-control-plaintext"><?php echo $data['nama']; ?></p>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-9">
                    <p class="form-control-plaintext"><?php echo $data['jk']; ?></p>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                    <p class="form-control-plaintext"><?php echo $data['alamat']; ?></p>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
        window.print();
    </script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
