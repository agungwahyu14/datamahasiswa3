<?php
if (isset($_POST['tambah'])) {
  if ($petugas->tambahDataJabatan($_POST) > 0) {
    echo
    "<script>
      alert('Data BERHASIL Ditambah!');
      window.location.href='?p=data-jabatan'
    </script>";
  } else {
    echo
    "<script>
      alert('Data GAGAL Ditambah!');
      window.location.href='?p=data-jabatan'
    </script>";
  }
}
?>


<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Form Tambah Data Jabatan</h1>
  <hr>

  <div class="card mb-4 py-3 border-left-primary">
    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label for="id_jabatan">
            ID :
          </label>
          <input class="form-control" type="text" name="id_jabatan" id="id_jabatan" required autocomplete="off">
        </div>

        <div class="form-group">
          <label for="role">
            Role :
          </label>
          <input class="form-control" type="text" name="role" id="role" required autocomplete="off">
        </div>

        <div class="form-group">
          <label for="gaji_pokok">
            Gaji Pokok :
          </label>
          <input class="form-control" type="text" name="gaji_pokok" id="gaji_pokok" required>
        </div>

        <div class="form-group">
          <label for="tunjangan">
            Tunjangan :
          </label>
          <input class="form-control" type="text" name="tunjangan" id="tunjangan" required autocomplete="off">
        </div>


        <hr>
        <button class="btn btn-primary" type="submit" name="tambah">Tambah Data!</button>
      </form>
    </div>
  </div>
</div>