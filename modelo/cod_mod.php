<?php 

include("../conexion/conectar.php");

session_start();

$conet = new Conexion();
$con = $conet->conectando();   

if(isset($_GET['cerrar'])){
    session_unset();

    session_destroy();
}

if(isset($_POST['cod_enviar'])){

    $codigo = $_REQUEST['codigo'];
    
    $consulta = "SELECT * FROM peticion WHERE codigo ='$codigo'";

    $ejecutar=mysqli_query($con, $consulta);

    $resultado = mysqli_fetch_assoc($ejecutar);

    if($resultado){
        $_SESSION['id_codigo']=$resultado['id_codigo'];
        $_SESSION['codigo']=$resultado['codigo'];
        $_SESSION['fecha_codigo']=$resultado['fecha_codigo'];

        header("Location: ../vista/3.RegistrarseA.php");

    }else{
            echo "<script> alert('Usted ha cometido algun error, Verifique los datos'); window.location.href='../vista/cod_registro.php';</script>";
        }
    
}
?>
