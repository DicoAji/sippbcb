<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - MauLapor</title>
    <!-- favicon -->
    <!-- favicon -->
    <link
      rel="shortcut icon"
      href="<?php base_url() ?>/favicon.ico"
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
          style="width: 450px"
        >
          <h2 class="tengah pt50">Login</h2>
          <div class="logologin tengah pb50">
            <img src="<?= base_url(); ?>/assets/img/logo/logo.png" alt="" />
          </div>
          <small>
            <?= view('Myth\Auth\Views\_message_block') ?>

          </small>

          <!-- formulir -->
          <div class="tengah pb50">
            <form action="<?= route_to('login') ?>" method="POST">
            <?= csrf_field() ?>
            <?php if ($config->validFields === ['email']): ?>
              <!-- email -->
              <div class="login">
                <label for="login">Username/Email</label>
                <input type="email" class="<?php if(session('errors.login')) : ?>is-invalid<?php endif ?>" placeholder="username/email" name="login" placeholder="username/email" />
                <div class="invalid-feedback">
                  <?= session('errors.login') ?>
                </div>
              </div>
              <?php else: ?>
              <!-- username -->
              <div class="username">
                <label for="login">Username/Email</label>
                <input type="text"  class="<?php if(session('errors.login')) : ?>is-invalid<?php endif ?>" placeholder="username/email" name="login" placeholder="username/email" />
                  <div class="invalid-feedback">
                    <?= session('errors.login') ?>
                  </div>
              </div>
              <?php endif; ?>
              
              <!-- password -->
              <div class="password mt20">
                <label for="password">Password</label>
                <input type="password" class="<?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" name="password" placeholder="password" />
                  <div class="invalid-feedback">
								<?= session('errors.password') ?>
							</div>
                </div>
              <div class="tengah mt20">
                <button type="submit" class="btn btn-hitam w-100">Login</button>
              </div>
            </form>
          </div>
          <div class="tengah pb50">
            <small>
              <small>
                <a href="<?= route_to('forgot') ?>">Lupa password?</a>
              </small>
            </small>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
