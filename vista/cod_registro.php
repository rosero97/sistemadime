<?php 

include("../modelo/cod_mod.php")

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <div class="tregistro">
            <h3>Digital's Menu</h3>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Codigo Registro Administrador</title>
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
    <section>
        <link rel="stylesheet" href="../config/styles_Ra.css">
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
                <div class="tregistro">
                    <h3>Registrate en Digital's Menú</h3>
                    <h4>Administrador</h4>
                    <form action="" method="post">
                        <div class="inputBox">
                            <p style="text-align: left;">El equipo de Digital Menú esta analizando la petición de registro, si su correo es el indicado en unos momentos se le enviara a dicho correo el codigo para que pueda continuar con el registro.</p><br>
                            <input type="text" name="codigo" id="codigo" placeholder="Ingrese el codigo de verificación" required>
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="Enviar" id="cod_enviar" name="cod_enviar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
