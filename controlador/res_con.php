<?php
include('../modelo/res_mod.php');
$obj = new restaurante();

if($_POST){

    $obj->nombre = $_POST['nombre'];
    $obj->direccion = $_POST['direccion'];
    $obj->telefono = $_POST['telefono'];
    $obj->correo = $_POST['correo'];
    $obj->hora = $_POST['hora'];
    $obj->encargado = $_POST['encargado'];
}
if(isset($_POST['modifica'])){
    $obj->modificar();
}
if(isset($_POST['agregar'])){
    $obj->agrega();
}
?>