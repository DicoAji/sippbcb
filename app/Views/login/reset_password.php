<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MauLapor-lupapassword - Admin</title>
    <!-- favicon -->
     <link
      rel="shortcut icon"
      href="<?php base_url(); ?>/favicon.ico"
      type="image/x-icon"
    />
    <!-- style.css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css" />
    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
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
  </head>
  <body>
    <div class="bg-abu-abu pt100 pb150">
      <div class="tengah">
        <div
          class="p-4 bg-white kotaklupapassword mx-auto my-auto"
          style="width: 450px"
        >
          <h2 class="pt50">Reset Password</h2>
          <div class="logolupapassword pb50">
            <img src="<?= base_url(); ?>/assets/img/logo/logo.png" alt="" />
          </div>
          <small>
            <?= view('Myth\Auth\Views\_message_block') ?>
          </small>
          <p>Silahkan masuk ke dalam email yang terdaftar untuk mendapatkan token!</p>
          <!-- formulir -->
          <div class="pb50">
            <form action="<?= route_to('reset-password') ?>" method="post">
            <?= csrf_field() ?>
              <!-- username -->
              <div class="token mt25">
                <label for="token">Token</label>
                <input type="text" class="<?php if(session('errors.token')) : ?>is-invalid<?php endif ?>" name="token" value="<?= old('token', $token ?? '') ?> " placeholder="" />
                  <div class="invalid-feedback">
                      <?= session('errors.token') ?>
                  </div>
              </div>
              <div class="email mt10">
                <label for="email">E-mail</label>
                <input type="email" class="<?php if(session('errors.email')) : ?>is-invalid<?php endif ?>" value="<?= old('email') ?>" name="email"  placeholder="" />
                  <div class="invalid-feedback">
                      <?= session('errors.email') ?>
                  </div>
              </div>
              <div class="katasandibaru mt10">
                <label for="katasandibaru">Kata Sandi Baru</label>
                <input type="password" class="<?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" class="" placeholder="" />
                <div class="invalid-feedback">
                    <?= session('errors.password') ?>
                </div>
              </div>
              <div class="ulangikatasandi mt10">
                <label for="ulangikatasandi">Ulangi Kata Sandi</label>
                <input type="password" class="<?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" class="" placeholder="" />
                  <div class="invalid-feedback">
                      <?= session('errors.pass_confirm') ?>
                  </div>
              </div>
              <div class="tengah mt20">
                <button type="submit" class="btn btn-hitam w-100">Atur Ulang sandi</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
