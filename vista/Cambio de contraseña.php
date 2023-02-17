<?php
include("../conexion/conectar.php");
include("../controlador/cambio_contra_con.php");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <div class="form">
            <h2>Digital's Menu</h2>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Menu de Navegación</title>
        <link rel="stylesheet" href="../config/style1.css">
   <body>
        </div>
        <header class="header">
            <div class="container">
                <div class="btn-menu">
                    <label for="btn-menu">☰</label>
        </header>
        <div class="capa">
            <input type="checkbox" id="btn-menu">
            <div class="container-menu">
                <div class="cont-menu">
                    <section>
                    <nav>
                        <a href="../index.html">Inicio</a>
                        <a href="login/1.Tipo_Registro.html">Registrarse</a>
                        <a href="Iniciar Sesion-2.php">Iniciar Sesion</a>
                        <a href="inicio/Ayuda.html">Ayuda</a>
                    </nav>
                </section>

    </body>
            </div>
            </div>
        </header>
</head>
<body>
    <section>
        <link rel="stylesheet" href="../config/login.css">
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="contenedor">
                <div class="form">
                    <h2>Ingrese su nueva contraseña</h2>
                    <form action="" method="Post">
                        <div class="inputBox">
                            <input type="email" placeholder="Ingrese su correo" name="correoRe"/>
                        </div>
                        <div class="inputBox">
                            <input type="password" placeholder="Ingrese su nueva contraseña" name="contrasena"/>
                        </div>
                        <div class="inputBox">
                            <input type="password" placeholder="Repita la Contraseña" name="contrasena1" />
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="Finalizar" name="modificaCo"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
