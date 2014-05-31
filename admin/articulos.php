<?php
include_once 'header.php';
?>
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="index.php">Ventas</a></li>
            <li class="active"><a href="articulos.php">Articulos</a></li>
            <li><a href="cargar.php">Cargar</a></li>
          </ul>
        </div>

<?php
$resultado = $db->sql('SELECT  `productos`.`ventas`,`productos`.`id_pro`,`productos`.`nombre` ,  `productos`.`precio` ,  `categorias`.`cat_nom` ,  `productos`.`descripcion` , `productos`.`img` FROM productos
LEFT JOIN  `unix`.`categorias` ON  `productos`.`id_cat` =  `categorias`.`id_cat` LIMIT 0 , 30');
$num = $db->cantidad($resultado);

echo '<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header">Listado de articulos</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Precio</th>
                  <th>Ventas</th>
                  <th>Codigo</th>
                  <th>Categoria</th>
                </tr>
              </thead>
              <tbody>';
	if ($num > 0)
	{
		for ($i=0; $i<$num; $i++)
		{
		    echo '<tr>';
			$row = mysql_fetch_array ($resultado);
			print "\n<td>".$row['nombre']."</td>\n";
			echo '<td>'.$row['precio']."</td>\n";
			echo '<td>'.$row['ventas'].'</td>';
			echo '<td>'.$row['id_pro']."</td>\n";
			echo '<td>'.$row['cat_nom']."</td>\n";
		    echo '</tr>';
		}
	}
echo '          </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>';
include_once 'footer.php';
?>
