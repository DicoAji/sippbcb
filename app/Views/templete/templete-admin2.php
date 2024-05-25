<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= $title; ?></title>
  <link
      rel="shortcut icon"
      href="<?php base_url() ?>/favicon.ico"
      type="image/x-icon"
    />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="<?php base_url() ?>/assets/css/style_admin.css">
  <!-- endinject -->
  <!-- font awesome -->
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
/>
<!-- CSS only -->
<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
  <div class="body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <aside class="mdc-persistent-drawer mdc-persistent-drawer--open">
      <nav class="mdc-persistent-drawer__drawer">
        <div class="mdc-persistent-drawer__toolbar-spacer">
          <a href="" class="brand-logo">
						<img src="<?php base_url() ?>/assets/img/logo/logo.png" alt="logo">
					</a>
        </div>
        <div class="mdc-list-group admin-menu">
          <nav class="mdc-list mdc-drawer-menu bg-abu-abu" style="min-height: 900px;">
            <div class="mdc-list-item mdc-drawer-item <?= ($title == 'Beranda | Admin-MauLapor') ? 'admin-nav-active' : '' ?>" >
              <a class="mdc-drawer-link <?= ($title == 'Beranda | Admin-MauLapor') ? 'admin-nav-active-a' : '' ?>" href="<?php base_url() ?>/Admin/indeks">
                <i class="fas fa-book material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true"></i>
                Koleksi
              </a>
             
             
            </div>
            <div class="mdc-list-item mdc-drawer-item <?= ($title == 'Laporan | Admin-MauLapor') ? 'admin-nav-active' : '' ?>">
              <a class="mdc-drawer-link <?= ($title == 'Laporan | Admin-MauLapor') ? 'admin-nav-active-a' : '' ?>" href="<?php base_url() ?>/Admin/laporan">
                <i class="fas fa-paper-plane material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true"></i>
                Laporan
              </a>
              <!--  -->
            </div>
            <div class="mdc-list-item mdc-drawer-item <?= ($title == 'Tambah | Admin-MauLapor') ? 'admin-nav-active' : '' ?>">
              <a class="mdc-drawer-link <?= ($title == 'Tambah | Admin-MauLapor') ? 'admin-nav-active-a' : '' ?>" href="<?php base_url() ?>/Admin/tambah">
                <i class="fas fa-plus-square material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true"></i>
                Tambah
              </a>
             
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="<?php base_url() ?>/logout">
                <i class="fas fa-reply material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true"></i>
                Logout
              </a>
            </div>
            
          </nav>
        </div>
      </nav>
    </aside>
    <!-- partial -->
    <!-- partial:partials/_navbar.html -->
    <header class="mdc-toolbar mdc-elevation--z4 mdc-toolbar--fixed">
      <div class="mdc-toolbar__row ">
        <section class="mdc-toolbar__section mdc-toolbar__section--align-start">
          <a href="#" class="menu-toggler material-icons mdc-toolbar__menu-icon"><i class="fa-solid fa-sliders kuning"></i></i></a>
        </section>
      </div>
    </header>
    <!-- partial -->
    <div class="page-wrapper mdc-toolbar-fixed-adjust">
      <main class="content-wrapper ">
        <div class="p-4">
          <!-- conteks -->
          <?= $this->renderSection('content'); ?>
        </div>
      </main>
    </div>
  </div>
  <!-- body wrapper -->
  <!-- plugins:js -->
  <script src="<?php base_url() ?>/assets/jsadmin/material-components-web.min.js"></script>
  <script src="<?php base_url() ?>/assets/jsadmin/dist/jquery.min.js"></script>
  <!-- inject:js -->
  <script src="<?php base_url() ?>/assets/jsadmin/misc.js"></script>
  <script src="<?php base_url() ?>/assets/jsadmin/material.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php base_url() ?>/assets/jsadmin/dashboard.js"></script>
  <!-- End custom js for this page-->
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

  <!-- link jquery -->
    <script
      type="text/javascript"
      src="http://code.jquery.com/jquery-1.7.1.js"
    ></script>

    <script src="<?php base_url() ?>/assets/jsadmin/scriptsadmin.js"></script>
    <script>
      function showPreview(event) {
        if (event.target.files.length > 0) {
          var src = URL.createObjectURL(event.target.files[0]);
          var preview = document.getElementById("file-ip-1-preview");
          preview.src = src;
          preview.style.display = "block";
          preview.style.height = "200px";
          preview.style.width = "100%";
        }
      }
      function showPreview2(event) {
        if (event.target.files.length > 0) {
          var src = URL.createObjectURL(event.target.files[0]);
          var preview = document.getElementById("file-ip-2-preview");
          preview.src = src;
          preview.style.display = "block";
          preview.style.height = "200px";
          preview.style.width = "100%";
        }
      }
      function showPreview3(event) {
        if (event.target.files.length > 0) {
          var src = URL.createObjectURL(event.target.files[0]);
          var preview = document.getElementById("file-ip-3-preview");
          preview.src = src;
          preview.style.display = "block";
          preview.style.height = "200px";
          preview.style.width = "100%";
        }
      }
      function showPreview4(event) {
        if (event.target.files.length > 0) {
          var src = URL.createObjectURL(event.target.files[0]);
          var preview = document.getElementById("file-ip-4-preview");
          preview.src = src;
          preview.style.display = "block";
          preview.style.height = "200px";
          preview.style.width = "100%";
        }
      }

    </script>
      <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
          return new bootstrap.Tooltip(tooltipTriggerEl)
        })
      </script>

      <script>
        document.querySelector('#hapusdata').onclick = function(){
          swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            
          }).then(function () {
            swal(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            )
          })

        }
      </script>
</body>

</html>