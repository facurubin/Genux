<?php 
	include_once 'header.php';
	include_once 'db.php';
    $resultado = $db->sql('SELECT * FROM  `productos`');
	$num = $db->cantidad($resultado);
	echo '<article id="productos">
	<h2 class="titulo">Catalogo de Productos </h2>';
	if ($num> 0)
	{
		for ($i=0; $i<$num; $i++)
		{
			$row = mysql_fetch_array ($resultado);
						echo '<div class="articulo">
						<div class="nombre">
							'.$row['nombre'].'
						</div>
						<figure><img src="img/'.$row['img'].'" alt=""></figure>
						<div class="precio">
							$'.$row['precio'].'
						</div>
						<a href="carrito.php?id='.$row['id_pro'].'" class="icono-basket">Comprar</a>
						</div>';
		}
	}
?>
</articule>    
<?php 
	include 'footer.php';
 ?>