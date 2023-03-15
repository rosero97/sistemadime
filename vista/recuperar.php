<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Recuperar Contraseña</title>
	<link rel="stylesheet" href="../config/est.css">
	<script src="https://kit.fontawesome.com/8606130a5f.js" crossorigin="anonymous"></script>
</head>
<body>
<header class="header">
		<div class="container">
		<div class="btn-menu">
				<label for="btn-menu"><b>☰</b></label>
			</div>
			<div class="logo">
				<h1><b>Digital's Menu</b></h1>	
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
                                <h3>Recuperar contraseña</h3>
                                <form action="Codigo.php" method="Post">
                                    <div class="inputBox">
                                        <input type="email" placeholder="Correo electronico" name="correo" required />
                                    </div>
                                    <div class="inputBox">
                                        <input type="submit" value="Enviar" />
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
						<a href="https://www.facebook.com/profile.php?id=100090155486140"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
						<a href="https://www.instagram.com/digitalsmenu/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="box">
					<h2>AYUDA</h2>
					<div class="ayuda">
						<a id="fa" href="../vista/inicio/Ayuda.html"><i class="fa fa-question-circle fa-4x" aria-hidden="true"></i></a>
					</div>
				</div>				
			</div>
			<div class="grupo-2">
				<small>&copy; 2023 <b>Digital's Menu</b> - Todos los Derechos Reservados.</small>
			</div>
		</footer>

	</div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
	<nav>
		<a id="fa" href="../index.html"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
      	<a id="fa" href="Iniciar Sesion-2.php" ><i class="fa fa-sign-in" aria-hidden="true"></i> Iniciar Sesión</a>
      	<a id="fa" href="login/1.Tipo_Registro.html"><i class="fa fa-user-plus" aria-hidden="true"></i> Registrarse</a>
	</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>
</body>
</html>