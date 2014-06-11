<?php 
if (!isset($_SESSION))
  {
    session_start();
  } 
echo '<!DOCTYPE html>
<html lang="es">
  <head>
  	<title>Incio Genux informatica</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width , initial-scale=1 ,maximum-scale=1" />
  	<link rel="stylesheet" href="css/estilo.css" />
  	<link rel="stylesheet" href="css/normalize.css" />
  	<script src="js/modernizr.js"></script>
  </head>
	<body>
  		<header>
	  			<h1>Genux Informática</h1>
	  			<h2>Venta de insumos informáticos</h2>
	  	</header>
	  	<div id="logo" class="icono-logo"></div>
	  	<aside>
		  	<nav>
		  	<div id="compra">
    		  	';
    		  	 if(isset($_SESSION['carrito'])){
    		  	    echo '<h2>'.count($_SESSION['carrito']).'</h2>';
    		  	 }else{
    		  	    echo '<h3>0</h3>';
    		  	 }
    		  	 echo '<p>Articulos</p>';
    		  	 
    		  	echo'<a href="carrito.php?id=" class="icono-basket"></a></br>
    		  	<a href="carrito.php?id=">Comprar</a>
		  	</div>';
		  	
            if (!isset($_SESSION['auth'])){
        	    echo '<form action="auth.php" method="post" id="login">	
            		<label>Nombre de usuario:</label>
            		<p><input type="text" name="usuario" placeholder="Usuario"></p>
            		<label>Contraseña:</label>
            		<p><input type="password" name="contrasena" placeholder="Contraseña"></p>
            		<input type="submit" value="Ingresar">';
    		    echo "<p><a href='registrarse.php'>¿No tienes una cuenta?</a></p>";
	            echo '</form>';
            }elseif ($_SESSION['auth']== true){
                echo '<div id="login">';
                echo '<p>Bienvenido '.$_SESSION['nombre'].' '.$_SESSION['apellido'].'</p>';
                echo "<a href='auth.php?e=des'>Cerrar Sesion</a>";
                echo '</div>';
            }
            echo '<div id="categorias"><p><a href="index.php">Incio</a></p>';
		  	 
		  	include 'db.php';
			$db = new Db('unix');
    		$resultado = $db->sql('SELECT * FROM  `categorias` WHERE  `cantidad` >=1 LIMIT 0 , 30');
            $num = $db->cantidad($resultado);
            
            if ($num> 0)
        	{
        		for ($i=0; $i<$num; $i++)
        		{
        			$row = mysql_fetch_array($resultado);
        			echo '<p><a href="categoria.php?c='.$row['id_cat'].'">'.$row['cat_nom'].'</a></p>';
        		}
        	}
		echo '</div></nav>
		</aside>  	
	  	<section>';
 ?>