<?php 
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
		  	<p><a href="index.php">Incio</a></p>';
		  	include 'db.php';
			$db = new Db('unix');
    		$resultado = $db->sql('SELECT `categoria` FROM  `productos`');
            $num = $db->cantidad($resultado);
            
            if ($num> 0)
        	{
        		for ($i=0; $i<$num; $i++)
        		{
        			$row = mysql_fetch_array ($resultado);
        			echo '<p><a href="categoria.php?c='.$row['categoria'].'">'.$row['categoria'].'</a></p>';
        		}
        	}
		echo '</nav>
		</aside>  	
	  	<section>';
 ?>