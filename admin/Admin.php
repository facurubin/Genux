<?php
include_once '../db.php';
class Admin
{
    private $nombre;
    private $contraseña;
    private $db;
    
    function __construct($usuario,$contraseña)
    {
        $this->db = new Db('unix');
        $this->comprobar($usuario,$contraseña);
    }
    function comprobar($usuario,$contraseña)
    //Funcion para verificar usuario y contraseña
    {
    	$resultado = $this->db->sql("SELECT * FROM  `admin` WHERE  `usuario` LIKE '".$usuario."'");
        $num = $this->db->cantidad($resultado);
        if ($num==1)
        {
            //echo 'Usuario correcto';
            $row = mysql_fetch_array ($resultado);
            if ($usuario==$row['usuario'] and md5($contraseña)==$row['contrasena'])
            {
                //echo ' Usuario contrasena correcta';
                return true;
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
    
}
$usuario = new Admin('roost','1234');
?>