<?php 
    include("../modelo/registro_usuario.php");
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
</head>
<body>
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
		<footer>
			<ul class="footer-content" >
            <div class="columns">
					<a href="https://www.facebook.com/profile.php?id=100090155486140"><img src="imagenes/facebook.png"></a>     
					<a href="https://twitter.com/petrogustavo"><img src="imagenes/twitter.png"></a> 
					<a href="https://www.instagram.com/digitalsmenu/"><img src="imagenes/instagram.png"></a> 
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
</body>
</html>
