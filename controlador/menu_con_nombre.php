<?php
include_once('../modelo/menu_mod.php');
$obj = new menu();

if($_POST){

    $obj->num_menu = $_POST['num_menu'];
    $obj->nombre = $_POST['nombre'];
    $obj->ida = $_POST['ida'];
}

if(isset($_POST['modifica'])){
    $obj->modificar();
}


?>
