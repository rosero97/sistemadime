<?php 

include("../modelo/iniciar_sesion.php")

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Menù Lateral con Css</title>
	<link rel="stylesheet" href="../config/est.css">
	<script src="https://kit.fontawesome.com/8606130a5f.js" crossorigin="anonymous"></script>
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
      <nav class="menu">
				<a href="inicio/Ayuda.html"><i class="fa fa-question-circle fa-4x" aria-hidden="true"></i></a>
			</nav>		
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
		<a id="fa" href="../index.html"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
      	<a id="fa" href="Iniciar Sesion-2.php" ><i class="fa fa-sign-in" aria-hidden="true"></i> Iniciar Sesion</a>
      	<a id="fa" href="login/1.Tipo_Registro.html"><i class="fa fa-user-plus" aria-hidden="true"></i> Registrarse</a>
	</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>
</body>
</html>
