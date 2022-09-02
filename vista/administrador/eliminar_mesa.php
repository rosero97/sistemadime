<?php 

include("../../conexion/conectar.php");
include("../../controlador/mesas_con.php");

$obj = new num_menu();
if($_POST){

    $obj->mesa = $_POST['mesa'];
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar mesa</title>
    <link href="../../config/estilos.css" rel="Stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8606130a5f.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container shadow p-3 mb-5 bg-body rounded">
    <h2 style="text-align: center;">Eliminar mesa</h2>
    <br>
    <form action="" name="agregar_mesa" method="POST" >
        <table>
            <tbody>
                <tr>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Quiere eliminar este numero de mesa</span>
                        <input type="text" id="mesa" name="mesa" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        
                    </div>
                </tr>
            </tbody>          
        </table>
        <div style="text-align:right;"> 
        <a href="mesas.php">
            <button type="button"><i class="fa fa-ban" aria-hidden="true"> Cancelar</i></button>
        </a>        
        <button type="submit" name="elimina"><i class="fa fa-floppy-o" aria-hidden="true"> Guardar</i></button>
    </div>
    
    </form>
    <br>
    
  </div>
</body>
</html>
