<?php 
    include_once("../modelo/registro_usuario.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro Usuario</title>
	<link rel="stylesheet" href="../config/est.css">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<!-- Sweet Alerts V8.13.0 CSS file -->
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <!-- Sweet Alert V8.13.0 JS file-->
    <script src="js/sweetalert2.min.js"></script>
	<script src="../config/js/validar_form.js"></script>
	<script src="https://kit.fontawesome.com/8606130a5f.js" crossorigin="anonymous"></script>
</head>
<body>
<header class="header">
		<div class="container">	
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
                                <form action="../modelo/registro_usuario.php" method="post" action="php/registro_usuario.php">
                                    <h3>Registrate en Digital's Menú</h3>
                                    <div class="inputBox">
                                        <input type="text" name ="nombres" id="nombres" placeholder="Ingrese su nombre completo" >
                                    
                                    </div>
                                    <div class="inputBox">
                                        <label fot="tipodoc" style="color:white">Tipo de Documento:</label>
                                        <select name="tipodoc">
                                            <option value="1">CC</option>
                                            <option value="2">CE</option>
                                            <option value="3">TI</option>
                                        </select>
                                    </div>    
                                    <div class="inputBox">
                                        <input type="number" name ="numerodoc" id="numerodoc" placeholder=" Número de documento" >
                                    </div>
                                    <div class="inputBox">
                                        <input type="email" name ="correo" id="correo" placeholder=" Ingrese su correo" >
                                    </div>
                                    <div class="inputBox">
                                        <input type="tel" name ="numerocel" id="numerocel" placeholder=" Ingrese su número de celular">
                                    </div>
                                    <div class="inputBox">
                                        <input type="password" name ="contraseña" id="contraseña" placeholder=" Ingrese su contraseña" >
                                    </div>
                                    <div class="inputBox">
                                        <input type="password" name ="contraseña2" id="contraseña2" placeholder=" Vuelva a ingresar su contraseña">      
                                    </div><br>
				                    <div class="captcha">
                            		    <div class="g-recaptcha" data-sitekey="6Lc3VrgkAAAAAOWG62EL7rNcIxlMKO-eRaR9dl_W"></div>
                        	        </div>
                                    <div class="inputBox">
                                        <input type="submit" value="Registrarse" name="Registrarse" id="Fregi" onclick="return validar_usuario(this.form)">
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
</body>
</html>
