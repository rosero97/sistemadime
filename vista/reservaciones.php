<?php
include("../conexion/conectar.php");

if($_POST)
{
    $obj->n_reservacion = $_POST['n_reservacion'];

}
$conet = new Conexion();
$c = $conet->conectando();   
$query="SELECT COUNT(*) AS totalRegistros FROM numero_reservacion";
$resultado = mysqli_query($c, $query);
$arreglo = mysqli_fetch_array($resultado); 
$totalRegistros = $arreglo['totalRegistros'];
//echo $totalRegistros;

$maximoRegistros = 5;
//echo $totalRegistros;
if(empty($_GET['pagina'])){
    $pagina=1;
}else{
    $pagina=$_GET['pagina'];
}
$desde = ($pagina-1)*$maximoRegistros;
$totalPaginas=ceil($totalRegistros/$maximoRegistros);
//echo $totalPaginas;

if(isset($_POST['search'])){
    echo "llegue";
    $query2="SELECT * FROM numero_reservacion n INNER JOIN encargado e ON n.ide_encargado = e.t_encargado INNER JOIN cliente c ON n.ide_cliente = c.t_cliente where n_reservacion like '%$obj->n_reservacion%' limit $desde,$maximoRegistros";
    $resultado2=mysqli_query($c,$query2);
    $arreglo2 = mysqli_fetch_array($resultado2);
}else{
    $query2="SELECT * FROM numero_reservacion n INNER JOIN encargado e ON n.ide_encargado = e.t_encargado INNER JOIN cliente c ON n.ide_cliente = c.t_cliente limit $desde,$maximoRegistros ";
    $resultado2=mysqli_query($c,$query2);
    $arreglo2 = mysqli_fetch_array($resultado2);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Reservaciones</title>
    <!-- Normalize V8.0.1 -->
    <link rel="stylesheet" href="./css/normalize.css">
    <!-- Bootstrap V4.3 -->
    <!--<link rel="stylesheet" href="./css/bootstrap.min.css">-->
    <!-- Bootstrap Material Design V4.0 -->
    <link rel="stylesheet" href="./css/bootstrap-material-design.min.css">
    <!-- Font Awesome V5.9.0 -->
    <!--<link rel="stylesheet" href="./css/all.css">-->
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
                    <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; VER RESERVACIONES
                </h3>
            </div>
			<div class="container shadow p-3 mb-5 bg-body rounded " >
					<form action="" name="numero_reservacion" method="POST">
						<nav class="navbar navbar-expand-lg bg-light">
							<div class="container-fluid">
								<form class="d-flex" role="search">
									<input class="form-control me-2" type="search" name="n_reservacion"  placeholder="Digite el Nombre o Código de la Reservacion" aria-label="Search">
									 <button class="btn btn-outline-success" name="search"  type="submit"> Buscar</button>
								</form>
							</div>
						</nav>
						<br>
						<div class="table-responsive">
							<table class="table table-striped" style="text-align: center;">
								<tbody >
									<tr class="table-primary">
										<td>Reservacion N°</td>
										<td>Fecha y Hora</td>
										<td>Numero de mesa</td>
										<td>Numero de personas</td>
										<td>Encargado</td>
										<td>Cliente</td>	
									</tr>
										<?php
											if($arreglo2==0){
												//echo "No existen Registros";
											?>
											<div class="alert alert-success" role="alert">
													<?php echo "No hay registros" ?>
											</div>
											<?php 
											}   
											 else{
												do{   
										   ?> 
									<tr>
										<td><?php echo $arreglo2[0] ?></td>
										<td><?php echo $arreglo2[1] ?></td>
										<td><?php echo $arreglo2[2] ?></td>
										<td><?php echo $arreglo2[3] ?></td>
										<td><?php echo $arreglo2["ide_encargado"] ?></td>
										<td><?php echo $arreglo2["ide_cliente"] ?></td>							
									</tr>
									<?php
										}while($arreglo2 = mysqli_fetch_array($resultado2));
									}
									?>
								</tbody>
							</table>						
						</div>    
						<nav aria-label="Page navigation example">
							<ul class="pagination justify-content-end">
								<?php 
								if($pagina!=1){
								?>
								<li class="page-item ">
									<a class="page-link" href="?pagina=<?php echo 1; ?>"><</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="?pagina=<?php echo $pagina-1; ?>"><<</a>
								</li>
								<?php
								}
								for($i=1; $i<=$totalPaginas; $i++){
									if($i==$pagina){
										echo'<li class="page-item active" aria-current="page"><a class="page-link" href="?pagina='.$i.'">'.$i.'</a></li>';    
									}
									else{
										echo'<li class="page-item "><a class="page-link" href="?pagina='.$i.'">'.$i.'</a></li>'; 
									}
								}
								if($pagina !=$totalPaginas){
								?>
								
								<li class="page-item">
									<a class="page-link" href="?pagina=<?php echo $pagina+1; ?>">>></a>
								</li>
								<li class="page-item">
									<a class="page-link" href="?pagina=<?php echo $totalPaginas; ?>">></a>
								</li>
								<?php
								}
								?>
							</ul>
						</nav>
					</form>
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
	<!--<script src="./js/bootstrap.min.js" ></script>-->
	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<script src="./js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<!-- Bootstrap Material Design V4.0 -->
	<!--<script src="./js/bootstrap-material-design.min.js" ></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>-->
	<script src="./js/main.js" ></script>
</body>
</html>