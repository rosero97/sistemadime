<?php

include("../conexion/conectar.php");

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
    <link rel="stylesheet" href="./css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8606130a5f.js" crossorigin="anonymous"></script>
</head>
 <body>
 <div class="full-box page-header">
                <h3 class="text-left">
                <i class="fa fa-bars" aria-hidden="true"></i> &nbsp; MENU
                </h3>              
            </div>
            <div class="container shadow p-3 mb-5 bg-body rounded " >
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    <a href="Iniciar Sesion-2.php">
                                        <button type="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Hacer reserva</button>                  
                                    </a>
                                </th>
                            </tr>
                        </thead>
                    </table>
                <table class="table-striped" style="text-align: center;">
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
                        <div class="menu_usuario">
                            <img class="img_menu" src="<?php echo $arreglo2 [2]?>">
                            <div class="descripcion_menu">
                                <h5><?php echo $arreglo2 [1]?></h5>
                                <p><?php echo $arreglo2 [3]?></p>
                            </div>
                        </div>
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
                </table>
            </div>
 </body>
 </html>
