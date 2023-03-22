<?php
include_once('../modelo/menu_mod.php');
$obj = new menu();

if($_POST){

    $obj->num_menu = $_POST['num_menu'];
    $obj->imagen = $_FILES['imagen']['tmp_name'];
    $obj->ida = $_POST['ida'];
}

if(isset($_POST['modifica2'])){
    $obj->modificar2();
}


?>
