<?php 
/*
include("../../conexion/conectar.php");
include("../../controlador/reserva_con.php");
*/
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
                    Jose Angel Rosero Orozco <br><small class="roboto-condensed-light">Usuario</small>
					</figcaption>
				</figure>
				<div class="full-box nav-lateral-bar"></div>
				<nav class="full-box nav-lateral-menu">
					<ul>
						<li>
							<a href="cliente1.php"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard</a>
						</li>
						<li>
							<a href="reservacion.php"><i class="fa fa-tags" aria-hidden="true"></i> &nbsp; Hacer Reservacion</a>
						</li>
						<li>
							<a href="agendar_reserva.php"><i class="fa fa-bookmark" aria-hidden="true"></i> &nbsp; Reservaciones</a>						
						</li>
						<li>
							<a href="menu.php"><i class="fa fa-bars" aria-hidden="true"></i> &nbsp; Menu</a>				
						</li>
						<li>
							<a href="company_usuario.html"><i class="fas fa-store-alt fa-fw"></i> &nbsp; Digitals Menu</a>
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
                <a href="#" class="btn-exit-system">
                    <i class="fas fa-power-off"></i>
                </a>
            </nav>
            <!-- Page header -->
            <div class="full-box page-header">
                <h3 class="text-left">
                <i class="fa fa-tags" aria-hidden="true"></i> &nbsp; HACER RESERVACION
                </h3>              
            </div>
			<div class="container shadow p-3 mb-5 bg-body rounded">
                <table>
                    <thead>
                        <h3 style="text-align: center;">Datos de la reservacion</h3>
                    </thead><br>           
                        <div class="row">
                            <div class="col-md-3" id="informacion1">
                                Fecha
                            </div>
                            <div class="col" id="current_date"id></p>
                                <script>
                                    date = new Date();
                                    year = date.getFullYear();
                                    month = date.getMonth() + 1;
                                    day = date.getDate();
                                    document.getElementById("current_date").innerHTML = month + "/" + day + "/" + year;
                                </script>
                            </div>
                        </div><br>
                    <tbody>
                        <tr>
                            <div class="mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Numeno de reserva</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="reserva" name="reserva" value="001" readonly >
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Cliente</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="" value="José Angel Rosero Orozco" readonly >
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Celular</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="" value="3103867812" readonly >
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Correo</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="" value="joserosero@gmail.com" readonly >
                                </div>
                            </div>                           
                            <div class="mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Numero de mesa</label>
                                <div class="col-sm-10">
                                <input type="number" class="form-control" id="mesa" name="mesa" min="1" max="13">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Numero de personas</label>
                                <div class="col-sm-10">
                                <input type="number" class="form-control" id="personas" name="personas" min="1" max="13">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Dia de la reserva</label>
                                <div class="col-sm-10">
                                <input type="date" class="form-control" id="fecha" name="fecha" min=<?php $hoy=date("Y-m-d"); echo $hoy;?>>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Hora de la reserva</label>
                                <div class="col-sm-10">
                                <input type="time" class="form-control" id="hora" name="hora" min="11:00" max="21:00">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Observaciones</label>
                                <div class="col-sm-10">
                                <textarea class="form-control" id="observaciones" name="observaciones" rows="3"></textarea>
                                </div>
                            </div>
                        </tr>
                    </tbody>          
                </table>
                <div class="row" style="text-align: center;">
                    <div class="col">
                        <a href="agendar_reserva.php"><button class="btn btn-primary" name="guarda"><i class="fa fa-share-square-o" aria-hidden="true"> Enviar</i></button></a>
                    </div>
                    <div class="col">
                        <a href="mesas.html"><button class="btn btn-success"><i class="fa fa-table" aria-hidden="true"> Mesas</i></button></a>
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