<?php
if (!isset($_SESSION))
  {
    session_start();
  } 
if($_GET['a']=='agregar')
{
    if(!isset($_SESSION['carrito']))
    {
     $_SESSION['carrito']=array();
    }
    array_push($_SESSION['carrito'],$_GET['id']);
    header("Location: index.php"); 
    echo count($_SESSION['carrito']);
}elseif($_GET['a']=='comprar')
{
    include_once 'header.php';
	include_once 'db.php';
	$consulta='';
	for($i = 0; $i < count($_SESSION['carrito']); $i++)
	{
	    $consulta=$consulta.'`id_pro`= '.$_SESSION['carrito'][$i];
	   
	    if($i<count($_SESSION['carrito'])-1)
	    {
	        $consulta=$consulta.' OR ';
	    }
	}
	$consulta='SELECT * FROM  `productos` WHERE '.$consulta;
	//echo $consulta;
    $resultado = $db->sql($consulta);
	$num = $db->cantidad($resultado);
	echo '<article id="productos">
	<h2 class="titulo">Compras realizadas </h2>';
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
						<a href="carrito.php?a=agregar&id='.$row['id_pro'].'" class="icono-basket">Comprar</a>
						</div>';
		}
	}
	include 'footer.php';
}else{
    header("Location: index.php");
}
?>