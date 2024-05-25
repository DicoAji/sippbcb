<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title; ?></title>

    <!-- favicon -->
    <link
      rel="shortcut icon"
      href="/favicon.ico"
      type="image/x-icon"
    />

    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/assets/css/style.css" rel="stylesheet" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  </head>
  <body>
    <div class="d-flex " id="wrapper">
      <!-- Sidebar-->
      <div class="borderkanan fixedd side-admin admin bg-abu-abu  " id="sidebar-wrapper"  >
        <div class="sidebar-heading bg-hitam tengah " style="padding-top: 25px;padding-bottom: 25px; " >
          <img src="/assets/img/logo/logo.png" class="logo" alt="" />
        </div>
        <div class="list-group ">
          <div class="tengah p-2 menu <?= ($title == 'Beranda | Admin-MauLapor') ? 'admin-nav-active' : '' ?>">
            <a class="<?= ($title == 'Beranda | Admin-MauLapor') ? 'admin-nav-active-a' : '' ?>" href="/Admin/indeks"
              ><i class="fas fa-book"></i> Koleksi</a
            >
          </div>
          <div class="tengah p-2 menu <?= ($title == 'Laporan | Admin-MauLapor') ? 'admin-nav-active' : '' ?>">
            <a class="<?= ($title == 'Laporan | Admin-MauLapor') ? 'admin-nav-active-a' : '' ?>" href="/Admin/laporan"
              ><i class="fas fa-paper-plane"></i>Laporan</a
            >
          </div>
          <div class="tengah p-2 menu <?= ($title == 'Tambah | Admin-MauLapor') ? 'admin-nav-active' : '' ?>">
            <a class="<?= ($title == 'Tambah | Admin-MauLapor') ? 'admin-nav-active-a' : '' ?>" href="/Admin/tambah"
              ><i class="fas fa-plus-square"></i>Tambah</a
            >
          </div>
          
          <div class="tengah p-2 menu ">
            <a class="" href="/logout"><i class="fas fa-reply"></i>Logout</a>
          </div>
        </div>
      </div>
      <!-- Page content wrapper-->
      <div id="page-content-wrapper " class="wrap" style="width: 100%">
        <!-- Top navigation-->
        <nav class="navbar fixedd nav-admin navbar-expand-lg border-bottom p-2 py-3" >
          <div class="container fixedd">
          <!-- <i class="bi bi-columns-gap" style="cursor: pointer"
              id="sidebarToggle"></i> -->
              <i class="bi bi-list fixedd" style="cursor: pointer"  id="sidebarToggle"></i>
            <!-- <i
              class="fas fa-arrow-right"
              style="cursor: pointer"
              id="sidebarToggle"
            ></i> -->
          </div>
        </nav>

        <div class="pt50 pb50">
        <?= $this->renderSection('content'); ?>
        </div>


  

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

  <!-- link jquery -->
    <script
      type="text/javascript"
      src="http://code.jquery.com/jquery-1.7.1.js"
    ></script>

    <script src="/assets/jsadmin/scriptsadmin.js"></script>
    <script>
        function showPreview(event) {
          if (event.target.files.length > 0) {
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("file-ip-1-preview");
            preview.src = src;
            preview.style.display = "block";
            preview.style.height = "100%";
            preview.style.width = "100%";
          }
        }
      </script>

      <script>
        $(document).ready(function () {
        if (document.getElementById('status') == "proses") {
          $("#status").style.color == "yellow";
        }else if (document.getElementById('status') == "belum") {
          $("#status").style.color == "red";
        } else if (document.getElementById('status') == "selesai") {
          $("#status").style.color == "green";
        } 
      });
      </script>
      <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
          return new bootstrap.Tooltip(tooltipTriggerEl)
        })
      </script>
      <script>
        document.querySelector('#admin-form-tambah').onsubmit = function(){
          Swal.fire({
          icon: 'success',
          html: '<h2>Data berhasil ditambah </h2>',
          showConfirmButton: false,
          timer: 1000
          })

        }
      </script>
      
</body>
</html>
