<?php
include_once('../modelo/usuario_mod.php');
$obj = new usuario();

if($_POST){

    $obj->id_persona = $_POST['id_persona'];
    $obj->correo = $_POST['correo'];
}

if(isset($_POST['modifica3'])){
    $obj->modificar3();
}

?>