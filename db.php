<?php
    /***********************************************************
    // Autor: Facundo Rubin                                
    // Fecha: 05/03/2013                                    
    // Version: 0.5-03/13
    *           0.6-05/14
    ****************************************************/
class Db{
    private $servidor;
    private $nombreDeUsuario;
    private $contrasena;
    private $nombreBD;

    private $conexion;//Almacena el enlace con la Base de Datos una vez establecido
    
    public function __construct($db)
    {
        $this->servidor='localhost';
        $this->nombreDeUsuario='root';
        $this->contrasena='1234';
        $this->nombreBD= $db;
    } 
    private function conectar()
    {
       $this->conexion = mysql_connect($this->servidor, $this->nombreDeUsuario, $this->contrasena);

        if($this->conexion){
            //echo 'La conexion de la base de datos se ha hecho satisfactoriamente';
        }else{
            echo 'Ha sucedido un error inexperado en la conexion de la base de datos';
        }
    }
    private function seleccionar()
    {
        $this->enlace=mysql_select_db($this->nombreBD);
            if (!$this->enlace) {
                die('No pudo selecionar: ' . mysql_error());
            }
            //echo 'Seleccion satisfactoriamente';
    }
    public function cerrar()
    {
        mysql_close($this->conexion);
    }
    public function cantidad($consulta)
    {
        $numero_filas = mysql_num_rows($consulta);
        return $numero_filas;
    }
    public function sql($consulta)
    {
        $this->conectar();
        $this->seleccionar();
        if($row = mysql_query($consulta))
        {
            $this->cerrar();
            return $row;
        }else{
            echo "Error al realizar la consulta!";
            exit();
        }
    }
}
?>