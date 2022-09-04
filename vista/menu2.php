<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Menu2</title>
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
	<script src="./js/sweetalert2.min.js" ></script>
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
		<!-- Page content -->
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
					<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; MODIFICAR MENU
				</h3>			
			</div>		
			<!-- Content -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-2" id="menu">                
						<img src="../imagenes/menu1.jpg" alt="" width="100%" height="auto">              
					</div>
					<div class="col-md-2">
						<p id="menu1">Hamburguesa<br><br>• Pan<br>• Beicon<br>• Queso <br>• Cebolla <br>• Pepinillo<br>• Tomate <br>• Lechuga <br><i class="fa-solid fa-pen-clip"></i></p>
					</div>
					<div class="col-md-2" id="menu">
						<img src="../imagenes/menu2.jpg" alt="" width="100%" height="auto">
					</div>
					<div class="col-md-2">
						<p id="menu1">Tacos<br><br> • Carne ternera<br> • Cebolla pequeña<br> • Chile verde<br> • Chile seco<br> • Orégano<br> • Cilantro<br> • Tortillas de maíz<br><i class="fa-solid fa-pen-clip"></i></p>
					</div>
					<div class="col-md-2" id="menu">
						<img src="../imagenes/menu3.jpg" alt="" width="100%" height="auto">
					</div>
					<div class="col-md-2">
					  <p id="menu1">Sandwich<br><br>• Pan de molde<br>• Queso<br>• Filetes de pollo<br>• Lonchas bacon<br>• Lechuga fresca<br>• Lonchas de jamón<br> cocido<br>• Rodajas tomate<br><i class="fa-solid fa-pen-clip"></i></p>  
					</div>
				</div><br><br>
				<div class="row">
					<div class="col-md-2">
						<img src="../imagenes/menu4.jpg" alt="" width="100%" height="auto">
					</div>
					<div class="col-md-2">
						<p id="menu1">Burrito<br><br>• Tortillas de trigo<br>• Carne cerdo<br>• Pimiento verde<br>• Pimiento rojo<br>• Frijoles cocidos<br>• Queso rallado<br>• Pepinillos<br><i class="fa-solid fa-pen-clip"></i></p>
					</div>
					<div class="col-md-2">
						<img src="../imagenes/menu5.jpg" alt="" width="100%" height="auto">
					</div>
					<div class="col-md-2">
						<p id="menu1">Brazo de reina<br><br>• Huevo<br><br>• Harina de trigo<br>• Dulce de leche<br>• Arandanos<br>• Mermelada<br>• Frambuesas<br><i class="fa-solid fa-pen-clip"></i></p>
					</div>
					<div class="col-md-2">
						<img src="../imagenes/menu6.jpg" alt="" width="100%" height="auto">
					</div>
					<div class="col-md-2">
						<p id="menu1">Ensalada de pollo<br><br>• Pimiento rojo<br> • Lechuga fresca<br> • Tomates cherry<br>• Pechuga de pollo <br>• Aceitunas negras<br> rebanadas.<br><i class="fa-solid fa-pen-clip"></i></p>
					</div>
				</div>
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1">Previous</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#">Next</a>
						</li>
					</ul>
				</nav>
			</div>
		</section>
	</main>	
	<!--=============================================
	=            Include JavaScript files           =
	==============================================-->
	<!-- jQuery V3.4.1 -->	<script src="./js/jquery-3.4.1.min.js" ></script>
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