<?php
$id_jabatan = $_GET["id"];

if (isset($_POST['ubah'])) {
  if ($petugas->ubahDataJabatan($_POST) > 0) {
    echo
    "<script>
      alert('Data BERHASIL Diubah!');
      window.location.href='?p=data-jabatan'
    </script>";
  } else {
    echo
    "<script>
      alert('Data GAGAL Diubah!');
      window.location.href='?p=data-jabatan'
    </script>";
  }
}

$data = $petugas->getJabatanById($id_jabatan);

?>

<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Form Ubah Data Petugas</h1>
  <hr>

  <div class="card mb-4 py-3 border-left-warning text-dark">
    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label for="id_jabatan">
            ID Jabatan :
          </label>
          <input class="form-control" type="text" name="id_jabatan" id="id_jabatan" required autocomplete="off" value="<?= $data['id']; ?>">
        </div>

        <div class="form-group">
          <label for="role">
            Role :
          </label>
          <input class="form-control" type="text" name="role" id="role" required autocomplete="off" value="<?= $data['role']; ?>">
        </div>

        <div class="form-group">
          <label for="gaji_pokok">
            Gaji Pokok :
          </label>
          <input class="form-control" type="text" name="gaji_pokok" id="gaji_pokok" required value="<?= $data['gaji_pokok']; ?>">
        </div>

        <div class="form-group">
          <label for="tunjangan">
            Tunjangan :
          </label>
          <input class="form-control" type="text" name="tunjangan" id="tunjangan" required autocomplete="off" value="<?= $data['tunjangan']; ?>">
        </div>

        <hr>
        <button class="btn btn-warning text-dark" type="submit" name="ubah">Ubah Data!</button>
      </form>
    </div>
  </div>
</div>