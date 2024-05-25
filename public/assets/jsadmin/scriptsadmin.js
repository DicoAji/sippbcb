// kolom pencarian di laporan
var $rows = $("#table .data");
$("#carilaporan").keyup(function () {
  var val = $.trim($(this).val()).replace(/ +/g, " ").toLowerCase();

  $rows
    .show()
    .filter(function () {
      var text = $(this).text().replace(/\s+/g, " ").toLowerCase();
      return !~text.indexOf(val);
    })
    .hide();
});
// sidebar
window.addEventListener("DOMContentLoaded", (event) => {
  // Toggle the side navigation
  const sidebarToggle = document.body.querySelector("#sidebarToggle");
  if (sidebarToggle) {
    // Uncomment Below to persist sidebar toggle between refreshes
    // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
    //     document.body.classList.toggle('sb-sidenav-toggled');
    // }
    sidebarToggle.addEventListener("click", (event) => {
      event.preventDefault();
      document.body.classList.toggle("sb-sidenav-toggled");
      localStorage.setItem(
        "sb|sidebar-toggle",
        document.body.classList.contains("sb-sidenav-toggled")
      );
    });
  }
});

// pencarian di tabel koleksi
var $rows = $("#table .data");

$("#caribenda").keyup(function () {
  var val = $.trim($(this).val()).replace(/ +/g, " ").toLowerCase();

  $rows
    .show()
    .filter(function () {
      var text = $(this).text().replace(/\s+/g, " ").toLowerCase();
      return !~text.indexOf(val);
    })
    .hide();
});

// koleksi validasi hapus
function ConfirmDelete() {
  var x = confirm("Yakin Untuk Dihapus?");
  if (x) return true;
  else return false;
}

//   validasi tambah benda
(function () {
  "use strict";

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll(".needs-validation");

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();

var cekpemeriksaan = document.getElementsByClassName("pemeriksaan");
cekpemeriksaan.innerText = "Pemeriksaan";
cekpemeriksaan.innerText = "Pemeriksaan";
