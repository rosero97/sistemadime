<?php
include("../../conexion/conectar.php");

if($_POST)
{
    $obj->control = $_POST['control'];
    
}
$obj = new conexion();
 $c=$obj->conectando();
                                     
$sql = "SELECT COUNT(*) AS totalRegistros FROM num_menu";
$resultado = mysqli_query($c, $sql);
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
    $query2="select * from num_menu where num_mesa like '%$obj->num_mesa%' limit $desde,$maximoRegistros";
    $resultado2=mysqli_query($c,$query2);
    $arreglo2 = mysqli_fetch_array($resultado2);
}else{
    $query2="select * from num_menu limit $desde,$maximoRegistros ";
    $resultado2=mysqli_query($c,$query2);
    $arreglo2 = mysqli_fetch_array($resultado2);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesas</title>
    <link href="../../config/estilos.css" rel="Stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8606130a5f.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container shadow p-3 mb-5 bg-body rounded">
        <h2 style="text-align: center;">Modificacion de las mesas</h2>
        <br>
        <form action="" name="num_menu" method="POST">
            <table class="table table-bordered" style="text-align: center;">
                <thead>
                    <tr>
                        <th>Numero de mesa</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
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
                        <td>
                            <a href="modificar_mesa.php">
                                <button type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"> Modificar</i></button>
                            </a>
                        </td>
                        <td>
                            <a href="eliminar_mesa.php">
                                <button type="button"><i class="fa fa-trash-o" aria-hidden="true"> Eliminar</i></button>
                            </a>
                        </td>
                    </tr>
                    <?php
                            }while($arreglo2 = mysqli_fetch_array($resultado2));
                        }
                    ?>
                
                </tbody>
            </table>
            <div>
                        <tr>
                            <td>
                                <a href="agregar_mesa.php">
                                    <button type="button"><i class="fa fa-plus-square-o" aria-hidden="true"> Agregar</i></button>
                                </a>    
                                
                            </td>
                            <td>
                                <a href="#"><button><i class="fa fa-arrow-circle-left" aria-hidden="true"> Volver</i></button></a>
                            </td>
                        </tr>
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
</body>
</html>
