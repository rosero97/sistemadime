<?php
include_once('../modelo/reserva_mod.php');
$obj = new reserva();

if($_POST){

    $obj->reserva = $_POST['reserva'];
    $obj->fecha = $_POST['fecha'];
    $obj->observaciones = $_POST['observaciones'];
}

if(isset($_POST['modifica'])){
    $obj->modificar();
}
?>