<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin control</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <body>

    <div class="container">
        <?php
            session_start(); 
        ?>
      <form class="form-signin" role="form" action="auth.php" method="post">
        <h2 class="form-signin-heading">Inicio Sesion</h2>
        <input type="text" class="form-control" placeholder="Usuario" name="usuario" required autofocus>
        <input type="password" class="form-control" name="contrasena" placeholder="Contraseña" required>
        <label class="checkbox">
          <input type="checkbox" value="Recordarme"> Recordarme
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      
      <?php
        if (isset($_GET["error"]))
        {
        echo '<span style="color:ffffff"><b>Datos incorrectos</b></span>';
        }
        ?>
    </form>
    </div>
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>