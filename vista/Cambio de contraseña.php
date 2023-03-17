<?php
include_once("../conexion/conectar.php");
include_once("../controlador/cambio_contra_con.php");

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
				<label for="btn-menu"><strong>☰</strong></label>
			</div>
			<div class="logo">
				<h1><strong>Digital's Menu</strong></h1>	
			</div>
		</div>
	</header>
	<div class="capa">
		<section>
			<div class="color"></div>
			<div class="color"></div>
			<div class="color"></div>
			<div class="box">
				<div class="square" style="--em:0;"></div>
				<div class="square" style="--em:1;"></div>
				<div class="square" style="--em:2;"></div>
				<div class="square" style="--em:3;"></div>
				<div class="square" style="--em:4;"></div>
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
		<footer class="pie-pagina">
			<div class="grupo-1">
				<div class="box">
					<figure>
						<a href="">
							<img src="../imagenes/Logo.png" alt="logo de digitalsmenu">
						</a>
					</figure>
				</div>
				<div class="box">
					<h2>SOBRE NOSOTROS</h2>
					<p>Digital's Menu, el mejor sitio para la reserva de tu mesa sin filas y con la mejor comodidad.</p>
				</div>
				<div class="box">
					<h2>SIGUENOS</h2>
					<div class="red-social">
						<a href="https://www.facebook.com/profile.php?id=100090155486140"><em class="fa fa-facebook-official" aria-hidden="true"></em></a>
						<a href="#"><em class="fa fa-twitter-square" aria-hidden="true"></em></a>
						<a href="https://www.instagram.com/digitalsmenu/"><em class="fa fa-instagram" aria-hidden="true"></em></a>
					</div>
				</div>
				<div class="box">
					<h2>AYUDA</h2>
					<div class="ayuda">
						<a id="fa" href="../vista/inicio/Ayuda.html"><em class="fa fa-question-circle fa-4x" aria-hidden="true"></em></a>
					</div>
				</div>				
			</div>
			<div class="grupo-2">
				<small>&copy; 2023 <strong>Digital's Menu</strong> - Todos los Derechos Reservados.</small>
			</div>
		</footer>

	</div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
	<nav>
		<a id="fa" href="../index.html"><em class="fa fa-home" aria-hidden="true"></em> Inicio</a>
      	<a id="fa" href="Iniciar Sesion-2.php" ><em class="fa fa-sign-in" aria-hidden="true"></em> Iniciar Sesión</a>
      	<a id="fa" href="login/1.Tipo_Registro.html"><em class="fa fa-user-plus" aria-hidden="true"></em> Registrarse</a>
	</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>
</body>
</html>
