<?php

if (empty($_GET)) {
  include 'home.php';
}

if (isset($_GET["p"])) {
  if ($_GET["p"] == "home") {
    require 'home.php';
  } elseif ($_GET["p"] == "data-siswa") {
    require 'siswa/data-siswa.php';
  } elseif ($_GET["p"] == "data-petugas") {
    require 'petugas/data-petugas.php';
  } elseif ($_GET["p"] == "data-gaji") {
    require 'gaji/data-gaji.php';
  } elseif ($_GET["p"] == "data-jabatan") {
    require 'jabatan/data-jabatan.php';
  } elseif ($_GET["p"] == "tmb-siswa") {
    require 'siswa/tambah-siswa.php';
  } elseif ($_GET["p"] == "tmb-petugas") {
    require 'petugas/tambah-petugas.php';
  } elseif ($_GET["p"] == "tmb-gaji") {
    require 'gaji/tambah-gaji.php';
  } elseif ($_GET["p"] == "tmb-jabatan") {
    require 'jabatan/tambah-jabatan.php';
  } elseif ($_GET["p"] == "ubh-siswa") {
    require 'siswa/ubah-siswa.php';
  } elseif ($_GET["p"] == "ubh-petugas") {
    require 'petugas/ubah-petugas.php';
  } elseif ($_GET["p"] == "ubh-gaji") {
    require 'gaji/ubah-gaji.php';
  } elseif ($_GET["p"] == "ubh-jabatan") {
    require 'jabatan/ubah-jabatan.php';
  } elseif ($_GET["p"] == "hps-siswa") {
    if ($petugas->hapusSiswa($_GET["id"]) > 0) {
      echo "
      <script>
        alert('Data BERHASIL Dihapus');
        window.location.href='?p=data-siswa';
      </script>";
    } else {
      echo "
      <script>
        alert('Data GAGAL Dihapus');
        window.location.href='?p=data-siswa';
      </script>";
    }
  } elseif ($_GET["p"] == "hps-petugas") {
    if ($petugas->hapusPetugas($_GET["id"]) > 0) {
      echo "
      <script>
        alert('Data BERHASIL Dihapus');
        window.location.href='?p=data-petugas';
      </script>";
    } else {
      echo "
      <script>
        alert('Data GAGAL Dihapus');
        window.location.href='?p=data-petugas';
      </script>";
    }
  } elseif ($_GET["p"] == "hps-gaji") {
    if ($petugas->hapusGaji($_GET["id"]) > 0) {
      echo "
      <script>
        alert('Data BERHASIL Dihapus');
        window.location.href='?p=data-gaji';
      </script>";
    } else {
      echo "
      <script>
        alert('Data GAGAL Dihapus');
        window.location.href='?p=data-gaji';
      </script>";
    }
  } elseif ($_GET["p"] == "hps-jabatan") {
    if ($petugas->hapusJabatan($_GET["id"]) > 0) {
      echo "
      <script>
        alert('Data BERHASIL Dihapus');
        window.location.href='?p=data-jabatan';
      </script>";
    } else {
      echo "
      <script>
        alert('Data GAGAL Dihapus');
        window.location.href='?p=data-jabatan';
      </script>";
    }
  } elseif ($_GET["p"] == "hps-pembayaran") {
    if ($admin->hapusPembayaran($_GET["id_pembayaran"]) > 0) {
      echo "
      <script>
        alert('Data BERHASIL Dihapus');
        window.location.href='?p=history';
      </script>";
    } else {
      echo "
      <script>
        alert('Data GAGAL Dihapus');
        window.location.href='?p=history';
      </script>";
    }
  } elseif ($_GET["p"] == "logout") {
    session_destroy();
    echo "<script>window.location.href='../';</script>";
  }
}
