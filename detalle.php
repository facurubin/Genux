<?php 
	include_once 'header.php';
	include_once 'db.php';
	if(isset($_GET['id'])){
    $resultado = $db->sql('SELECT * FROM  `productos` WHERE  `id_pro` = '.$_GET['id']);
	$num = $db->cantidad($resultado);
	if ($num> 0)
	{
	$row = mysql_fetch_array ($resultado);
	echo '<article id="contenido">
	<h2 class="titulo">'.$row['nombre'].'</h2>';
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