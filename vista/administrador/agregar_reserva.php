<?php 

include("../../conexion/conectar.php");
//include("../../controlador/#");

//$obj = new num_menu();
if($_POST){

    $obj->reserva = $_POST['n_reserva'];
    $obj1->fecha = $_POST['fecha_hora'];
    $obj2->mesa = $_POST['num_mesa'];
    $obj3->personas = $_POST['num_personas'];
    $obj4->encargado = $_POST['ide_encargado'];
    $obj5->cliente = $_POST['ide_cliente'];

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Agregar mesa</title>
    <!-- Normalize V8.0.1 -->
    <link rel="stylesheet" href="./css/normalize.css">
    <!-- Bootstrap V4.3 -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- Bootstrap Material Design V4.0 -->
    <link rel="stylesheet" href="./css/bootstrap-material-design.min.css">
    <!-- Font Awesome V5.9.0 -->
    <link rel="stylesheet" href="./css/all.css">
    <!-- Sweet Alerts V8.13.0 CSS file -->
    <link rel="stylesheet" href="./css/sweetalert2.min.css">
    <!-- Sweet Alert V8.13.0 JS file-->
    <script src="./js/sweetalert2.min.js"></script>
    <!-- jQuery Custom Content Scroller V3.1.5 -->
    <link rel="stylesheet" href="./css/jquery.mCustomScrollbar.css">
    <!-- General Styles -->
    <link rel="stylesheet" href="./css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8606130a5f.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Main container -->
    <main class="full-box main-container">
        <!-- Nav lateral -->
		<section class="full-box nav-lateral">
			<div class="full-box nav-lateral-bg show-nav-lateral"></div>
			<div class="full-box nav-lateral-content">
				<figure class="full-box nav-lateral-avatar">
					<i class="far fa-times-circle show-nav-lateral"></i>
					<img src="./assets/avatar/Avatar.png" class="img-fluid" alt="Avatar">
					<figcaption class="roboto-medium text-center">
						Juan Camilo Tocarruncho Ariza <br><small class="roboto-condensed-light">Administrador</small>
					</figcaption>
				</figure>
				<div class="full-box nav-lateral-bar"></div>
				<nav class="full-box nav-lateral-menu">
					<ul>
						<li>
							<a href="administrador.html"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard</a>
						</li>
						<li>
							<a href="usuarioadmin.html"><i class="fas fa-users fa-fw"></i> &nbsp; Usuarios</a>
						</li>
						<li>
							<a href="reservaciones.php"><i class="fa fa-bookmark" aria-hidden="true"></i> &nbsp; Reservaciones</a>						
						</li>
						<li>
							<a href="mesas.php"><i class="fa fa-table" aria-hidden="true"></i> &nbsp; Mesas</a>					
						</li>
						<li>
							<a href="menu2.html"><i class="fa fa-bars" aria-hidden="true"></i> &nbsp; Menu</a>				
						</li>
						<li>
							<a href="company.html"><i class="fas fa-store-alt fa-fw"></i> &nbsp; Digitals Menu</a>
						</li>
					</ul>
				</nav>
			</div>
		</section>
        <section class="full-box page-content">
            <nav class="full-box navbar-info">
                <a href="#" class="float-left show-nav-lateral">
                    <i class="fas fa-exchange-alt"></i>
                </a>
                <a href="#">
                    <i class="fas fa-user-cog"></i>
                </a>
                <a href="#" class="btn-exit-system">
                    <i class="fas fa-power-off"></i>
                </a>
            </nav>
            <!-- Page header -->
            <div class="full-box page-header">
                <h3 class="text-left">
                    <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; AGREGAR RESERVACION
                </h3>
            </div>
            <div class="container shadow p-3 mb-5 bg-body rounded">
            <form action="" name="agregar_reserva" method="POST" >
                <table>
                    <tbody>
                        <tr>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Numero de reservacion</span>
                                <input type="text" id="n_reserva" name="n_reserva" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="El numero se genera automaticamente">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Ingrese la fecha y hora</span>
                                <input type="text" id="fecha_hora" name="fecha_hora" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Ingrese el numero de mesa</span>
                                <input type="text" id="num_mesa" name="num_mesa" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Ingrese el numero de personas</span>
                                <input type="text" id="num_personas" name="num_personas" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Ingrese el id del encargado</span>
                                <input type="text" id="ide_encargado" name="ide_encargado" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Ingrese el id del cliente</span>
                                <input type="text" id="ide_cliente" name="ide_cliente" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </tr>
                    </tbody>          
                </table>
            <div style="text-align:right;"> 
                <a href="reservaciones.php">
                    <button type="button"><i class="fa fa-ban" aria-hidden="true"> Cancelar</i></button>
                </a>        
                <button type="submit" name="guarda"><i class="fa fa-floppy-o" aria-hidden="true"> Guardar</i></button>
            </div>
            </form>
            <br>
            </div>
        </section>
    </main>  	
	<!--=============================================
	=            Include JavaScript files           =
	==============================================-->
	<!-- jQuery V3.4.1 -->
	<script src="./js/jquery-3.4.1.min.js" ></script>
	<!-- popper -->
	<script src="./js/popper.min.js" ></script>
	<!-- Bootstrap V4.3 -->
	<script src="./js/bootstrap.min.js" ></script>
	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<script src="./js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<!-- Bootstrap Material Design V4.0 -->
	<script src="./js/bootstrap-material-design.min.js" ></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
	<script src="./js/main.js" ></script>
</body>
</html>