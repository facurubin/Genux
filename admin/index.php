<?php
include_once 'header.php';
?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="index.php">Ventas</a></li>
            <li><a href="articulos.php">Articulos</a></li>
            <li><a href="cargar.php">Cargar</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header">Listado de ventas</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Precio</th>
                  <th>Fecha</th>
                </tr>
              </thead>
              <tbody>
               <?php
                /*echo "<tr>\n
                  <td>1,001</td>\n
                  <td>Lorem</td>\n
                  <td>ipsum</td>\n
                </tr>\n";*/
                $resultado = $db->sql("SELECT * FROM  `ventas`");
                $num = $db->cantidad($resultado);
                if ($num> 0)
            	{
            		for ($i=0; $i<$num; $i++)
            		{
            			$row = mysql_fetch_array ($resultado);
        				 echo "<tr>\n
                      <td>".$row['id_usu']."</td>\n
                      <td>$".$row['importe']."</td>\n
                      <td>".$row['fecha']."</td>\n
                    </tr>\n";
            		}
            	}
               ?> 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <?php
    include_once 'footer.php';
    ?>
    