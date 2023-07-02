<?php

if (isset($_POST['tambah'])) {
  if ($petugas->tambahDataPetugas($_POST) > 0) {
    echo
    "<script>
      alert('Data BERHASIL Ditambah!');
      window.location.href='?p=data-petugas'
    </script>";
  } else {
    echo
    "<script>
      alert('Data GAGAL Ditambah!');
      window.location.href='?p=data-petugas'
    </script>";
  }
}

?>


<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Form Tambah Data Petugas</h1>
  <hr>

  <div class="card mb-4 py-3 border-left-primary">
    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label for="id_petugas">
            ID Petugas :
          </label>
          <input class="form-control" type="text" name="id_petugas" id="id_petugas" required autocomplete="off">
        </div>

        <div class="form-group">
          <label for="nama_petugas">
            Nama Petugas :
          </label>
          <input class="form-control" type="text" name="nama_petugas" id="nama_petugas" required autocomplete="off">
        </div>

        <div class="form-group">
          <label for="start">
            Tanggal Lahir :
          </label>
          <input type="date" id="start" name="tgl_lahir" value="<?php echo date("Y-m-d"); ?>" max="2024-12-31" class="form-control">
        </div>

        <div class="form-group">
          <label for="alamat">
            Alamat :
          </label>
          <input class="form-control" type="text" name="alamat" id="alamat" required autocomplete="off">
        </div>

        <div class="form-group">
          <label for="jenis_kelamin">
            Jenis Kelamin :
          </label>
          <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
            <option value="_">===Pilih===</option>
            <option value="laki-laki">Laki-Laki</option>
            <option value="perempuan">Perempuan</option>
          </select>
        </div>
        <div class="form-group">
          <label for="role_id">
            Role Id :
          </label>
          <select name="role_id" id="role_id" class="form-control">
            <?php $role = $petugas->getAllJabatan(); ?>
            <?php foreach ($role as $rl) : ?>
              <option value="<?= $rl['id'] ?>"><?= $rl['role'] ?></option>
            <?php endforeach ?>
          </select>

        </div>
        <div class="form-group">
          <label for="username">
            Username :
          </label>
          <input class="form-control" type="username" name="username" id="username" required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="password">
            Password :
          </label>
          <input class="form-control" type="password" name="password" id="password" required autocomplete="off">
        </div>

        <hr>
        <button class="btn btn-primary" type="submit" name="tambah">Tambah Data!</button>
      </form>
    </div>
  </div>
</div>