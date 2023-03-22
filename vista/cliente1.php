<?php
session_start();
if(!isset($_SESSION['correo'])){
	header("Location: Iniciar Sesion-2.php");
}else{
    if($_SESSION['rolid'] !=2){
        header("Location: Iniciar Sesion-2.php");
    }
}

include_once("../conexion/conectar.php");

$conet = new Conexion();
$c = $conet->conectando();

$slo="SELECT * FROM restaurante";
$consul = mysqli_query($c, $slo);
$restau = mysqli_fetch_array($consul);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Inicio Usuario</title>
    <!-- Normalize V8.0.1 -->
    <link rel="stylesheet" href="./css/normalize.css">
    <!-- Bootstrap V4.3 -->
    <!--<link rel="stylesheet" href="./css/bootstrap.min.css">-->
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
    <script src="./config/js/cerrar.js"></script>
<body>
    <!-- Main container -->
    <main class="full-box main-container">
        <!-- Nav lateral -->
		<section class="full-box nav-lateral">
			<div class="full-box nav-lateral-bg show-nav-lateral"></div>
			<div class="full-box nav-lateral-content">
			<figure class="full-box nav-lateral-avatar">
					<em class="far fa-times-circle show-nav-lateral"></em>
					<img src="<?php echo $restau["slogan"] ?>" class="img-fluid" alt="Avatar">
					<figcaption class="roboto-medium text-center">
                    <?php echo $_SESSION['nombre_completo'];?> <br><small class="roboto-condensed-light"><strong>USUARIO</strong></small>
					</figcaption>
				</figure>
				<div class="full-box nav-lateral-bar"></div>
				<nav class="full-box nav-lateral-menu">
					<ul>
						<li>
							<a href="cliente1.php"><em class="fab fa-dashcube fa-fw"></em> &nbsp; Dashboard</a>
						</li>
						<li>
							<a href="./reservacion.php"><em class="fa fa-tags" aria-hidden="true"></em> &nbsp; Hacer Reservación</a>
						</li>
						<li>
							<a href="agendar_reserva.php"><em class="fa fa-bookmark" aria-hidden="true"></em> &nbsp; Reservaciones</a>						
						</li>
						<li>
							<a href="./menu.php"><em class="fa fa-bars" aria-hidden="true"></em> &nbsp; Menú</a>				
						</li>
						<li>
							<a href="company_usuario.php"><em class="fas fa-store-alt fa-fw"></em> &nbsp; Digital's Menu</a>
						</li>
					</ul>
				</nav>
			</div>
		</section>
        <section class="full-box page-content">
			<nav class="full-box navbar-info">
				<a href="#" class="float-left show-nav-lateral">
					<em class="fas fa-exchange-alt"></em>
				</a>
				<a href="usuario.php">
					<em class="fas fa-user-cog"></em>
				</a>
				<a class="btn-exit-system">
				<!-- el js del exit  onclick="return validar_cerrar (this.form)" href="../../modelo/logout.php"-->
					<em class="fas fa-power-off"></em>
				</a>
			</nav>
			<!-- Page header -->
			<div class="full-box page-header">
				<h3 class="text-left">
					<em class="fab fa-dashcube fa-fw"></em> &nbsp; DASHBOARD
				</h3>
			</div>
			<!-- Content -->
			<div class="full-box tile-container">
				<a href="./reservacion.php" class="tile">
					<div class="tile-tittle">Hacer Reservación</div>
					<div class="tile-icon">
					<em class="fa fa-tags fa-6x" aria-hidden="true"></em>					
					</div>
				</a>
				<a href="agendar_reserva.php" class="tile">
					<div class="tile-tittle">Reservaciones</div>
					<div class="tile-icon">
						<em class="fa fa-bookmark fa-6x" aria-hidden="true"></em>						
					</div>
				</a>
				<a href="./menu.php" class="tile">
					<div class="tile-tittle">Menú</div>
					<div class="tile-icon">
						<em class="fa fa-bars fa-6x" aria-hidden="true"></em>
					</div>
				</a>
				<a href="company_usuario.php" class="tile">
					<div class="tile-tittle">Digital's Menu</div>
					<div class="tile-icon">
						<em class="fas fa-store-alt fa-6x"></em>
					</div>
				</a>
			</div>	
    </main>
    <!--=============================================
	=            Include JavaScript files           =
	==============================================-->
    <!-- jQuery V3.4.1 -->
    <script src="./js/jquery-3.4.1.min.js"></script>
    <!-- popper -->
    <script src="./js/popper.min.js"></script>
    <!-- Bootstrap V4.3 -->
    <script src="./js/bootstrap.min.js"></script>
    <!-- jQuery Custom Content Scroller V3.1.5 -->
    <script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Bootstrap Material Design V4.0 -->
    <script src="./js/bootstrap-material-design.min.js"></script>
    <script>
        $(document).ready(function() {
            $('body').bootstrapMaterialDesign();
        });
    </script>
    <script src="./js/main.js"></script>
</body>
</html>