<!-- heeder -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $title; ?></title>
  <!-- favicon -->
  <link rel="shortcut icon" href="<?php base_url() ?>/favicon.ico" type="image/x-icon" />
  <!-- icon bootstraps -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <!-- style.css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css" />
  <!-- bootstraps -->

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <!-- js chapta -->
  <script src="<?= base_url() ?>/assets/js/captcha.js"></script>
  <!-- bundle -->
  <!-- JavaScript Bundle with Popper -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
  <!-- JavaScript Bundle with Popper -->

  <!-- swet alert -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
  </script>
  <!-- scrollreveal -->
  <script src="https://unpkg.com/scrollreveal"></script>

</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg bg-black" id="">
    <div class="container">
      <img src="<?php base_url() ?>/assets/img/logo/logo.png" class="logo-nav " alt="" />
      <button class="navbar-toggler" style="color: transparent !important;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon kuning"><i class="fas fa-bars"></i></span>
      </button>
      <!-- id="navbarNav" -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link <?= ($title == 'Beranda-MauLapor') ? 'public-nav-active' : '' ?>" id="nav_beranda" href="<?php base_url() ?>/Umum/index">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= ($title == 'Koleksi-MauLapor') ? 'public-nav-active' : '' ?>" id="nav_koleksi" href="<?php base_url() ?>/Umum/koleksi">Koleksi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= ($title == 'Laporkan-MauLapor') ? 'public-nav-active' : '' ?> " data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="nav_laporkan" href="<?php base_url() ?>/Umum/laporkan">Laporkan</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end navbar -->
  <!-- end header -->
  <?= $this->renderSection('content'); ?>
  <!-- footer -->
  <footer class="bg-hitam ">
    <div class="p-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-12">
            <img src="<?php base_url() ?>/assets/img/logo/logo.png" alt="" />
          </div>
          <div class="col-lg-6 col-12 sm_mt40">
            <div class="row  mt-sm-3">
              <div class="col-lg-6 mt-sm-3 ">
                <p class="kuning"><strong>KONTAK KAMI</strong></p>
                <div class="d-flex mt-sm-4">
                  <p class="kuning">
                    <i class="fas fa-home kuning me-2"></i>Jalan Slamet
                    Riyadi No. 29 Batang
                  </p>
                </div>
                <div class="d-flex">
                  <p class="kuning">
                    <i class="fas fa-phone-alt kuning me-2"></i>(0285)
                    391321 Ext. 22
                  </p>
                </div>
                <div class="d-flex">
                  <p class="kuning">
                    <i class="fas fa-print kuning me-2"></i>(0285) 391321
                  </p>
                </div>
                <div class="d-flex">
                  <p class="kuning">
                    <i class="fas fa-envelope kuning me-2"></i>disdikbud@batangkab.go.id
                  </p>
                </div>

              </div>
              <div class="col-6">
                <p class="kuning sm_mt40"><strong>MENU</strong></p>
                <div class="d-flex mt-sm-4">
                  <a href="<?php base_url() ?>/Umum" class="kuning fs08">Beranda</a>
                </div>
                <div class="d-flex">
                  <a href="<?php base_url() ?>/Umum/koleksi" class="kuning fs08">Koleksi</a>
                </div>
                <div class="d-flex">
                  <a href="<?php base_url() ?>/Umum/laporkan" data-bs-toggle="modal" class="kuning fs08" data-bs-target="#staticBackdrop">Laporkan</a>
                </div>
                <div class="d-flex">
                  <a href="<?php base_url() ?>/Umum/index#tentang" class="tentang-about kuning fs08">Tentang</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a href="https://disdikbud.batangkab.go.id/">
          <p class="kuning sm_mt40 ">
            <i class="fas fa-globe kuning"></i>
            Dinas Pendidikan dan Kebudayaan Kabupaten Batang
          </p>
        </a>
      </div>
    </div>
  </footer>
  <!-- Modal konfirmasi laporan-->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <div class="tengah">
            <h2 class="modal-title text-danger" id="staticBackdropLabel">Perhatian</h2>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="tengah">
            <img src="<?php base_url() ?>/assets/img/danger.png" alt="danger">
          </div>
          <div class="tengah">
            <ul class="mt10"> Jangan asal lapor telitilah benda yang kamu temukan terlebih dahulu </ul>
          </div>
        </div>
        <div class="modal-footer">
          <a href="<?php base_url() ?>/Umum/laporkan" type="button" class="btn btn-success ">Lanjutkan</a>
        </div>
      </div>
    </div>
  </div>
  <!-- link jquery -->
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.js"></script>
  <script>
    $('.form-laporkan').on('submit', function(e) {
      e.preventDefault();
      validateCaptcha();
      if ($('#hasilCaptcha').val() == 'benar') {
        this.submit();
      }
    });
  </script>
  <!--------------------script index ---------------------------->
  <script src="<?php base_url() ?>/assets/jspublic/scriptspublic.js"></script>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

  <script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })
  </script>
  <script>
    $(document).ready(function() {
      $('.modal .img_empty img[src=""]').hide();
      $('.modal .img_empty img:not([src=""])').show();
    });
  </script>


</body>

</html>