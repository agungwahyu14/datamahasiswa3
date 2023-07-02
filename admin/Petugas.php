<?php
require '../config/Database.php';

class Petugas extends Database
{

  // === SECTION SISWA ===
  public function getAllSiswa()
  {
    $query = "SELECT * FROM tb_siswa";
    $siswa = $this->query($query);

    return $siswa;
  }

  public function getSiswaById($id_siswa)
  {
    $query = "SELECT * FROM tb_siswa WHERE id = " . $id_siswa;
    $siswa = $this->query($query);

    if (empty($siswa)) {
      return $siswa;
    } else {
      return $siswa[0];
    }
  }

  public function tambahDataSiswa($data)
  {
    $conn = $this->conn;

    $id_siswa = htmlspecialchars($data['id_siswa']);
    $nama_siswa = htmlspecialchars($data['nama_siswa']);
    $tgl_lahir = htmlspecialchars($data['tgl_lahir']);
    $alamat = htmlspecialchars($data['alamat']);
    $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);


    mysqli_query($conn, "INSERT INTO tb_siswa VALUES ('$id_siswa','$nama_siswa',' $tgl_lahir','$alamat','$jenis_kelamin')");

    return mysqli_affected_rows($conn);
  }

  public function ubahDataSiswa($data)
  {
    $conn = $this->conn;

    $id_siswa = htmlspecialchars($data['id_siswa']);
    $nama_siswa = htmlspecialchars($data['nama_siswa']);
    $tgl_lahir = htmlspecialchars($data['tgl_lahir']);
    $alamat = htmlspecialchars($data['alamat']);
    $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);

    mysqli_query($conn, "UPDATE tb_siswa SET
id = '$id_siswa',
nama = '$nama_siswa',
tanggal_lahir = '$tgl_lahir',
alamat = '$alamat',
jenis_kelamin = '$jenis_kelamin'
WHERE id = $id_siswa
");

    return mysqli_affected_rows($conn);
  }

  public function hapusSiswa($id)
  {
    $conn = $this->conn;
    mysqli_query($conn, "DELETE FROM tb_siswa WHERE id = '$id'");

    return mysqli_affected_rows($conn);
  }
  // === END SECTION SISWA ==



  // === SECTION PETUGAS ===
  public function getAllPetugas()
  {
    $query = "SELECT * FROM tb_guru";
    $petugas = $this->query($query);

    return $petugas;
  }

  public function getPetugasById($id_petugas)
  {
    $query = "SELECT * FROM tb_guru WHERE id = " . $id_petugas;
    $petugas = $this->query($query);

    return $petugas[0];
  }

  public function tambahDataPetugas($data)
  {
    $conn = $this->conn;

    $id_petugas = htmlspecialchars($data['id_petugas']);
    $nama_petugas = htmlspecialchars($data['nama_petugas']);
    $tgl_lahir = htmlspecialchars($data['tgl_lahir']);
    $alamat = htmlspecialchars($data['alamat']);
    $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
    $role_id = htmlspecialchars($data['role_id']);
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    $query = "SELECT * FROM tb_guru WHERE username = '$username'";
    $cek = $this->query($query);
    if ($cek) {
      echo
      "<script>
  alert('Username Petugas Sudah Terdaftar!');
  window.location.href = '?p=data-petugas'
</script>";
      exit;
    } else {

      mysqli_query($conn, "INSERT INTO tb_guru VALUES ('$id_petugas','$nama_petugas','$tgl_lahir','$alamat','$jenis_kelamin','$role_id','$username','$password')");

      return mysqli_affected_rows($conn);
    }
  }

  public function ubahDataPetugas($data)
  {
    $conn = $this->conn;

    $id_petugas = htmlspecialchars($data['id_petugas']);
    $nama_petugas = htmlspecialchars($data['nama_petugas']);
    $tgl_lahir = htmlspecialchars($data['tgl_lahir']);
    $alamat = htmlspecialchars($data['alamat']);
    $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
    $role_id = htmlspecialchars($data['role_id']);
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    mysqli_query($conn, "UPDATE tb_guru SET
    id = '$id_petugas',
    nama = '$nama_petugas',
    tanggal_lahir = '$tgl_lahir',
    alamat = '$alamat',
    jk = '$jenis_kelamin',
    role_id = '$role_id',
    username = '$username',
    password = '$password'
    WHERE id = $id_petugas
    ");

    return mysqli_affected_rows($conn);
  }

  public function hapusPetugas($id_petugas)
  {
    $conn = $this->conn;
    mysqli_query($conn, "DELETE FROM tb_guru WHERE id = '$id_petugas'");

    return mysqli_affected_rows($conn);
  }
  // === END SECTION PETUGAS ==



  // === SECTION GAJI ===
  public function getAllGaji()
  {
    $query = "SELECT * FROM tb_gaji";
    $gaji = $this->query($query);

    return $gaji;
  }

  public function getGajiById($id_gaji)
  {
    $query = "SELECT * FROM tb_gaji WHERE id = " . $id_gaji;
    $gaji = $this->query($query);

    return $gaji[0];
  }

  public function tambahDataGaji($data)
  {
    $conn = $this->conn;
    $id_gaji =  htmlspecialchars($data['id_gaji']);
    $id_petugas = htmlspecialchars($data['id_petugas']);
    $role_id = htmlspecialchars($data['role_id']);
    $gaji_bersih = htmlspecialchars($data['gaji_bersih']);
    $keterangan = htmlspecialchars($data['keterangan']);

    mysqli_query($conn, "INSERT INTO tb_gaji VALUES ('$id_gaji','$id_petugas','$role_id','$gaji_bersih','$keterangan')");

    return mysqli_affected_rows($conn);
  }

  public function ubahDataGaji($data)
  {
    $conn = $this->conn;

    $id_gaji =  htmlspecialchars($data['id_gaji']);
    $id_petugas = htmlspecialchars($data['id_petugas']);
    $role_id = htmlspecialchars($data['role_id']);
    $gaji_bersih = htmlspecialchars($data['gaji_bersih']);
    $keterangan = htmlspecialchars($data['keterangan']);

    mysqli_query($conn, "UPDATE tb_gaji SET
    id = '$id_gaji',
    id_guru = '$id_petugas',
    id_role = '$role_id',
    gaji_bersih = '$gaji_bersih',
    keterangan = '$keterangan'
    WHERE id = $id_gaji
  ");

    return mysqli_affected_rows($conn);
  }

  public function hapusGaji($id_gaji)
  {
    $conn = $this->conn;
    mysqli_query($conn, "DELETE FROM tb_gaji WHERE id = $id_gaji");

    return mysqli_affected_rows($conn);
  }
  // === END SECTION GAJI ==



  // === SECTION JABATAN ===
  public function getAllJabatan()
  {
    $query = "SELECT * FROM tb_role";
    $jbtn = $this->query($query);

    return $jbtn;
  }

  public function getJabatanById($id_jabatan)
  {
    $query = "SELECT * FROM tb_role WHERE id = " . $id_jabatan;
    $jbtn = $this->query($query);

    return $jbtn[0];
  }

  public function tambahDataJabatan($data)
  {
    $conn = $this->conn;

    $id_jabatan = htmlspecialchars($data['id_jabatan']);
    $role = htmlspecialchars($data['role_id']);
    $gaji_pokok = htmlspecialchars($data['gaji_pokok']);
    $tunjangan = htmlspecialchars($data['tunjangan']);

    mysqli_query($conn, "INSERT INTO tb_role VALUES ('$id_jabatan','$role','$gaji_pokok','$tunjangan')");

    return mysqli_affected_rows($conn);
  }

  public function ubahDataJabatan($data)
  {
    $conn = $this->conn;

    $id_jabatan = htmlspecialchars($data['id_jabatan']);
    $role = htmlspecialchars($data['role']);
    $gaji_pokok = htmlspecialchars($data['gaji_pokok']);
    $tunjangan = htmlspecialchars($data['tunjangan']);

    mysqli_query($conn, "UPDATE tb_role SET
  id = '$id_jabatan',
  role = '$role',
  gaji_pokok = '$gaji_pokok',
  tunjangan = '$tunjangan'
  WHERE id = $id_jabatan
  ");

    return mysqli_affected_rows($conn);
  }

  public function hapusJabatan($id_jabatan)
  {
    $conn = $this->conn;
    mysqli_query($conn, "DELETE FROM tb_role WHERE id = $id_jabatan");

    return mysqli_affected_rows($conn);
  }
  // === END SECTION SPP ===


}
