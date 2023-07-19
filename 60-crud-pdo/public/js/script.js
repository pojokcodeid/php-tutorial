let from = document.getElementById("from");
let nama = document.getElementById("nama");
let tempatLahir = document.getElementById("tempat_lahir");
let tanggalLahir = document.getElementById("tgl_lahir");
let telepon = document.getElementById("telepon");
let kelamin = document.querySelectorAll('input[name="kelamin"]');
let alamat = document.getElementById("alamat");

function validasi() {
  if (nama.value.trim() == "") {
    nama.focus();
    Swal.fire({
      icon: "error",
      title: "Error!",
      text: "Nama Harus diisi!",
    });
    return false;
  } else if (tempatLahir.value.trim() == "") {
    tempatLahir.focus();
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Tempat Lahir Harus diisi!",
    });
    return false;
  } else if (tanggalLahir.value.trim() == "") {
    tanggalLahir.focus();
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Tanggal Lahir Harus diisi!",
    });
    return false;
  } else if (telepon.value.trim() == "") {
    telepon.focus();
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Telepon Harus diisi!",
    });
    return false;
  } else if (kelamin[0].checked == false && kelamin[1].checked == false) {
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Kelamin Harus diisi!",
    });
    return false;
  } else if (alamat.value.trim() == "") {
    alamat.focus();
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Alamat Harus diisi!",
    });
    return false;
  } else {
    return true;
  }
}

function insert() {
  if (validasi()) {
    form.submit();
  }
}

function editMode(mode) {
  document.getElementById("action").value = mode;
  if (validasi()) {
    if (mode == "delete") {
      Swal.fire({
        icon: "warning",
        title: "Konfirmasi",
        text: "Yakin akan dihapus?",
        showCancelButton: true,
        confirmButtonText: "Ya",
        cancelButtonText: "Tidak",
        reverseButtons: true,
      }).then((result) => {
        if (result.isConfirmed) {
          form.submit();
        } else if (result.dismiss === Swal.DismissReason.cancel) {
          return false;
        }
      });
    } else {
      form.submit();
    }
  }
}
