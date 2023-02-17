<?php
include('../modelo/cambio_mod.php');
$obj = new cambio();

if($_POST){

    $obj->correoRe = $_POST['correoRe'];
    $obj->contrasena = $_POST['contrasena'];
    $obj->contrasena1 = $_POST['contrasena1'];
}

if(isset($_POST['modificaCo'])){
    $obj->modificarCo();
}


?>
