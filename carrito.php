<?php
include_once 'db.php';
$db = new Db('unix');
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
    echo count(isset($_SESSION['carrito']));
}
?>