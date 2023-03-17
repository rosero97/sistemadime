<?php
session_start();
if(!isset($_SESSION['correo'])){
   header("Location: Iniciar Sesion-2.php");
}else{
   if($_SESSION['rolid'] !=2){
       header("Location: Iniciar Sesion-2.php");
   }
}
include_once("../conexion/conectar.php");
include_once("../controlador/reserva_con.php");


$conet = new Conexion();
$c = $conet->conectando();
$query = "SELECT COUNT(*) AS totalRegistros FROM mesa";
$resultado = mysqli_query($c, $query);
$arreglo = mysqli_fetch_array($resultado);
$totalRegistros = $arreglo['totalRegistros'];
//echo $totalRegistros;


$maximoRegistros = 200;
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
   $query2="select * from mesa where mesa_id like '%$obj->mesa_id%' limit $desde,$maximoRegistros";
   $resultado2=mysqli_query($c,$query2);
   $arreglo2 = mysqli_fetch_array($resultado2);
}else{
   $query2="select * from mesa limit $desde,$maximoRegistros ";
   $resultado2=mysqli_query($c,$query2);
   $arreglo2 = mysqli_fetch_array($resultado2);
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <title>Hecer Reservación</title>
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
   <script src="../config/js/validar_reserva.js"></script>
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
                   <img src="assets/avatar/Avatar.png" class="img-fluid" alt="Avatar">
                   <figcaption class="roboto-medium text-center">
                   <?php echo $_SESSION['nombre_completo'];?> <br><small class="roboto-condensed-light"><strong>USUARIO</strong></small>
                   </figcaption>
               </figure>
               <div class="full-box nav-lateral-bar"></div>
               <nav class="full-box nav-lateral-menu">
                   <ul>
                       <li>
                           <a href="usuario/cliente1.php"><em class="fab fa-dashcube fa-fw"></em> &nbsp; Dashboard</a>
                       </li>
                       <li>
                           <a href="reservacion.php"><em class="fa fa-tags" aria-hidden="true"></em> &nbsp; Hacer Reservacion</a>
                       </li>
                       <li>
                           <a href="usuario/agendar_reserva.php"><em class="fa fa-bookmark" aria-hidden="true"></em> &nbsp; Reservaciones</a>
                       </li>
                       <li>
                           <a href="menu.php"><em class="fa fa-bars" aria-hidden="true"></em> &nbsp; Menu</a>
                       </li>
                       <li>
                           <a href="usuario/company_usuario.php"><em class="fas fa-store-alt fa-fw"></em> &nbsp; Digitals Menu</a>
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
               <a href="usuario/usuario.php">
                   <em class="fas fa-user-cog"></em>
               </a>
               <a onclick="return validar_cerrar (this.form)" href=" ../modelo/logout.php">
               <!-- el js del exit class="btn-exit-system" -->
                   <em class="fas fa-power-off"></em>
               </a>
           </nav>
           <!-- Page header -->
           <div class="full-box page-header">
               <h3 class="text-left">
               <em class="fa fa-tags" aria-hidden="true"></em> &nbsp; HACER RESERVACION
               </h3>
           </div>
           <div class="container shadow p-3 mb-5 bg-body rounded">
           <form action="" name="reservacion" method="POST" enctype="multipart/form-data" onsubmit="return validate();">
               <table class="table-responsive">
                   <thead><th></th>
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
                               <input type="text" class="form-control" id="reserva" name="reserva" placeholder="Este codigo lo creara el sistema automaticamente" readonly >
                               </div>
                           </div>
                           <div class="mb-3 row">
                               <label for="" class="col-sm-2 col-form-label">Cliente</label>
                               <div class="col-sm-10">
                               <input type="text" class="form-control" id="" value=" <?php echo $_SESSION['nombre_completo'];?>" readonly >
                               </div>
                           </div>
                           <div class="mb-3 row">
                               <label for="" class="col-sm-2 col-form-label">Celular</label>
                               <div class="col-sm-10">
                               <input type="text" class="form-control" id="" value=" <?php echo $_SESSION['celular'];?>" readonly >
                               </div>
                           </div>
                           <div class="mb-3 row">
                               <label for="" class="col-sm-2 col-form-label">Correo</label>
                               <div class="col-sm-10">
                               <input type="text" class="form-control" id="" value=" <?php echo $_SESSION['correo'];?>" readonly >
                               </div>
                           </div>
                           <div class="mb-3 row">
                               <label for="" class="col-sm-2 col-form-label">N° Documento</label>
                               <div class="col-sm-10">
                               <input type="text" id="num_persona" name="num_persona" class="form-control" readonly value="<?php echo $_SESSION['id_persona'];?>">
                               </div>
                           </div>
                           <div class="inputBox mb-3 row">
                               <label fot="mesa" class="col-sm-2 col-form-label">Numero de mesa</label>
                               <div class="col-sm-10">
                                   <select name="mesa" class="form-control">
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
                                       <div class="form-control">
                                           <option value="<?php echo $arreglo2 [0]?>">Mesa <?php echo $arreglo2 [1]?></option>
                                       </div>
                                       </div>
                                   <?php
                                       }while($arreglo2 = mysqli_fetch_array($resultado2));


                                       }


                                   ?>
                                   </select>
                               </div>
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
                               <?php
                                   date_default_timezone_set('America/Bogota');
                                   $fechaActual = date('Y-m-d');
                               ?>
                               <input type="date"  min="<?php echo $fechaActual;?>" class="form-control" id="fecha" name="fecha">
                               </div>
                           </div>
                           <div class="mb-3 row">
                               <label for="" class="col-sm-2 col-form-label">Hora de la reserva</label>
                               <div class="col-sm-10">
                               <input type="time" class="form-control" id="hora" name="hora">
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
                       <a href="#"><button type="submit" class="btn btn-primary" name="guarda" onclick="return validar_reserva(this.form)"><em class="fa fa-share-square-o" aria-hidden="true" > Enviar</em></button></a>
                   </div>
                   <div class="col">
                       <a href="usuario/cliente1.php"><button type="button" class="btn btn-danger"><em class="fa fa-ban" aria-hidden="true"> Cancelar</em></button></a>
                   </div>
               </div>
           </form>
           <script type="text/javascript">
               function validate() {
                   var hora = document.getElementById('hora').value;
                   var fecha = document.getElementById('fecha').value;
                   var minimumTime = '';

                   if (fecha == '<?php echo date('Y-m-d');?>') {
                       var now = new Date();
                       now.setHours(now.getHours() + 2);
                       minimumTime = now.getHours() + ':' + now.getMinutes();
                   } else {
                       minimumTime = '00:00';
                   }

                   if (hora >= minimumTime && hora >= '11:00' && hora <= '20:00') {
                       return true;
                   } else {
                       Swal.fire({
                           icon: "error",
                           title: "¡ERROR!",
                           text: "El restaurante solo admite reservas desde las 11:00 hasta las 20:00 y con al menos 2 horas de anticipación a partir de la hora actual si se reserva para hoy (" + minimumTime + ")",
                           showConfirmButton: true,
                           confirmButtonText: "ACEPTAR"
                       });
                       return false;
                   }
               }
           </script>
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
</body>
</html>


