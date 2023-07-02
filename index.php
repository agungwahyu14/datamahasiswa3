<?php
require_once 'login.php';

// PROSES MENGECEK LOGIN
$login = new Login();
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $petugas = $login->getPetugas($username, $password);

  if ($petugas[0]['username'] == $username) {

    if ($petugas[0]['password'] == $password) {

      header('location:admin/index.php');
      exit();
    }
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Halaman Login</title>


  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet" />
</head>

<body class="bg-gradient-primary">
  <div class="container mt-5">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row justify-content-center">

              <div class="col-lg-10">
                <div class="p-5">
                  <div class="text-center mb-5">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
                    <h1 class="h3 text-gray-600 mb-4">Silahkan Login</h1>
                  </div>



                  <form class="user" method="POST">
                    <div class="form-group">
                      <input type="text" name="username" id="username" autocomplete="off" autofocus required class="form-control form-control-user" placeholder="Username..." />
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" id="password" class="form-control form-control-user" required placeholder="Password" />
                    </div>
                    <button type="submit" name="login" class="btn btn-primary btn-user btn-block">LOGIN <i class="fas fa-lock"></i></button>
                    <hr />
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.min.js"></script>
</body>

</html>