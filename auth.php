<?php
include_once 'db.php';
if (!isset($_SESSION))
  {
    session_start();
  } 
class Auth
{
    private $nombre;
    private $contraseña;
    private $admin;
    private $db;
    
    function __construct($usuario,$contraseña,$tipo)
    {
        $this->db = new Db('unix');
        $this->nombre=$usuario;
        $this->contraseña=$contraseña;
        $this->admin=$tipo;
    }
    function comprobar()
    //Funcion para verificar usuario y contraseña
    {
        $tipo='usuarios';
        if($this->admin==true)
        {
            $tipo='admin';
        }
        	$resultado = $this->db->sql("SELECT * FROM  `".$tipo."` WHERE  `usuario` LIKE '".$this->nombre."'");
            $num = $this->db->cantidad($resultado);
            if ($num==1)
            {
                //echo 'Usuario correcto';
                $row = mysql_fetch_array ($resultado);
                if ($this->nombre==$row['usuario'] && md5($this->contraseña)==$row['contrasena'])
                {
                    //echo ' Usuario contrasena correcta';
                    return $row;
                }else{
                    //echo ' Usuario contrasena incorrecta';
                    return false;
                }
            }
            else
            {
                //echo 'Usuario incorrecto';
                return false;
        }
        //echo $num;
    }
    function get_admin()
    {
        return $this->admin;
    }
    
}

//Fin de la clase


if($_GET['e']=='des')
{
    session_destroy();
    header("Location: index.php"); 
} 
elseif(!isset($_POST['usuario']) || !isset($_POST['contrasena']))
//Si no hay datos post de usuario y contraseña
{
    header("Location: index.php"); 
}
else{
    $usuario = new Auth($_POST['usuario'],$_POST['contrasena'],false);
    $datos=$usuario->comprobar();
    if(!$datos==false)
    {
        $_SESSION['auth']='true';
        $_SESSION['nombre']=$datos['nombre'];
        $_SESSION['apellido']=$datos['apellido'];
        header("Location: index.php?ok");
    }else
    {
        header("Location: index.php?a=error");
    }
}
?>