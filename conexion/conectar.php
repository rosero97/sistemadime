<?php
 
class conexion{
    private $servidor ="localhost";
    private $usuario ="root";
    private $password ="";
    private $db ="digitals_menu";

    public function conectando(){
        $con =mysqly_connect($this->$servidor, $this->$usuario, $this->$password, $this->$db) or die ("Error al conectar con la base de datos contactese con el administraor");
        return $con;
    }
}

$obj = new conexion();
    if($obj->conectando()){
        echo "esta conectado";
    }
//no me funciono aun
?>