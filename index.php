<?php 
	include_once 'header.php';
	include_once 'db.php';
    $resultado = $db->sql('SELECT * FROM  `productos` WHERE  `oferta` = 1 LIMIT 0 , 5');
	$num = $db->cantidad($resultado);
	echo '<article id="productos">
	<h2 class="titulo">Ofertas </h2>';
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
						</div>';
		}
	}
?>
</articule>    
<article id="contenido">
	<h2 class="titulo">Bienvenidos</h2>
		<p>Los invitamos a visitar nuestro local ubicado en pleno centro de la ciudad de Corrientes Capital.</p>
		<p>Junin 985</p>
		<p>Entre Buenos Aires y Tucuman</p>
		<p>O ante alguna consulta nuestro telefono es:</p>
		<p>+54 (3794) 444452</p>
</article>
<?php 
	include 'footer.php';
 ?>