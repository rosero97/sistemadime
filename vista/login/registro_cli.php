<?php 

    include 'conectar.php';

    $nombre_completo = $_POST ['nombres'];
    $correo = $_POST ['correo'];
    $contrasena = $_POST ['contraseña'];
    $fcod_tipo_doc = $_POST ['numerocod'];
    $celular = $_POST ['numerocel'];

    $query = "INSERT INTO persona(nombre_completo, correo, celular, contrasena, fcod_tipo_doc)
              values(´nombre_completo','correo','celular','contrasena','fcod_tipo_doc')";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("usuario registrado con exito")
            window.location = "../RegistrarseC.php";
            </script>
        ';
    }else{
        echo '
        
            <script>
                alert("intenta de nuevo,usuario no registrado");
                window.location = "../RegistrarseC.php";
            </script>
        ';
    }

        mysqli_close($conectar);
?>