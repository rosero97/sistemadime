<?php 

include("../conexion/conectar.php");
include("../controlador/menu_con.php");

session_start();
if(!isset($_SESSION['correo'])){
	header("Location: Iniciar Sesion-2.php");
}

$obj = new menu();

if($_POST){

    $obj->num_menu = $_POST['num_menu'];
    $obj->nombre = $_POST['nombre'];
    $obj->imagen = $_FILES['imagen']['tmp_name'];
    $obj->descripcion = $_POST['descripcion'];
    $obj->ida = $_POST['ida'];
}

$key=$_GET['key'];
echo $key;
$obj = new conexion();
$c=$obj->conectando();
$sql="select * from menu where id_menu='$key' ";
$rs=mysqli_query($c,$sql);
$array=mysqli_fetch_row($rs);
$obj->num_menu = $array[0];
$obj->nombre = $array[1];
$obj->imagen = $array[2];
$obj->descripcion = $array[3];
$obj->ida = $array[4];
echo $obj->num_menu;
echo $obj->nombre;
echo $obj->imagen;
echo $obj->descripcion;
echo $obj->ida;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Modificar Menu</title>
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
    <script src="../config/js/validar_menu.js"></script>
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
                    <?php echo $_SESSION['nombre_completo'];?> <br><small class="roboto-condensed-light">Administrador</small>
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
							<a href="menu2.php"><i class="fa fa-bars" aria-hidden="true"></i> &nbsp; Menu</a>				
						</li>
						<li>
							<a href="company.php"><i class="fas fa-store-alt fa-fw"></i> &nbsp; Digitals Menu</a>
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
                    <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; MODIFICAR PLATO
                </h3>
            </div>
            <div class="container shadow p-3 mb-5 bg-body rounded">
            <form action="" name="agregar_menu" method="POST" enctype="multipart/form-data">
                <table>
                    <tbody>
                        <tr>                            
                        <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Este es el ID del plato</span>
                                <input type="text" id="num_menu" value="<?php echo $obj->num_menu?>" name="num_menu" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" readonly placeholder="Este codigo lo creara el sistema automaticamente">
                            </div>
                            <br>
                            <div>
                                <span class="input-group-text" id="inputGroup-sizing-default">Digite el nombre del plato</span>
                                <input type="text" id="nombre" value="<?php echo $obj->nombre?>" name="nombre" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">    
                            </div>
                            <br>
                            <div>
                                <span class="input-group-text" id="inputGroup-sizing-default">Inserte la imagen</span>
                                <input type="file" id="imagen" value=" <?php echo $obj->imagen?>" name="imagen" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                <img width="100" src="<?php echo $obj->imagen; ?>">     
                            </div>
                            <br>
                            <div>
                                <span class="input-group-text" id="inputGroup-sizing-default">Digite la descripcion del plato</span>
                                <input type="text" id="descripcion" value="<?php echo $obj->descripcion?>" name="descripcion" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">    
                            </div>
                            <br>
                            <div>
                                <span class="input-group-text" id="inputGroup-sizing-default">Id del administrador</span>
                                <input type="text" id="ida" value="<?php echo $obj->ida?>" name="ida" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" readonly placeholder="En este espacio se incuira su id" >    
                            </div>                          
                        </tr>
                    </tbody>          
                </table>
            <div style="text-align:right;"> 
                <a href="menu2.php">
                    <button type="button" class="btn btn-danger"><i class="fa fa-ban" aria-hidden="true"> Cancelar</i></button>
                </a>    
                <button type="submit" name="modifica" class="btn btn-primary"  onclick="return validar_modificar_menu (this.form)" ><i class="fa fa-pencil-square-o" aria-hidden="true"> Modificar</i></button>      
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
