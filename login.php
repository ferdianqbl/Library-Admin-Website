<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Style for Login -->
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="row justify-content-center">

                <div class="col-md-6 d-none d-md-block bg-login-image"></div>

                <div class="col-md-6 p-5">
                    <form method="POST" action="cek_login.php" class="user">
                        <h1 class="text-center mb-5">Admin Perpustakaan</h1>
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-user" id="user" name="user" placeholder="Username">
                        </div>

                        <div class="mb-3">
                            <input type="password" class="form-control form-control-user" id="pass" name="pass" placeholder="Password">
                        </div>

                        <div class="mb-3 text-center d-grid gap-md-2 mx-auto">
                            <button type="submit" class="btn btn-primary btn-user" name="submit">Log In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>