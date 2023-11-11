<?php include 'ctluser.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
      .bg{
        background-image: url(images/icon0.webp);
        background-position: center center ;
      }
    </style>
   
    <!-- Custom styles for this template -->
    <!-- <link href="signin.css" rel="stylesheet"> -->
  </head>
  <body background="/images/The-Division-crest.webp">
    <?php include 'menu.html'; ?>
    <div class="container w-75 bg-white mt-5 rounded shadow">
      <div class="row align-items-stretch">
        <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6">

        </div>
        <div class="col p-5 rounded-end">
          <div class="text-end">
          </div>
          <h2 class="fw-bold text-center py-5">Bienvenido</h2>
          
          <form action="" method="post">
            <div class="mb-4">
              <label for="email" class="form-label">Correo electronico</label>
              <input type="email" class="form-control" name="email"> 
            </div>
            <div class ="mb-4">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-4">
              
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </div>
            <!--
            <div class="my-3">
              <span>No tienes cuenta? <a href="#">Regístrate</a></span> <br>
              <span><a href="#">Recuperar password</a></span>
            </div>
          </form>
    -->
          <!------ 
          <div class="container w-100 my-5">
            <div class="row text-center">
              <div class="col-12">Iniciar Sesión</div>
              <div class="row">
                <div class="col">
                  <button class="btn btn-outline-primary w-100 my-1">
                    <div class="row align-items-center">
                      <div class="col-2 d-none d-md-block">
                        <img src="images/facebook.png" width="32" alt="">
                      </div>
                      <div class="col-12 col-md-10 text-center">
                        Facebook
                      </div>
                    </div>
                  </button>
                </div>
                <div class="col">
                  <button class="btn btn-outline-danger w-100 my-1">
                    <div class="row align-items-center">
                      <div class="col-2 d-none d-md-block">
                        <img src="images/google.png" width="32" alt="">
                      </div>
                      <div class="col-12 col-md-10 text-center">
                        Google
                      </div>
                    </div>
                  </button>
                </div>
              </div>
            </div>
          </div>
          -->
        </div>
    </div>
    <script src="/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
