<?php
include('../modelo/admin_mod.php');
$obj = new admin();

if($_POST){

    $obj->id_persona = $_POST['id_persona'];
    $obj->contrasena = $_POST['contrasena'];
    $obj->contrasena1 = $_POST['contrasena1'];
    $obj->contrasena2 = $_POST['contrasena2'];
}

if(isset($_POST['modifica2'])){
    $obj->modificar2();
}


?>