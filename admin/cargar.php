<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
        <title>Panel de Administración</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-wysihtml5.css" />
    <script src="js/wysihtml5.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-wysihtml5.js"></script>

    <!--[if lt IE 9]>
    <script src="../../assets/js/ie8-responsive-file-warning.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../">Panel de Genux Informática</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="auth.php?e=des">Cerrar Sesion</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Buscar...">
          </form>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="index.php">Ventas</a></li>
            <li><a href="articulos.php">Articulos</a></li>
            <li class="active"><a href="cargar.php">Cargar</a></li>
          </ul>
       </div>
        <form class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" action="auth.php?id=producto" method="post">
          <h2 class="sub-header">Panel de carga de articulos</h2>
          <div class="form-group">
            <label for="nombre">Nombre del producto</label>
            <input type="text" class="form-control">
          </div>
           <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <textarea class="textarea form-control" placeholder="Enter text ..."></textarea>
          </div>
         <div class="form-group">
            <label for="exampleInputFile">Categoria</label>
            <select multiple class="form-control">
            <?php
            include_once '../db.php';
            session_start(); 
            if (!$_SESSION['admin']=='true') 
            { 
           	//si no existe, envio a la página de autentificacion 
           	header("Location: login.php"); 
           	//ademas salgo de este script 
           	exit();
            }
            $db = new Db('unix');
            $resultado = $db->sql("SELECT `cat_nom` FROM  `categorias`");
            $num = $db->cantidad($resultado);
            if ($num> 0)
            {
            	for ($i=0; $i<$num; $i++)
            	{
            		$row = mysql_fetch_array ($resultado);
    				echo '<option>'.$row['cat_nom'].'</option>';
            	}
            }
            ?>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Precio</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="$">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Cargar Imagen</label>
            <input type="file" id="imagen">
            <p class="help-block">Cargar imagen descriptiva.</p>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Oferta
            </label>
          </div>
          <button type="submit" class="btn btn-default">Enviar</button>
        </form>
    </div>
</div>
    <script>
    $('.textarea').wysihtml5();
</script>
  </body>
</html>
