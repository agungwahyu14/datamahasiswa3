<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-2 text-gray-800">Tabel Data Gaji</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <hr>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">

    <div class="card-header py-3">
      <a href="?p=tmb-gaji" style="text-decoration:none;" class="btn btn-primary">Tambah Data Gaji [+]</a>
    </div>
    <div class="card-body">

      <div class="table-responsive">

        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="5%">No.</th>
              <th>ID Petugas</th>
              <th>Id Jabatan</th>
              <th>Gaji Bersih</th>
              <th>Keterangan</th>
              <th width="20%">Aksi</th>
            </tr>
          </thead>
          <?php
          $data = $petugas->getAllGaji();

          if (empty($data)) : ?>
            <tr>
              <td colspan="7" align="center">Data Petugas tidak ditemukan</td>
            </tr>
          <?php endif; ?>

          <?php $i = 1; ?>
          <?php foreach ($data as $gaji) : ?>
            <tr>
              <td><?= $i ?></td>
              <td><?= $gaji['id_guru']; ?></td>
              <td><?= $gaji['id_role']; ?></td>
              <td><?= $gaji['gaji_bersih']; ?></td>
              <td><?= $gaji['keterangan']; ?></td>
              <td>
                <a href="?p=hps-gaji&id=<?= $gaji['id']; ?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?');" class="btn btn-danger">Hapus</a> |
                <a href="?p=ubh-gaji&id=<?= $gaji['id']; ?>" class="btn btn-warning text-light">Ubah</a>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>

</div>