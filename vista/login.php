<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login con Bootstrap</title>

   <link rel="stylesheet" type="text/css" href="../estilos/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="../estilos/login.css">
   
  </head>

  <body class="text-center">

    <form class="form-signin" method="POST" action="../script/servidor/iniciar_secion.php"  >

      <img class="mb-4" src="../estilos/logo.png" width="100" height="100">
      <h1 class="h3 mb-3 font-weight-normal">Login</h1>

      <input type="text" name="txt_usuario" class="form-control" placeholder="Usuario..." required autofocus>
      <input type="password" name="txt_clave" class="form-control" placeholder="contraseña..." required>
      <div class="form-group">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      </div>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>

  </body>
</html>
