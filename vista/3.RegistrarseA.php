<?php
include("../modelo/registro_admin.php");

session_start();
if(!isset($_SESSION['codigo'])){
    header("Location: login/2.RAdmin.html");
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
<<<<<<< HEAD
	<meta charset="UTF-8">
	<title>Menù Lateral con Css</title>
	<link rel="stylesheet" href="../config/est.css">
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
                                <form action="../modelo/registro_admin.php" method="post">
                                    <h3>Registrate en Digital's Menú</h3>
                                    <div class="inputBox">
                                        <input type="text" name ="nombres" id="nombres" placeholder=" Ingrese su nombre completo" required>
                                    </div>
                                    <div class="inputBox">
                                        <label fot="tipodoc">Tipo de Documento:</label>
                                        <select name="tipodoc">
                                            <option value= "1">CC</option>
                                            <option value= "2">CE</option>
                                            <option value= "3">TI</option>
                                        </select>
                                        <input type="number" name ="numerodoc" id="numerodoc" placeholder=" Número de documento" required>
                                    </div>
                                    <div class="inputBox">
                                        <input type="email" name ="correo" id="correo" placeholder=" Ingrese su correo" required>
                                    </div>
                                    <div class="inputBox">
                                        <input type="tel" name ="numerocel" id="numerocel" placeholder=" Ingrese su número de celular">
                                    </div>
                                    <div class="inputBox">
                                        <input type="password" name ="contraseña" id="contraseña" placeholder=" Ingrese su contraseña" required>
                                    </div>
                                    <div class="inputBox">
                                        <input type="password" name ="contraseña2" id="contraseña2" placeholder=" Vuelva a ingresar su contraseña"required>      
                                    </div>
                                    <div class="inputBox">
                                        <input type="submit" value="Registrarse" id="Registrarse" name="Registrarse">
                                    </div>
                                </form>
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
=======
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../config/styles_Rea.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Registro administrador</title>
</head>
<body>
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
            <div class="container">
                <div class="form">
                    <form action="../modelo/registro_admin.php" method="post">
                        <h3>Registrate en Digital's Menú</h3>
                        <div class="inputBox">
                            <input type="text" name ="nombres" id="nombres" placeholder=" Ingrese su nombre completo" required>
                        </div>
                        <div class="inputBox">
                            <label fot="tipodoc">Tipo de Documento:</label>
                            <select name="tipodoc">
                                <option value= "1">CC</option>
                                <option value= "2">CE</option>
                                <option value= "3">TI</option>
                            </select>
                            <input type="number" name ="numerodoc" id="numerodoc" placeholder=" Número de documento" required>
                        </div>
                        <div class="inputBox">
                            <input type="email" name ="correo" id="correo" placeholder=" Ingrese su correo" required>
                        </div>
                        <div class="inputBox">
                            <input type="tel" name ="numerocel" id="numerocel" placeholder=" Ingrese su número de celular">
                        </div>
                        <div class="inputBox">
                            <input type="password" name ="contraseña" id="contraseña" placeholder=" Ingrese su contraseña" required>
                        </div>
                        <div class="inputBox">
                            <input type="password" name ="contraseña2" id="contraseña2" placeholder=" Vuelva a ingresar su contraseña"required>      
                        </div>
                        <div class="captcha">
                            <br><div class="g-recaptcha" data-sitekey="6Lc3VrgkAAAAAOWG62EL7rNcIxlMKO-eRaR9dl_W"></div>
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="Registrarse" id="Registrarse" name="Registrarse">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
>>>>>>> 5d830dec49221c01499648b08f92eb4b96423049
</body>
</html>