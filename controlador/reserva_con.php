<?php
include('../modelo/reserva_mod.php');
$obj = new reserva();

if($_POST){

    $obj->reserva = $_POST['reserva'];
    $obj->fecha = $_POST['fecha'];
    $obj->observaciones = $_POST['observaciones'];
    $obj->mesa = $_POST['mesa'];
    $obj->personas = $_POST['personas'];
    $obj->num_persona = $_POST['num_persona'];
}

if(isset($_POST['guarda'])){
    $obj->agregar(); 
}
?>
