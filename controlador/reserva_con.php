<?php
include('../modelo/reserva_mod.php');
$obj = new reserva();

if($_POST){

    $obj->reserva = $_POST['reserva'];
    $obj->mesa = $_POST['mesa'];
    $obj->mesa = $_POST['mesa'];
    $obj->mesa = $_POST['mesa'];
    $obj->mesa = $_POST['mesa'];
    $obj->mesa = $_POST['mesa'];
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
