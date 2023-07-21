let nama = document.getElementById("nama_barang");
let jumlah = document.getElementById("jumlah");
let harga = document.getElementById("harga");
let kadaluarsa = document.getElementById("kadaluarsa");

function validasi() {
  if (nama.value == "") {
    alert("Nama Barang harus diisi");
    nama.focus();
    return false;
  } else if (jumlah.value == "") {
    alert("Jumlah Barang harus diisi");
    jumlah.focus();
    return false;
  } else if (harga.value == "") {
    alert("Harga Barang harus diisi");
    harga.focus();
    return false;
  } else if (kadaluarsa.value == "") {
    alert("Kadaluarsa Barang harus diisi");
    kadaluarsa.focus();
    return false;
  } else {
    return true;
  }
}

function insert() {
  if (validasi()) {
    document.getElementById("form").submit();
  }
}

function edit(mode) {
  if (mode == "update") {
    document.getElementById("mode").value = "update";
    if (validasi()) {
      document.getElementById("form").submit();
    }
  } else {
    if (confirm("Apakah Yakin dihapus?")) {
      document.getElementById("mode").value = "delete";
      document.getElementById("form").submit();
    }
  }
}
