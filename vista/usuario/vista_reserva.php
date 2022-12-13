<?php
session_start();
if(!isset($_SESSION['correo'])){
	header("Location: Iniciar Sesion-2.php");
}else{
    if($_SESSION['rolid'] !=2){
        header("Location: Iniciar Sesion-2.php");
    }
}

$persona=$_SESSION['id_persona'];

include("../../conexion/conectar.php");

$key=$_GET['key'];
//echo $key;
$conet = new Conexion();
$c = $conet->conectando();   
$query="SELECT * FROM numero_reservacion n INNER JOIN mesa m ON n.mesa_id=m.mesa_id INNER JOIN estado e ON n.id_estado=e.id_estado where id_cliente='$persona' AND n_reservacion='$key' ";
$resultado = mysqli_query($c, $query);
$arreglo = mysqli_fetch_array($resultado);
$obj->reserva = $arreglo[0];
//echo $obj->reserva;
//echo $totalRegistros;






?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Company</title>
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
							<a href="../reservacion.php"><i class="fa fa-tags" aria-hidden="true"></i> &nbsp; Hacer Reservacion</a>
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
                <a href="../../modelo/logout.php">
				<!-- el js del exit class="btn-exit-system" -->
					<i class="fas fa-power-off"></i>
				</a>
            </nav>
            <!-- Page header -->
            <div class="full-box page-header">
                <h3 class="text-left">
                <i class="fa fa-bookmark" aria-hidden="true"></i> &nbsp; RESERVACIONES
                </h3>              
            </div>
            <div class="container shadow p-3 mb-5 bg-body rounded " >
					<form action="" name="persona" method="POST">					
						<div class="table-responsive">
							<table class="table table-striped" style="text-align: center;">
								<tbody >
									<tr class="table-primary">                               
                                        <th style="color: black;">N° Reservación</th>
                                        <th style="color: black;">Cliente</th>
                                        <th style="color: black;">Identificacion</th>
                                        <th style="color: black;">Celular</th>
                                        <th style="color: black;">Correo</th>
                                        <th style="color: black;">N° Mesa</th>
                                        <th style="color: black;">N° Personas</th>
                                        <th style="color: black;">Observaciones</th>
                                        <th style="color: black;">Fecha y hora de la reservación</th>
										<th style="color: black;">Estado de la reservación</th>                           
									</tr>
										<?php
											if($arreglo==0){
												//echo "No existen Registros";
											?>
											<div class="alert alert-success" role="alert">
													<?php echo "No hay registros" ?>
											</div>
											<?php 
											}   
											 else{
												   
										   ?> 
									<tr>
                                        <td><?php echo $obj->reserva; ?></td>
										<td><?php echo $_SESSION['nombre_completo'];?></td>				
										<td><?php echo $_SESSION['id_persona'];?></td>				
										<td><?php echo $_SESSION['celular'];?></td>				
										<td><?php echo $_SESSION['correo'];?></td>				
										<td><?php echo $arreglo['num_mesa'] ?></td>				
										<td><?php echo $arreglo[5] ?></td>				
										<td><?php echo $arreglo[2] ?></td>				
										<td><?php echo $arreglo[1] ?></td>				
										<td><?php echo $arreglo['nombre_estado'] ?></td>				
									</tr>
									<?php
										($arreglo = mysqli_fetch_array($resultado));
									}
									?>
								</tbody>
							</table>						
						</div> 
					</form>				            
			<div class="table-responsive">
			    <div style="text-align: center;">
				<a href="agendar_reserva.php"><button class="btn btn-danger"><i class="fa fa-arrow-circle-left" aria-hidden="true"> Volver</i></button></a>
			    </div>
			</div>   
            </div>
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
</body>
</html>
