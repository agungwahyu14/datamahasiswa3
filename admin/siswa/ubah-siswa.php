<?php

$id_siswa = $_GET["id"];

if (isset($_POST['ubah'])) {
  if ($petugas->ubahDataSiswa($_POST) > 0) {
    echo
    "<script>
      alert('Data BERHASIL Diubah!');
      window.location.href='?p=data-siswa'
    </script>";
  } else {
    echo
    "<script>
      alert('Data GAGAL Diubah!');
      window.location.href='?p=data-siswa'
    </script>";
  }
}

$data = $petugas->getSiswaById($id_siswa);

?>


<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Form Ubah Data Siswa</h1>
  <hr>

  <div class="card mb-4 py-3 border-left-warning">
    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label for="nisn">Id Siswa:</label>
          <input class="form-control" type="text" name="id_siswa" id="id_siswa" readonly required autocomplete="off" value="<?= $data['id']; ?>">
        </div>

        <div class="form-group">
          <label for="nis">Nama Siswa :</label>
          <input class="form-control" type="text" name="nama_siswa" id="nama_siswa" required autocomplete="off" value="<?= $data['nama']; ?>">

        </div>

        <div class="form-group">
          <label for="start">
            Tanggal Lahir :
          </label>
          <input type="date" id="start" name="tgl_lahir" readmax="2024-12-31" class="form-control" value="<?= $data['tanggal_lahir']; ?>">
        </div>

        <div class="form-group">
          <label for="alamat">Alamat : </label>
          <input class="form-control" type="text" name="alamat" id="alamat" required value="<?= $data['alamat']; ?>">
        </div>

        <div class="form-group">
          <label for="jenis_kelamin">
            Jenis Kelamin :
          </label>
          <input name="jenis_kelamin" id="jenis_kelamin" class="form-control" readonly value="<?= $data['jenis_kelamin']; ?>">
          </input>
        </div>

        <hr>

        <button class="btn btn-warning text-dark" type="submit" name="ubah">Ubah Data!</button>
      </form>
    </div>
  </div>
</div>