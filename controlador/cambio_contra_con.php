<?php
include_once('../modelo/cambio_mod.php');
$obj = new cambio();

if($_POST){

    $obj->id = $_POST['id'];
    $obj->contrasena = $_POST['contrasena'];
    $obj->contrasena1 = $_POST['contrasena1'];
}

if(isset($_POST['modificaCo'])){
    $obj->modificarCo();
}


?>
