// let nama = document.getElementById("nama_barang");
// let jumlah = document.getElementById("jumlah");
// let harga = document.getElementById("harga");
// let kadaluarsa = document.getElementById("kadaluarsa");

// function validasi() {
// if (nama.value == "") {
//   nama.focus();
//   Swal.fire({
//     icon: "error",
//     title: "Error!",
//     text: "Nama Harus diisi!",
//   });
//   return false;
// } else if (jumlah.value == "") {
//   jumlah.focus();
//   Swal.fire({
//     icon: "error",
//     title: "Error!",
//     text: "Jumlah Harus diisi!",
//   });
//   return false;
// } else if (harga.value == "") {
//   harga.focus();
//   Swal.fire({
//     icon: "error",
//     title: "Error!",
//     text: "Harga Harus diisi!",
//   });
//   return false;
// } else {
//   return true;
// }
//   return true;
// }

// function insert() {
//   if (validasi()) {
//     document.getElementById("form").submit();
//   }
// }

// function edit(mode) {
//   if (mode == "update") {
//     document.getElementById("mode").value = "update";
//     document.getElementById("form").submit();
//   } else {
//     Swal.fire({
//       icon: "warning",
//       title: "Konfirmasi",
//       text: "Yakin akan dihapus?",
//       showCancelButton: true,
//       confirmButtonText: "Ya",
//       cancelButtonText: "Tidak",
//       reverseButtons: true,
//     }).then((result) => {
//       if (result.isConfirmed) {
//         document.getElementById("mode").value = "delete";
//         document.getElementById("form").submit();
//       } else if (result.dismiss === Swal.DismissReason.cancel) {
//         return false;
//       }
//     });
//   }
// }
