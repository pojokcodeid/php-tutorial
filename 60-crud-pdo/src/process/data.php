<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mahasiswa</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

  <?php

  require_once '../../config/Connection.php';
  require_once '../../src/model/MahasiswaModel.php';

  $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
  $tempat_lahir = isset($_POST['tempat_lahir']) ? $_POST['tempat_lahir'] : "";
  $tanggal_lahir = isset($_POST['tgl_lahir']) ? $_POST['tgl_lahir'] : "";
  $jenis_kelamin = isset($_POST['kelamin']) ? $_POST['kelamin'] : "";
  $telepon = isset($_POST['telepon']) ? $_POST['telepon'] : "";
  $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : "";

  $action = isset($_POST['action']) ? $_POST['action'] : "";
  $nim = isset($_POST['nim']) ? $_POST['nim'] : "";

  $data = [];
  $data['nama'] = $nama;
  $data['tempat_lahir'] = $tempat_lahir;
  $data['tanggal_lahir'] = $tanggal_lahir;
  $data['jenis_kelamin'] = $jenis_kelamin;
  $data['telepon'] = $telepon;
  $data['alamat'] = $alamat;
  $data['nim'] = $nim;

  $mahasiswaModel = new MahasiswaModel();
  if ($action == "") {
    $insert = $mahasiswaModel->insert($data);
    if ($insert) {
      echo '<script> 
        Swal.fire({
          icon: "success",
          title: "Berhasil",
          text: "Data berhasil diinput!",
          confirmButtonText: "Ok"
        }).then((result) => {
          if (result.isConfirmed) {
            self.location.href = "../../index.php";         
          }
        })
      </script>';
      die();
    } else {
      echo '
      <script> 
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Data Gagal diinput!",
          confirmButtonText: "Ok"
        }).then((result) => {
          if (result.isConfirmed) {
            self.location.href = "../../index.php";         
          }
        })
      </script>';
      die();
    }
  } else if ($action == "update") {
    $update = $mahasiswaModel->update($data);
    if ($update) {
      echo '<script> 
        Swal.fire({
          icon: "success",
          title: "Berhasil",
          text: "Data berhasil diubah!",
          confirmButtonText: "Ok"
        }).then((result) => {
          if (result.isConfirmed) {
            self.location.href = "../../index.php";         
          }
        })
      </script>';
      die();
    } else {
      echo '
      <script> 
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Data Gagal diubah!",
          confirmButtonText: "Ok"
        }).then((result) => {
          if (result.isConfirmed) {
            self.location.href = "../../index.php";         
          }
        })
      </script>';
      die();
    }
  } else if ($action == "delete") {
    $delete = $mahasiswaModel->delete($nim);
    if ($delete) {
      echo '<script> 
        Swal.fire({
          icon: "success",
          title: "Berhasil",
          text: "Data berhasil dihapus!",
          confirmButtonText: "Ok"
        }).then((result) => {
          if (result.isConfirmed) {
            self.location.href = "../../index.php";         
          }
        })
      </script>';
      die();
    } else {
      echo '
      <script> 
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Data Gagal dihapus!",
          confirmButtonText: "Ok"
        }).then((result) => {
          if (result.isConfirmed) {
            self.location.href = "../../index.php";         
          }
        }) 
      </script>';
      die();
    }
  }
  ?>

</body>

</html>