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

$conet = new Conexion();
$c = $conet->conectando();        
$query = "SELECT COUNT(*) AS totalRegistros FROM menu";
$resultado = mysqli_query($c, $query);
$arreglo = mysqli_fetch_array($resultado);
$totalRegistros = $arreglo['totalRegistros'];
//echo $totalRegistros;
 
$maximoRegistros = 6;
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
    $query2="select * from menu where id_menu like '%$obj->num_mesa%' limit $desde,$maximoRegistros";
    $resultado2=mysqli_query($c,$query2);
    $arreglo2 = mysqli_fetch_array($resultado2);
}else{
    $query2="select * from menu limit $desde,$maximoRegistros ";
    $resultado2=mysqli_query($c,$query2);
    $arreglo2 = mysqli_fetch_array($resultado2);
}

?>
 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Menú</title>
    <!-- Normalize V8.0.1 -->
    <link rel="stylesheet" href="./css/normalize.css">
    <!-- Bootstrap V4.3 -->
    <!--<link rel="stylesheet" href="./css/bootstrap.min.css">-->
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
                            <a href="reservacion.php"><em class="fa fa-tags" aria-hidden="true"></em> &nbsp; Hacer Reservación</a>
                        </li>
                        <li>
                            <a href="usuario/agendar_reserva.php"><em class="fa fa-bookmark" aria-hidden="true"></em> &nbsp; Reservaciones</a>                        
                        </li>
                        <li>
                            <a href="menu.php"><em class="fa fa-bars" aria-hidden="true"></em> &nbsp; Menú</a>                
                        </li>
                        <li>
                            <a href="usuario/company_usuario.php"><em class="fas fa-store-alt fa-fw"></em> &nbsp; Digital's Menu</a>
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
                <a class="btn-exit-system">
				<!-- el js del exit  onclick="return validar_cerrar (this.form)" href="../modelo/logout.php"-->
					<em class="fas fa-power-off"></em>
				</a>
            </nav>
            <!-- Page header -->
            <div class="full-box page-header">
                <h3 class="text-left">
                <em class="fa fa-bars" aria-hidden="true"></em> &nbsp; MENÚ
                </h3>              
            </div>
            <div class="container shadow p-3 mb-5 bg-body rounded " >
                   <div class="col">
                       <a href="reservacion.php">
                           <button type="button" class="btn btn-primary"><em class="fa fa-plus" aria-hidden="true"></em> Hacer reserva</button>                  
                       </a>
                   </div>                               
                <table class="table table-striped" style="text-align: center;">
                <thead><th></th></thead>
                    <div class="columnas">
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
                        <div class="table-responsive menu_usuario">
                            <img class="img_menu" src="<?php echo $arreglo2 [2];?>" alt="">
                            <div class="descripcion_menu">
                                <h5><?php echo $arreglo2 [1]?></h5>
                                <p>Descripción</p>
                                <button id="open-modal-btn-<?php echo $arreglo2 ['id_menu'];?>" class="open-modal-btn">ver mas</button>
                                <div id="myModal-<?php echo $arreglo2 ['id_menu']?>" class="modal">
                                  <div class="modal-content" style="width: 80%;">
                                    <span id="close-modal-btn-<?php echo $arreglo2 ['id_menu']?>" class="close">&times;</span>
                                    <img class="img_menu" src="<?php echo $arreglo2 [2]?>" alt="">
                                    <h2 style="position: absolute; left: 45%; top: 10%;"><?php echo $arreglo2 [1]?></h2>
                                    <p style="position: absolute; left: 45%; top: 120px;"><?php echo $arreglo2 [3]?></p>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            var openModalBtn_<?php echo $arreglo2 ['id_menu']?> = document.getElementById("open-modal-btn-<?php echo $arreglo2 ['id_menu']?>");
                            var modal_<?php echo $arreglo2 ['id_menu']?> = document.getElementById("myModal-<?php echo $arreglo2 ['id_menu']?>");

                            var closeModalBtn_<?php echo $arreglo2 ['id_menu']?> = document.getElementById("close-modal-btn-<?php echo $arreglo2 ['id_menu']?>");

                            openModalBtn_<?php echo $arreglo2 ['id_menu']?>.onclick = function() {
                                modal_<?php echo $arreglo2 ['id_menu']?>.style.display = "block";
                                setTimeout(function(){
                                    modal_<?php echo $arreglo2 ['id_menu']?>.classList.add('show');
                                }, 100);
                            };

                            closeModalBtn_<?php echo $arreglo2 ['id_menu']?>.onclick = function() {
                                modal_<?php echo $arreglo2 ['id_menu']?>.classList.remove('show');
                                setTimeout(function(){
                                    modal_<?php echo $arreglo2 ['id_menu']?>.style.display ="none";
                                }, 10);
                            };

                            window.onclick = function(event) {
                                if (event.target == modal_<?php echo $arreglo2 ['id_menu']?>) {
                                    modal_<?php echo $arreglo2 ['id_menu']?>.classList.remove('show');
                                    setTimeout(function(){
                                        modal_<?php echo $arreglo2 ['id_menu']?>.style.display = "none";
                                    }, 10);
                                }
                            };
                                                
                        </script>
                        <?php 
                                }while($arreglo2 = mysqli_fetch_array($resultado2));   
                                
                            }
                            
                            ?>
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
                            for($em=1; $em<=$totalPaginas; $em++){
                                if($em==$pagina){
                                    echo'<li class="page-item active" aria-current="page"><a class="page-link" href="?pagina='.$em.'">'.$em.'</a></li>';    
                                }
                                else{
                                    echo'<li class="page-item "><a class="page-link" href="?pagina='.$em.'">'.$em.'</a></li>';
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
                </table>
            </div>
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
