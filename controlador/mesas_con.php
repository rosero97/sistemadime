<?php
include_once('../modelo/mesas_mod.php');
$obj = new num_menu();

if($_POST){

    $obj->num_mesa = $_POST['num_mesa'];
    $obj->mesa = $_POST['mesa'];
    $obj->personas = $_POST['personas'];
}

if(isset($_POST['guarda'])){
    $obj->agregar();
}

?>
