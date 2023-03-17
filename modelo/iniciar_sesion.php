<?php 

include_once("../conexion/conectar.php");

session_start();

$conet = new Conexion();
$con = $conet->conectando();   

if(isset($_GET['cerrar_sesion'])){
    session_unset();

    session_destroy();
}

if(isset($_POST['iniciar'])){
    $correo = $_REQUEST['correo'];
    $contraseña = $_REQUEST['contraseña'];

    //$correo=mysqli_real_escape_string($con, $_POST['correo']);
    //$contraseña=mysqli_real_escape_string($con, $_POST['contraseña']);
    
    $consulta = "SELECT * FROM persona  WHERE correo ='$correo'";

    $resultado=mysqli_query($con, $consulta );

    $fila = mysqli_fetch_assoc($resultado);

    $filas = mysqli_num_rows($resultado);

    if(($fila['rolid']==1) && (password_verify($contraseña, $fila['contrasena']))){
        //echo "Usted ha iniciado sesion correctamente";
        $_SESSION['id']=$fila['id'];
        $_SESSION['id_persona']=$fila['id_persona'];
        $_SESSION['nombre_completo']=$fila['nombre_completo'];
        $_SESSION['correo']=$fila['correo'];
        $_SESSION['celular']=$fila['celular'];
        $_SESSION['fcod_tipo_doc']=$fila['fcod_tipo_doc'];
        $_SESSION['rolid']=$fila['rolid'];

        header("Location: ../vista/administrador.php");

    }else{
        if(($fila['rolid']==2) && (password_verify($contraseña, $fila['contrasena']))){
    
            $_SESSION['id']=$fila['id'];
            $_SESSION['id_persona']=$fila['id_persona'];
            $_SESSION['nombre_completo']=$fila['nombre_completo'];
            $_SESSION['correo']=$fila['correo'];
            $_SESSION['celular']=$fila['celular'];
            $_SESSION['fcod_tipo_doc']=$fila['fcod_tipo_doc'];
            $_SESSION['rolid']=$fila['rolid'];
        
            header("Location: ../vista/usuario/cliente1.php");
        
        }else{
            echo "<script> alert('Usted ha cometido algun error, Verifique los datos de sesion '); window.location.href='../vista/Iniciar Sesion-2.php';</script>";
        }
    }
}
?>
