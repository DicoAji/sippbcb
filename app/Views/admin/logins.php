<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title; ?></title>
    <!-- favicon -->
    <link
      rel="shortcut icon"
      href="<?php base_url() ?>/favicon.ico"
      type="image/x-icon"
    />
    <!-- style.css -->
    <link rel="stylesheet" href="<?php base_url() ?>/assets/css/style.css" />
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
    <div class="bg-abu-abu pt150 pb150">
      <div class="tengah">
        <div
          class="p-4 bg-white kotaklogin mx-auto my-auto"
          style="width: 450px"
        >
          <h2 class="tengah pt50">Login</h2>
          <div class="logologin tengah pb50">
            <img src="<?php base_url() ?>/assets/img/logo/logo.png" alt="" />
          </div>

          <!-- formulir -->
          <div class="tengah pb50">
            <form action="">
              <!-- username -->
              <div class="username">
                <label for="username">Username</label>
                <input type="text" placeholder="" />
              </div>
              <!-- password -->
              <div class="password mt20">
                <label for="password">Password</label>
                <input type="password" placeholder="" />
              </div>
            </form>
          </div>
          <div class="tengah pb50">
            <a href="<?php base_url() ?>/Admin/lupapassword"><small>Lupa password</small></a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
