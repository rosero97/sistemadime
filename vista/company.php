<?php
session_start();
if(!isset($_SESSION['correo'])){
	header("Location: Iniciar Sesion-2.php");
}else{
    if($_SESSION['rolid'] !=1){
        header("Location: Iniciar Sesion-2.php");
    }
}

include("../conexion/conectar.php");
 
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
	<!-- Bootstrap Material Design V4.0 Conflicto con boostrap-->
	<link rel="stylesheet" href="./css/bootstrap-material-design.min.css">
    <!-- General Styles -->
    <link rel="stylesheet" href="./css/style.css">
    <!--Esta parte nos trae los iconos de configuracion -->
    <script src="https://kit.fontawesome.com/8606130a5f.js" crossorigin="anonymous"></script>
    <!--Esta parte nos hacearreglar las tablas alfabeticamente <script src="js/java.js"></script>-->
	
    <!-- Sweet Alerts V8.13.0 CSS file -->
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <!-- Sweet Alert V8.13.0 JS file-->
    <script src="js/sweetalert2.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="table/bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="table/datatables/config/main.css">  
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="table/datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="table/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
           
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<script src="../config/js/cerrar.js"></script>
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
                    <?php echo $_SESSION['nombre_completo'];?> <br><small class="roboto-condensed-light"><b>ADMINISTRADOR</b></small>
					</figcaption>
				</figure>
				<div class="full-box nav-lateral-bar"></div>
				<nav class="full-box nav-lateral-menu">
					<ul>
						<li>
							<a href="administrador.php"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard</a>
						</li>
						<li>
							<a href="usuarioadmin.php"><i class="fas fa-users fa-fw"></i> &nbsp; Usuarios</a>
						</li>
						<li>
							<a href="reservaciones.php"><i class="fa fa-bookmark" aria-hidden="true"></i> &nbsp; Reservaciones</a>						
						</li>
						<li>
							<a href="mesas.php"><i class="fa fa-table" aria-hidden="true"></i> &nbsp; Mesas</a>					
						</li>
						<li>
							<a href="menu2.php"><i class="fa fa-bars" aria-hidden="true"></i> &nbsp; Menú</a>				
						</li>
						<li>
							<a href="company.php"><i class="fas fa-store-alt fa-fw"></i> &nbsp; Digital's Menu</a>
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
                <a href="admin.php">
                    <i class="fas fa-user-cog"></i>
                </a>
                <a class="btn-exit-system">
				<!-- el js del exit  onclick="return validar_cerrar (this.form)" href="../modelo/logout.php"-->
					<i class="fas fa-power-off"></i>
				</a>
            </nav>
            <!-- Page header -->
            <div class="full-box page-header">
                <h3 class="text-left">
                    <i class="fas fa-building fa-fw"></i> &nbsp; DIGITAL'S MENU
                </h3>              
            </div>
            <div class="container shadow p-3 mb-5 bg-body rounded">
                <table>
                    <tbody>
                        <div>
                            <tr>
                                <td>Slogan</td>
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
                                    <td><img width="100" src="<?php echo $arreglo[7]; ?>"></td>
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
                                <td>Digital's  Menu</td>
                            </tr>
                        </div>
                    </tbody>                    
                </table>
                <br>
                <div class="row" style="text-align: center;">
                    <div class="col">
                        <a href="company_modificar.php"><button type="submit" class="btn btn-primary" name="guarda"><i class="fa fa-pencil-square-o" aria-hidden="true"> Modificar</i></button></a>
                    </div>
                    <div class="col">
                        <a href="administrador.php"><button type="button" class="btn btn-danger"><i class="fa fa-arrow-circle-left" aria-hidden="true"> Volver</i></button></a>
                    </div>
                </div>            
            <div>
        </section>
    </main>
    <!--=============================================
	=            Include JavaScript files           =
	==============================================-->
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="table/jquery/jquery-3.3.1.min.js"></script>
    <script src="table/popper/popper.min.js"></script>
    <script src="table/bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="table/datatables/datatables.min.js"></script>    
     
    <!-- para usar botones en datatables JS -->  
    <script src="table/datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
    <script src="table/datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="table/datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="table/datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="table/datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
     
    <!-- código JS propìo-->    
    <script type="text/javascript" src="table/datatables/config/main.js"></script>

    <!--Esta parte nos da la funcionalidad del menu -->
	<script src="./js/main.js" ></script>
</body></html>