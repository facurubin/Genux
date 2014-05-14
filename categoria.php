<?php 
include 'header.php';
	echo '<article id="contenido">
				<h2 class="titulo">Categoria '.$_GET['c'].'</h2>';
		    $resultado = $db->sql("SELECT * FROM  `productos` WHERE  `categoria` LIKE '".$_GET['c']."'");
            $num = $db->cantidad($resultado);
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
	echo '</article>';
include 'footer.php';
?>