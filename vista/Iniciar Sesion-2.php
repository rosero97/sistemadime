<?php 

include("../modelo/iniciar_sesion.php")

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión Administrador</title>
    <link rel="stylesheet" href="../config/style1.css">
        <div class="hola mundo">
            <center><img src="../imagenes/digital-.png" alt=""></center>
        </div>
        
    </div>
    <header>
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="../index.html">Inicio</a></li>
                    <li><a href="login/1.Tipo_Registro.html">Registrarse</a></li>
                    <li><a href="Iniciar Sesion-2.php">Iniciar Sesion</a></li>
                    <li><a href="inicio/Ayuda.html">ayuda</a></li>
                </ul>
            </nav>
        </div>
    </header>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../config/login.css">
</head><!DOCTYPE html>
<html lang="es">
<body>
    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="container">
                <div class="form">
                    <h2>Iniciar Sesión</h2>
                    <form action="../modelo/iniciar_sesion.php" method="post">
                    <form action="administrador.html" method="post">
                        <div class="inputBox">
                            <input type="email" name="correo" placeholder="Correo electronico" required/>
                        </div>
                        <div class="inputBox">
                            <input type="password" name="contraseña" placeholder="Contraseña" required/>
                        </div>
                        <div class="inputBox">
                            <input type="submit" name="iniciar" value="Iniciar Sesion" />
                        </div>
                        <p class="forget">
                            ¿Has olvidado tu contraseña? <a href="login/recuperar.html">Recuperar contraseña</a>
                        </p>

                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
