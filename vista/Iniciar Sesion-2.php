<?php 

include("../modelo/iniciar_sesion.php")

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Iniciar Sesión</title>
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
                            <h3>Iniciar Sesión</h3>
                            <form action="../modelo/iniciar_sesion.php" method="post">
                                <div class="inputBox">
                                    <input type="email" name="correo" placeholder="Correo electronico" required/>
                                </div>
                                <div class="inputBox">
                                    <input type="password" name="contraseña" placeholder="Contraseña" required/>
                                </div>
                                <div class="inputBox">
                                    <input type="submit" name="iniciar" value="Iniciar Sesion" />
                                </div><br>
                                <p class="forget">
                                    ¿Has olvidado tu contraseña? <a href="recuperar.php">Recuperar contraseña</a>
                                </p>   
                            </form>
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
