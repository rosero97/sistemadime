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
    <!-- Bootstrap Material Design V4.0 ESTE ES EL QUE DAÑA LOS BOTONES DEL NAV PERO TAMBIEN EL DE CERRAR Y ABIR EL MENU-->
    <link rel="stylesheet" href="../css/bootstrap-material-design.min.css">
    <!-- General Styles -->
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8606130a5f.js" crossorigin="anonymous"></script>
	<script src="../../config/js/cerrar.js"></script>
	onclick="return validar_cerrar (this.form)"
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
                <a onclick="return validar_cerrar (this.form)" href="../../modelo/logout.php">
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
							<table class="table table-dark table-sm"style="text-align: center;">
								<thead>                               
                                        <th>N° Reservación</th>
                                        <th>Cliente</th>
                                        <th>Identificacion</th>
                                        <th>Celular</th>
                                        <th>Correo</th>
                                        <th>N° Mesa</th>
                                        <th>N° Personas</th>
                                        <th>Observaciones</th>
                                        <th>Fecha y hora de la reservación</th>
										<th>Estado de la reservación</th>                           
									</tr>
								</thead>
								<tbody class="table-secondary">
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
			    <div class="col" style="text-align: center;">
				<a href="agendar_reserva.php"><button class="btn btn-danger"><i class="fa fa-arrow-circle-left" aria-hidden="true"> Volver</i></button></a>
			    </div>
			</div>   
            </div>
        </section>
    </main>
    <!--=============================================
	=            Include JavaScript files           =
	==============================================-->
    <!-- jQuery V3.4.1 ESTE ES EL MENU LATERAL-->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <!-- jQuery Custom Content Scroller V3.1.5 -->
    <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script>
        $(document).ready(function() {
            $('body').bootstrapMaterialDesign();
        });
    </script>
    <script src="../js/main.js"></script>
</body>
</html>
