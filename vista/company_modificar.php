<?php
session_start();
if(!isset($_SESSION['correo'])){
	header("Location: Iniciar Sesion-2.php");
}else{
    if($_SESSION['rolid'] !=1){
        header("Location: Iniciar Sesion-2.php");
    }
}

include_once("../conexion/conectar.php");
include_once("../controlador/res_con.php");


$obj = new conexion();
$c=$obj->conectando();
$sql="select * from restaurante where id_res=1";
$rs=mysqli_query($c,$sql);
$array=mysqli_fetch_row($rs);
if($array==0){
    //echo "No hay registros";
}else{
    $obj->imagen = $array[7];
}

$slo="SELECT * FROM restaurante";
$consul = mysqli_query($c, $slo);
$restau = mysqli_fetch_array($consul);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Modificar Datos Del Restaurante</title>
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
    <script src="../config/js/validar_form.js"></script>
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
					<em class="far fa-times-circle show-nav-lateral"></em>
					<img src="<?php echo $restau["slogan"] ?>" class="img-fluid" alt="Avatar">
					<figcaption class="roboto-medium text-center">
                    <?php echo $_SESSION['nombre_completo'];?> <br><small class="roboto-condensed-light"><strong>ADMINISTRADOR</strong></small>
					</figcaption>
				</figure>
				<div class="full-box nav-lateral-bar"></div>
				<nav class="full-box nav-lateral-menu">
					<ul>
						<li>
							<a href="administrador.php"><em class="fab fa-dashcube fa-fw"></em> &nbsp; Dashboard</a>
						</li>
						<li>
							<a href="usuarioadmin.php"><em class="fas fa-users fa-fw"></em> &nbsp; Usuarios</a>
						</li>
						<li>
							<a href="reservaciones.php"><em class="fa fa-bookmark" aria-hidden="true"></em> &nbsp; Reservaciones</a>						
						</li>
						<li>
							<a href="mesas.php"><em class="fa fa-table" aria-hidden="true"></em> &nbsp; Mesas</a>					
						</li>
						<li>
							<a href="menu2.php"><em class="fa fa-bars" aria-hidden="true"></em> &nbsp; Menú</a>				
						</li>
						<li>
							<a href="company.php"><em class="fas fa-store-alt fa-fw"></em> &nbsp; Digital's Menu</a>
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
                <a href="admin.php">
                    <em class="fas fa-user-cog"></em>
                </a>
                <a class="btn-exit-system">
				<!-- el js del exit  onclick="return validar_cerrar (this.form)" href="../modelo/logout.php"-->
					<em class="fas fa-power-off"></em>
				</a>
            </nav>
            <!-- Page header -->
            <div class="full-box page-header">
                <h3 class="text-left">
                    <em class="fas fa-building fa-fw"></em> &nbsp; DIGITAL'S MENU
                </h3>              
            </div>
            <div class="container shadow p-3 mb-5 bg-body rounded">
            <form action="" name="company_modificar" method="POST" enctype="multipart/form-data">    
                <table>
                    <div class="col">
                        <a href="company_agregar.php">
                            <button type="button" class="btn btn-primary"><em class="fa fa-plus" aria-hidden="true"></em> Agregar</button> 
                        </a>
                    </div>
                    <thead><th></th>
                        <h3 style="text-align: center;">Datos del restaurante</h3>
                    </thead>
                    <br>
                    <tbody>
                        <tr>                        
                            <div class="mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Nombre del restaurante</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="nombre" name="nombre">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Dirección</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="direccion" name="direccion">
                                </div>
                            </div>                            
                            <div class="mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Telefono</label>
                                <div class="col-sm-10">
                                    
                                <input type="text" class="form-control" id="telefono" name="telefono">
                                </div>
                            </div>                            
                            <div class="mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Correo</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="correo" name="correo">
                                </div>
                            </div>                            
                            <div class="mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Horario</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="hora" name="hora">
                                </div>
                            </div>                           
                            <div class="mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Encargado</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="encargado" name="encargado" readonly value="<?php echo $_SESSION['id_persona'];?>">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                        <span for="" class="col-sm-2 col-form-label">Inserte la imagen</span>
                                        <div class="col-sm-10" >
                                            <input type="file" id="imagen" value=" <?php echo $obj->imagen?>" name="imagen" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div><br>
                                        <div  class="col-sm-12" style="text-align: center;">
                                            <?php
                                                if($array==0){
                                                //echo "No existen Registros";
                                            ?>
                                                <div class="alert alert-success" role="alert">
                                                    <?php echo "No hay registros" ?>
                                                </div>
                                            <?php 
                                                }else{
                                            ?>
                                                <td><img width="100" src="<?php echo $obj->imagen; ?>" alt=""></td>
                                            <?php
                                                }
                                            ?> 
                                             
                                        </div>
                                    </div>                           
                        </tr>
                    </tbody>          
                </table>
                <div class="row" style="text-align: center;">
                <div class="col">
                        <a href="#"><button type="submit" class="btn btn-primary" name="modifica" onclick="return validar_modificar_company(this.form)"><em class="fa fa-pencil-square-o" aria-hidden="true"> Modificar</em></button></a>
                    </div>
                    <div class="col">
                        <a href="company.php"><button type="button" class="btn btn-danger"><em class="fa fa-ban" aria-hidden="true"> Cancelar</em></button></a>
                    </div>
                </div>
            </form>
        </section>
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
</body></html>