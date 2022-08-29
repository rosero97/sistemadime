<?php
 
class conexion{
    private $servidor ="localhost";
    private $usuario ="root";
    private $password ="";
    private $db ="digitals_menu";
    public function conectando(){
        $con = mysqli_connect($this->servidor, $this->usuario, $this->password, $this->db) or die ("Error al conectar con la base de datos contactese con el administraor");
        return $con;
    }
}
$obj = new conexion();
    if($obj->conectando()){
        echo "esta conectado";
    }


/*
$servername = "localhost";
$username = "root";
$password = "";
$db = "digitals_menu";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
*/
?>
