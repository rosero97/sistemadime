<?php 

include("../modelo/iniciar_sesion.php")

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Menù Lateral con Css</title>
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
			<ul class="footer-content" >
            <div class="columns">
					<a href="https://www.facebook.com/profile.php?id=100090155486140"><img src="../imagenes/facebook.png"></a>     
					<a href="https://twitter.com/petrogustavo"><img src="../imagenes/twitter.png"></a> 
					<a href="https://www.instagram.com/digitalsmenu/"><img src="../imagenes/instagram.png"></a> 
				</div>
				<div class="columns">
					<p>Digitals'Menu Todos los derechos reservados ®</p>
				</div>
				<div class="columns">
					<p>Somos Digital's menu, el mejor sitio para la reserva de tu mesa</p>
					<p>con la mejor comodidad</p>
				</div>
			</div>
            </ul>
		</footer>

	</div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
	<nav>
		<a href="../index.html"><img src="../../sistemadime-master/imagenes/house.jpg" style="width: 20px; margin-right: 10px;">Inicio</a>
        <a href="../vista/Iniciar Sesion-2.php" ><img src="../../sistemadime-master/imagenes/sesion.jpg" style=" width: 20px; margin-right: 10px;">Iniciar Sesion</a>
        <a href="../vista/login/1.Tipo_Registro.html"><img src="../../sistemadime-master/imagenes/registrarse-2.png" style="width: 20px; margin-right: 10px;">Registrarse</a>
        <a href="../vista/inicio/Ayuda.html"><img src="../../sistemadime-master/imagenes/ayuda.jpg" style=" width: 20px; margin-right: 10px;">Ayuda</a>
	</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>
</body>
</html>
