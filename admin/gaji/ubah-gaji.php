<?php
$id_gaji = $_GET["id"];

if (isset($_POST['ubah'])) {
  if ($petugas->ubahDataGaji($_POST) > 0) {
    echo
    "<script>
      alert('Data BERHASIL Diubah!');
      window.location.href='?p=data-gaji'
    </script>";
  } else {
    echo
    "<script>
      alert('Data GAGAL Diubah!');
      window.location.href='?p=data-gaji'
    </script>";
  }
}

$data = $petugas->getGajiById($id_gaji);
?>

<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Form Ubah Data Petugas</h1>
  <hr>

  <div class="card mb-4 py-3 border-left-warning text-dark">
    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <input class="form-control" type="text" readonly name="id_gaji" id="id_gaji" required autocomplete="off" hidden value="<?= $data['id']; ?>">
        </div>

        <div class="form-group">
          <label for="id_petugas">
            ID Petugas :
          </label>
          <input class="form-control" type="text" readonly name="id_petugas" id="id_petugas" required autocomplete="off" value="<?= $data['id_guru']; ?>">
        </div>

        <div class="form-group">
          <label for="role_id">
            Role Id :
          </label>
          <input class="form-control" type="role_id" name="role_id" id="role_id" required autocomplete="off" value="<?= $data['id_role']; ?>">
        </div>

        <div class="form-group">
          <label for="gaji_bersih">
            Gaji Bersih :
          </label>
          <input class="form-control" type="text" name="gaji_bersih" id="gaji_bersih" required value="<?= $data['gaji_bersih']; ?>">
        </div>

        <div class="form-group">
          <label for="keterangan">
            Keterangan :
          </label>
          <input class="form-control" type="text" name="keterangan" id="keterangan" required autocomplete="off" value="<?= $data['keterangan']; ?>">
        </div>

        <hr>
        <button class="btn btn-warning text-dark" type="submit" name="ubah">Ubah Data!</button>
      </form>
    </div>
  </div>
</div>