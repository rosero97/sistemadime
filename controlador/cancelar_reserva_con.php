<?php
include('../modelo/reserva_mod.php');
$obj = new reserva();

if($_POST){

    $obj->reserva = $_POST['reserva'];
}

if(isset($_POST['modifica'])){
    $obj->modificar2();
}
?>