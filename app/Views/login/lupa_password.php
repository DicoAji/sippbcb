<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MauLapor-lupapassword - Admin</title>
  <!-- favicon -->
  <link rel="shortQcut icon" href="<?php base_url() ?>/favicon.ico" type="image/x-icon" />
  <!-- style.css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css" />

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

  <!-- Core theme CSS (includes Bootstrap)-->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
  <div class="bg-abu-abu pt100 pb150">
    <div class="tengah">
      <div class="p-4 bg-white kotaklupapassword mx-auto my-auto" style="width: 450px">
        <h2 class="pt50">Lupa Password</h2>
        <div class="logolupapassword pb50">
          <img src="<?= base_url(); ?>/assets/img/logo/logo.png" alt="" />
        </div>
        <small>
          <?= view('Myth\Auth\Views\_message_block') ?>

        </small>
        <p>Masukkan email yag ada daftarkan untuk mendapat kode verifikasi</p>

        <!-- formulir -->
        <div class="pb50">
          <form action="<?= route_to('forgot') ?>" method="post">
            <?= csrf_field() ?>
            <!-- username -->
            <div class="email mt50">
              <label for="email">E-mail</label>
              <input type="email" name="email" class="<?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" placeholder="email" />
            </div>
            <div class="tengah mt20">
              <button type="submit" class="btn btn-hitam w-100">Kirim</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>