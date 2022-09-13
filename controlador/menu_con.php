<?php
include('../modelo/menu_mod.php');
$obj = new menu();

if($_POST){

    $obj->num_menu = $_POST['num_menu'];
    $obj->nombre = $_POST['nombre'];
    $obj->imagen = $_FILES['imagen']['tmp_name'];
    $obj->descripcion = $_POST['descripcion'];
    $obj->ida = $_POST['ida'];
}

if(isset($_POST['guarda'])){
    $obj->agregar();
}

if(isset($_POST['modifica'])){
    $obj->modificar();
}

if(isset($_POST['elimina'])){
    $obj->eliminar();
}

?>
