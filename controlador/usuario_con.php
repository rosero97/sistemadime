<?php
include_once('../modelo/usuario_mod.php');
$obj = new usuario();

if($_POST){

    $obj->id_persona = $_POST['id_persona'];
    $obj->nombre = $_POST['nombre'];
}

if(isset($_POST['modifica'])){
    $obj->modificar();
}

?>