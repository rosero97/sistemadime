<?php
include_once('../modelo/admin_mod.php');
$obj = new admin();

if($_POST){

    $obj->id_persona = $_POST['id_persona'];
    $obj->correo = $_POST['correo'];
}

if(isset($_POST['modifica3'])){
    $obj->modificar3();
}

?>