<?php
include('../modelo/usuario_mod.php');
$obj = new usuario();

if($_POST){

    $obj->id_persona = $_POST['id_persona'];
    $obj->celular = $_POST['celular'];
}

if(isset($_POST['modifica1'])){
    $obj->modificar1();
}

?>