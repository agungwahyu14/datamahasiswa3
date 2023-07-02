<?php
if (isset($_POST['tambah'])) {
  if ($petugas->tambahDataGaji($_POST) > 0) {
    echo
    "<script>
      alert('Data BERHASIL Ditambah!');
      window.location.href='?p=data-gaji'
    </script>";
  } else {
    echo
    "<script>
      alert('Data GAGAL Ditambah!');
      window.location.href='?p=data-gaji'
    </script>";
  }
}
?>


<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Form Tambah Data Gaji</h1>
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
          <label for="role_id">
            Role Id :
          </label>
          <input class="form-control" type="text" name="role_id" id="role_id" required autocomplete="off">
        </div>

        <div class="form-group">
          <label for="gaji_bersih">
            Gaji Bersih :
          </label>
          <input class="form-control" type="text" name="gaji_bersih" id="gaji_bersih" required>
        </div>

        <div class="form-group">
          <label for="keterangan">
            Keterangan :
          </label>
          <input class="form-control" type="text" name="keterangan" id="keterangan" required autocomplete="off">
        </div>


        <hr>
        <button class="btn btn-primary" type="submit" name="tambah">Tambah Data!</button>
      </form>
    </div>
  </div>
</div>