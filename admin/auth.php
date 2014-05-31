<?php
include_once '../db.php';
session_start();
if($_GET['e']=='des' && $_SESSION['admin']=='true')
{
    session_destroy();
    header("Location: index.php"); 
} 
class Auth
{
    private $nombre;
    private $contraseña;
    private $db;
    
    function __construct($usuario,$contraseña,$tipo)
    {
        $this->db = new Db('unix');
        $this->nombre=$this->encriptar($usuario);
        $this->contraseña=$this->encriptar($contraseña);
        $this->admin=$tipo;
    }
    public static function encriptar($dato) 
    {
        return base64_encode($dato);
    }
 
    public static function desencriptar($dato) 
    {
        return  base64_encode($dato);
    }
    function comprobar()
    //Funcion para verificar usuario y contraseña
    {
        	$resultado = $this->db->sql("SELECT * FROM  `admin` WHERE  `usuario` LIKE '".$this->nombre."'");
            $num = $this->db->cantidad($resultado);
            if ($num==1)
            {
                //echo 'Usuario correcto';
                $row = mysql_fetch_array ($resultado);
                
                if ($this->nombre==$row['usuario'] && $this->contraseña==$row['contrasena'])
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
if(!isset($_POST['usuario']) || !isset($_POST['contrasena']))
//Si no hay datos post de usuario y contraseña
{
    header("Location: login.php?error=vacio");
    exit(); 
}
else{
    $usuario = new Auth($_POST['usuario'],$_POST['contrasena'],false);
    $datos=$usuario->comprobar();
    if(!$datos==false)
    {
        $_SESSION['admin']='true';
        $_SESSION['nombre']=$datos['nombre'];
        $_SESSION['apellido']=$datos['apellido'];
        header("Location: index.php");
        exit(); 
    }else
    {
        header("Location: login.php?error=incorrecto");
        exit(); 
    }
}
?>