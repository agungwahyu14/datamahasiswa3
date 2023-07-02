<?php
if (isset($_POST['tambah'])) {
  if ($petugas->tambahDataSiswa($_POST) > 0) {
    echo
    "<script>
      alert('Data BERHASIL Ditambah!');
      window.location.href='?p=data-siswa'
    </script>";
  } else {
    echo
    "<script>
      alert('Data GAGAL Ditambah!');
      window.location.href='?p=data-siswa'
    </script>";
  }
}

?>

<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Form Tambah Data Siswa</h1>
  <hr>

  <div class="card mb-4 py-3 border-left-primary">
    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label for="id">Id Siswa:</label>
          <input class="form-control" type="text" name="id_siswa" id="id_siswa" required autocomplete="off">
        </div>

        <div class="form-group">
          <label for="nama">Nama Siswa :</label>
          <input class="form-control" type="text" name="nama_siswa" id="nama_siswa" required autocomplete="off">

        </div>

        <div class="form-group">
          <label for="start">
            Tanggal Lahir :
          </label>
          <input type="date" id="start" name="tgl_lahir" value="<?php echo date("Y-m-d"); ?>" max="2024-12-31" class="form-control">
        </div>

        <div class="form-group">
          <label for="alamat">Alamat : </label>
          <input class="form-control" type="text" name="alamat" id="alamat" required>
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


        <hr>

        <button class="btn btn-primary" type="submit" name="tambah">Tambah Data!</button>
      </form>
    </div>
  </div>
</div>