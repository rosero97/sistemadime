<?php
include_once('../modelo/reserva_mod.php');
$obj = new reserva();

if($_POST){

    $obj->reserva = $_POST['reserva'];
    $obj->fecha = $_POST['fecha'];
    $obj->hora_inicio = $_POST['hora'];
    $obj->hora_fin = date('H:i', strtotime($obj->hora_inicio . ' +1 hour'));
    $obj->observaciones = $_POST['observaciones'];
    $obj->mesa = $_POST['mesa'];
    $obj->personas = $_POST['personas'];
    $obj->num_persona = $_POST['num_persona'];
}

if(isset($_POST['guarda'])){
    $obj->agregar(); 
}
?>
