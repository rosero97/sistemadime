<?php
include("../conexion/conectar.php");
include("../controlador/cambio_contra_con.php");

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Cambio De Contraseña</title>
	<link rel="stylesheet" href="../config/est.css">
</head>
<body>
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<div class="logo">
				<h1>Digital´s Menu</h1>
			</div>			
		</div>
	</header>
	<div class="capa">
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
				<div class="contenedor">
					<div class="tregistro">
					    <div class="center">                           
                            <div class="inputBox">         
                            <h3>Ingrese su nueva contraseña</h3>
                                <form action="" method="Post">
                                    <div class="inputBox">
                                        <input type="email" placeholder="Ingrese su correo" name="correoRe" required/>
                                    </div>
                                    <div class="inputBox">
                                        <input type="password" placeholder="Ingrese su nueva contraseña" name="contrasena" required/>
                                    </div>
                                    <div class="inputBox">
                                        <input type="password" placeholder="Repita la Contraseña" name="contrasena1" required/>
                                    </div>
                                    <div class="inputBox">
                                        <input type="submit" value="Finalizar" name="modificaCo"/>
                                    </div>
                                </form>
                            </div>
				        </div>
			        </div>
			    </div>
		</section>
		<footer>
			<ul class="sci">
                <p>Digitals'Menu Todos los derechos reservados ®<br><br>               
                <a href="https://www.facebook.com/profile.php?id=100090155486140"><img src="../imagenes/facebook.png"></a>     
                <a href="https://twitter.com/petrogustavo"><img src="../imagenes/twitter.png"></a> 
                <a href="https://www.instagram.com/digitalsmenu/"><img src="../imagenes/instagram.png"></a> 
            </ul>
		</footer>

	</div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
            <a href="../index.html">Inicio</a>
            <a href="Iniciar Sesion-2.php">Iniciar Sesion</a>
            <a href="login/1.Tipo_Registro.html">Registrarse</a>
            <a href="inicio/Ayuda.html">Ayuda</a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>
</body>
</html>