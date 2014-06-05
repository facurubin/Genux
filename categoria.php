<?php 
include 'header.php';
	echo '<article id="productos">
	<h2 class="titulo">Categoria </h2>';
			if(is_int($_GET['c']))
			{
			    header('Location: index.php'); 
                exit();
			}
			else
			{
    		    $resultado = $db->sql("SELECT * FROM  `productos` WHERE  `id_cat` LIKE '".$_GET['c']."'");
                $num = $db->cantidad($resultado);
                if ($num> 0)
            	{
            		for ($i=0; $i<$num; $i++)
            		{
            			$row = mysql_fetch_array ($resultado);
    						echo '
    						<div class="articulo"><div class="nombre">
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
			}
	echo '</article>';
include 'footer.php';
?>