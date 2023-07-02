<!-- Begin Page Content -->
<?php
$siswa = count($petugas->getAllSiswa());
$petugas = count($petugas->getAllPetugas());
?>

<div class="container-fluid">
  <!-- Page Heading -->
  <div class="mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard Petugas</h1>
    <p>Haii, Selamat Datang </p>
  </div>


  <!-- Content Row -->
  <div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <a href="?p=data-siswa">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Siswa</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $siswa ?> Orang</div>
              </a>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <a href="?p=data-petugas">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Data Petugas</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $petugas ?> Petugas</div>
              </a>
            </div>
            <div class="col-auto">
              <i class="fas fa-user fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <a href="?p=data-gaji">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Gaji</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"> More info</div>
              </a>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <a href="?p=data-jabatan">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Jabatan</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">More info</div>
              </a>
            </div>
            <div class="col-auto">
              <i class="fas fa-bars fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>