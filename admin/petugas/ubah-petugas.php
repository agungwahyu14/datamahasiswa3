<?php

$id_petugas = $_GET["id"];

if (isset($_POST['ubah'])) {
  if ($petugas->ubahDataPetugas($_POST) > 0) {
    echo
    "<script>
      alert('Data BERHASIL Diubah!');
      window.location.href='?p=data-petugas'
    </script>";
  } else {
    echo
    "<script>
      alert('Data GAGAL Diubah!');
      window.location.href='?p=data-petugas'
    </script>";
  }
}

$data = $petugas->getPetugasById($id_petugas);

?>

<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Form Ubah Data Petugas</h1>
  <hr>

  <div class="card mb-4 py-3 border-left-warning text-dark">
    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label for="id">
            ID Petugas :
          </label>
          <input class="form-control" type="text" name="id_petugas" id="id_petugas" readonly required autocomplete="off" value="<?= $data['id']; ?>">
        </div>

        <div class="form-group">
          <label for="nama_petugas">
            Nama Petugas :
          </label>
          <input class="form-control" type="text" name="nama_petugas" id="nama_petugas" required autocomplete="off" value="<?= $data['nama']; ?>">
        </div>

        <div class="form-group">
          <label for="start">
            Tanggal Lahir :
          </label>
          <input type="date" id="start" name="tgl_lahir" readonly readmax="2024-12-31" class="form-control" value="<?= $data['tanggal_lahir']; ?>">
        </div>

        <div class="form-group">
          <label for="alamat">
            Alamat :
          </label>
          <input class="form-control" type="text" name="alamat" id="alamat" required autocomplete="off" value="<?= $data['alamat']; ?>">
        </div>

        <div class="form-group">
          <label for="jenis_kelamin">
            Jenis Kelamin :
          </label>
          <input name="jenis_kelamin" id="jenis_kelamin" class="form-control" readonly value="<?= $data['jk']; ?>">
          </input>
        </div>
        <div class="form-group">
          <label for="role_id">
            Role Id :
          </label>
          <input class="form-control" type="text" name="role_id" id="role_id" required autocomplete="off" value="<?= $data['role_id']; ?>">
        </div>
        <div class="form-group">
          <label for="username">
            Username :
          </label>
          <input class="form-control" type="username" name="username" id="username" required autocomplete="off" value="<?= $data['username']; ?>">
        </div>
        <div class="form-group">
          <label for="password">
            Password :
          </label>
          <input class="form-control" type="text" name="password" id="password" required autocomplete="off" value="<?= $data['password']; ?>">
        </div>

        <hr>
        <button class="btn btn-warning text-light" type="submit" name="ubah">Ubah Data!</button>
      </form>
    </div>
  </div>
</div>