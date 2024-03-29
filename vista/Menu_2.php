<?php

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
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Menú</title>
    <link rel="icon" type="image/png" href="../imagenes/slogan.png">
    <link rel="stylesheet" href="./css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8606130a5f.js" crossorigin="anonymous"></script>
</head>
 <body>
 <div class="full-box page-header">
                <h3 class="text-left">
                <em class="fa fa-bars" aria-hidden="true"></em> &nbsp; MENÚ
                </h3>              
            </div>
            <div class="container shadow p-3 mb-5 bg-body rounded " >
                    <div class="col">
                        <a href="Iniciar Sesion-2.php">
                            <button type="button" class="btn btn-primary"><em class="fa fa-plus" aria-hidden="true"></em> Hacer reserva</button>                  
                        </a>
                    </div><br>
                <table class="table-striped" style="text-align: center;">
                <thead>
                    <th></th>
                </thead>
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
                            <div class="img_menu">
                                <img src="<?php echo $arreglo2 [2];?>" alt="">
                            </div>
                            <div class="descripcion_menu">
                                <h5><?php echo $arreglo2 [1]?></h5>
                                <p class="previa-menu"><?php echo $arreglo2 [3]?></p>
                                <button id="open-modal-btn-<?php echo $arreglo2 ['id_menu'];?>" class="btn btn-primary open-modal-btn">Ver más <em class="fa-solid fa-angles-right"></em></button>
                                <div id="myModal-<?php echo $arreglo2 ['id_menu']?>" class="modal">
                                  <div class="modal-content">
                                    <span id="close-modal-btn-<?php echo $arreglo2 ['id_menu']?>" class="close">&times;</span>
                                    <div class="modal_img">
                                     <img src="<?php echo $arreglo2 [2]?>" alt="">
                                    </div>
                                    <h2 class="nombre_menu"><?php echo $arreglo2 [1]?></h2>
                                    <p class="des_menu"><?php echo $arreglo2 [3]?></p>
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
                    </div> <br>
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
 </body>
 </html>
