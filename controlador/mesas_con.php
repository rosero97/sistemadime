<?php
include('../modelo/mesa_mod.php');
$obj = new num_menu();

if($_POST){

    $obj->mesa = $_POST['mesa'];
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
