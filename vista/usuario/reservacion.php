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
                <form action="agendar_reserva.php" method="post">
                    <div class="container">
                        <div class="row">
                            <div class="col" id="segparte1">
                                Datos de la reservacion 
                            </div>     
                        </div>
                        <div class="row">
                            <div class="col-md-3" id="informacion1">
                                Identificacion
                            </div>
                            <div class="col" id="informacion">
                                1001095170
                            </div>
                            <div class="col-md-3" id="informacion1">
                                Fecha
                            </div>
                            <div class="col" id="current_date"></p>
                                <script>
                                    date = new Date();
                                    year = date.getFullYear();
                                    month = date.getMonth() + 1;
                                    day = date.getDate();
                                    document.getElementById("current_date").innerHTML = month + "/" + day + "/" + year;
                                </script>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3" id="informacion1">
                                Cliente
                            </div>
                            <div class="col" id="informacion">
                                José Angel Rosero Orozco
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3" id="informacion1">
                                Direccion
                            </div>
                            <div class="col" id="informacion">
                                Calle 45 Sur # 51 - 29G
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3" id="informacion1">
                                Telefono
                            </div>
                            <div class="col" id="informacion">
                                3103867812 
                            </div>
                            <div class="col-md-3" id="informacion1">
                                Email
                            </div>
                            <div class="col" id="informacion">
                                joserosero@gmail.com
                            </div>
                        </div><br><br>
                        <table class="table table-striped-columns">
                            <div class="row">
                                <div class="col-md-3" id="informacion1">
                                    <label for="observaciones" class="">Observaciones</label>
                                </div>
                                <div class="col-md-9">    
                                    <textarea id="colobser" name="colobser" rows="2" cols="100%" autofocus ></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col" id="segparte1">
                                            Numero de mesa
                                        </div>
                                        <div class="col" id="segparte">
                                            <input type="number" id="nmesa" name="nmesa" min="1" max="8">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col" id="segparte1">
                                            Numero de personas
                                        </div>
                                        <div class="col" id="segparte">
                                            <input type="number" id="nper" name="nper" min="1" max="13">
                                        </div>
                                    </div>   
                                </div>
                                <div class="col-md-6" id="segparte">
                                    <div class="row">
                                        <div class="col" id="segparte">
                                            Dia de la reserva
                                        </div>
                                        <div class="col" id="segparte">
                                            <input type="date" name="fecha" id="fecha"  required min=<?php $hoy=date("Y-m-d"); echo $hoy;?> >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col" id="segparte">
                                        Hora de la reserva 
                                        </div>
                                        <div class="col" id="segparte">
                                            <input type="time" id="hora" name="hora" min="11:00" max="21:00"> 
                                        </div>                      
                                    </div>
                                </div>               
                            </div>
                        </table>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col" id="der2">
                                <input type="submit" id="Consultar" name="submit" value="Consultar" onclick="alert('Su reservacion fue exitosa')"/>
                            </div>
                            <div class="col-md-6" id="der2">
                                <a href="mesas.html" target="">Vista previa de las mesas</a>
                            </div>
                        </div>
                    </div>   
                </form>  
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