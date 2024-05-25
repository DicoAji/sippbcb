<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar - MauLapor</title>
    <!-- favicon -->
    <link
      rel="shortcut icon"
      href="<?php base_url();?>/favicon.ico"
      type="image/x-icon"
    />
    <!-- style.css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css" />
    <!-- bootstraps -->

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
  </head>
  <body>
    <div class="bg-abu-abu pt100 pb100">
      <div class="tengah">
        <div
          class="p-4 bg-white kotaklogin mx-auto my-auto"
          style="width: 550px"
        >
          <h2 class="tengah pt50">Daftar</h2>
          <div class="logologin tengah pb50">
            <img src="<?= base_url(); ?>/assets/img/logo/logo.png" alt="" />
          </div>
          <small>
            <?= view('Myth\Auth\Views\_message_block') ?>
          </small>

          <!-- formulir -->
          <div class="tengah pb50"> 
            <form action="<?= route_to('register') ?>" method="post">
            <?= csrf_field() ?>  
                <!-- email -->
              <div class="email">
                <label for="email">Email</label>
                <input type="email" name="email" class="<?php if(session('errors.email')) : ?>is-invalid<?php endif ?>" placeholder="email" aria-describedby="emailHelp" />
              </div>
              <!-- username -->
              <div class="username">
                <label for="username">Username</label>
                <input type="text" name="username" class="<?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" placeholder="username" value="<?= old('username') ?>" />
              </div>
              <!-- password -->
              <div class="password mt20">
                <label for="password">Password</label>
                <input type="password" name="password" class="<?php if(session('errors.password')) : ?>is-invalid<?php endif ?>"  autocomplete="off" placeholder="password" />
              </div>
              <!-- ulangi password -->
              <div class="u_password mt20">
                <label for="u_password">Ulangi Password</label>
                <input type="password" name="pass_confirm" class="<?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="konfirmasi password" autocomplete="off" />
              </div>
              <div class="tengah mt20">
                <button type="submit" class="btn btn-hitam w-100">
                  Daftar
                </button>
              </div>
            </form>
          </div>
          <div class="tengah pb50">
            <small>
              <span>sudah punya akun?</span>
              <a href="<?= route_to('login') ?>"><small>Masuk</small></a>
            </small>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
