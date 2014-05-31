<?php
include_once 'header.php';
?>
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="index.php">Ventas</a></li>
            <li><a href="articulos.php">Articulos</a></li>
            <li class="active"><a href="cargar.php">Cargar</a></li>
          </ul>
       </div>
     </div>
</div>
          
        <form class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" role="form">
          <h2 class="sub-header">Panel de carga de articulos</h2>
          <div class="form-group">
            <label for="exampleInputEmail1">Nombre del producto</label>
            <input type="email" class="form-control" id="exampleInputEmail1">
          </div>
           <div class="form-group">
            <label for="exampleInputEmail1">Descripcion</label>
            <textarea class="form-control" rows="3"></textarea>
          </div>
         <div class="form-group">
            <label for="exampleInputFile">Categoria</label>
            <select multiple class="form-control">
              <?php
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
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Precio</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="$">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Cargar Imagen</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">Cargar imagen descriptiva.</p>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Oferta
            </label>
          </div>
          <button type="submit" class="btn btn-default">Enviar</button>
        </form>
<?php
include_once 'footer.php';
?>