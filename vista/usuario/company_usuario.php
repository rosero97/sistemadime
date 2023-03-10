<?php
session_start();
if(!isset($_SESSION['correo'])){
	header("Location: Iniciar Sesion-2.php");
}else{
    if($_SESSION['rolid'] !=2){
        header("Location: Iniciar Sesion-2.php");
    }
}

include("../../conexion/conectar.php");
 
$conet = new Conexion();
$c = $conet->conectando();        
$query = "SELECT * FROM  restaurante";
$resultado = mysqli_query($c, $query);
$arreglo = mysqli_fetch_array($resultado);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Datos Del Restaurante</title>
    <!-- Normalize V8.0.1 -->
    <link rel="stylesheet" href="../css/normalize.css">
    <!-- Bootstrap V4.3 -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Bootstrap Material Design V4.0 -->
    <link rel="stylesheet" href="../css/bootstrap-material-design.min.css">
    <!-- Font Awesome V5.9.0 -->
    <link rel="stylesheet" href="../css/all.css">
    <!-- Sweet Alerts V8.13.0 CSS file -->
    <link rel="stylesheet" href="../css/sweetalert2.min.css">
    <!-- Sweet Alert V8.13.0 JS file-->
    <script src="../js/sweetalert2.min.js"></script>
    <!-- jQuery Custom Content Scroller V3.1.5 -->
    <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.css">
    <!-- General Styles -->
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8606130a5f.js" crossorigin="anonymous"></script>
    <script src="../../config/js/cerrar.js"></script>
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
					<img src="../assets/avatar/Avatar.png" class="img-fluid" alt="Avatar">
					<figcaption class="roboto-medium text-center">
                    <?php echo $_SESSION['nombre_completo'];?> <br><small class="roboto-condensed-light">Usuario</small>
					</figcaption>
				</figure>
				<div class="full-box nav-lateral-bar"></div>
				<nav class="full-box nav-lateral-menu">
					<ul>
						<li>
							<a href="cliente1.php"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard</a>
						</li>
						<li>
							<a href="../reservacion.php"><i class="fa fa-tags" aria-hidden="true"></i></i> &nbsp; Hacer Reservacion</a>
						</li>
						<li>
							<a href="agendar_reserva.php"><i class="fa fa-bookmark" aria-hidden="true"></i> &nbsp; Reservaciones</a>						
						</li>
						<li>
							<a href="../menu.php"><i class="fa fa-bars" aria-hidden="true"></i> &nbsp; Menu</a>				
						</li>
						<li>
							<a href="company_usuario.php"><i class="fas fa-store-alt fa-fw"></i> &nbsp; Digitals Menu</a>
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
                <a href="usuario.php">
                    <i class="fas fa-user-cog"></i>
                </a>
                <a class="btn-exit-system">
				<!-- el js del exit  onclick="return validar_cerrar (this.form)" href="../../modelo/logout.php"-->
					<i class="fas fa-power-off"></i>
				</a>
            </nav>
            <!-- Page header -->
            <div class="full-box page-header">
                <h3 class="text-left">
                    <i class="fas fa-store-alt fa-fw"></i> &nbsp; DIGITALS MENU
                </h3>              
            </div>
            <div class="container shadow p-3 mb-5 bg-body rounded">
                <table>
                    <tbody>
                    <div>
                            <tr>
                                <td>Nombre del restaurante</td>
                            </tr>
                            <tr>
                                <?php
                                    if($arreglo==0){
                                    //echo "No existen Registros";
                                ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo "No hay registros" ?>
                                    </div>
                                <?php 
                                    }else{
                                ?>
                                    <td><h1><?php echo $arreglo[1]?></h1></td>
                                <?php
                                    }
                                ?> 
                            </tr>
                            <tr>
                                <td>Nombre del restaurante</td>
                            </tr>
                            <tr>
                                <?php
                                    if($arreglo==0){
                                    //echo "No existen Registros";
                                ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo "No hay registros" ?>
                                    </div>
                                <?php 
                                    }else{
                                ?>
                                    <td><?php echo $arreglo[1]?></td>
                                <?php
                                    }
                                ?> 
                            </tr>
                            </div>
                            <tr>
                                <td>Dirección</td>
                            </tr>
                            <tr>
                                <?php
                                    if($arreglo==0){
                                    //echo "No existen Registros";
                                ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo "No hay registros" ?>
                                    </div>
                                <?php 
                                    }else{
                                ?>
                                    <td><?php echo $arreglo[2]?></td>
                                <?php
                                    }
                                ?> 
                            </tr>
                            <tr>
                                <td>Telefono</td>
                            </tr>
                            <tr>
                                <?php
                                    if($arreglo==0){
                                    //echo "No existen Registros";
                                ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo "No hay registros" ?>
                                    </div>
                                <?php 
                                    }else{
                                ?>
                                    <td><?php echo $arreglo[3]?></td>
                                <?php
                                    }
                                ?> 
                            </tr>
                            <tr>
                                <td>Correo</td>
                            </tr>
                            <tr>
                                <?php
                                    if($arreglo==0){
                                    //echo "No existen Registros";
                                ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo "No hay registros" ?>
                                    </div>
                                <?php 
                                    }else{
                                ?>
                                    <td><?php echo $arreglo[4]?></td>
                                <?php
                                    }
                                ?> 
                            </tr>
                            <tr>
                                <td>Horario</td>
                            </tr>
                            <tr>
                                <?php
                                    if($arreglo==0){
                                    //echo "No existen Registros";
                                ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo "No hay registros" ?>
                                    </div>
                                <?php 
                                    }else{
                                ?>
                                    <td><?php echo $arreglo[5]?></td>
                                <?php
                                    }
                                ?> 
                            </tr>
                            <tr>
                                <td>Digital´s  Menu</td>
                            </tr>
                        </div>
                    </tbody>                    
                </table>
            <div>     
        </section>
    </main>
    <!--=============================================
	=            Include JavaScript files           =
	==============================================-->
    <!-- jQuery V3.4.1 -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <!-- popper -->
    <script src="../js/popper.min.js"></script>
    <!-- Bootstrap V4.3 -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- jQuery Custom Content Scroller V3.1.5 -->
    <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Bootstrap Material Design V4.0 -->
    <script src="../js/bootstrap-material-design.min.js"></script>
    <script>
        $(document).ready(function() {
            $('body').bootstrapMaterialDesign();
        });
    </script>
    <script src="../js/main.js"></script>
</body></html>