<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link href="../config/estilos.css" rel="Stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8606130a5f.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container shadow p-3 mb-5 bg-body rounded">
        <h2 style="text-align: center;">Configuracion</h2>
        <br>
        <table class="table table-bordered" style="text-align: center;">
           <thead>
                <tr>
                    <th>Nombre del dato</th>
                    <th>Datos del usuario</th>
                    <th>Modificar</th>
                </tr>
           </thead>
           <tbody>
                <tr>
                    <td>Nombre Completo</td>
                    <td>Jose Angel Rosero Orozco</td>
                    <td>
                        <a href="usuario_nombre.php" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <button ><i class="fa fa-pencil-square-o" aria-hidden="true"> Modificar</i></button>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Identificacion</td>
                    <td>1015486515</td>
                    <td>
                        <a href="usuario_id.php">
                            <button><i class="fa fa-pencil-square-o" aria-hidden="true"> Modificar</i></button>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td>3103867812</td>
                    <td>
                        <a href="usuario_cel.php">
                            <button><i class="fa fa-pencil-square-o" aria-hidden="true"> Modificar</i></button>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>joserosero@gmail.com</td>
                    <td>
                        <a href="usuario_email.php">
                            <button><i class="fa fa-pencil-square-o" aria-hidden="true"> Modificar</i></button>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Direccion</td>
                    <td>Calle 45 Sur # 51 - 29G</td>
                    <td>
                        <a href="usuario_dir.php">
                            <button><i class="fa fa-pencil-square-o" aria-hidden="true"> Modificar</i></button>
                        </a>
                    </td>
                </tr>
           </tbody>
        </table><br> 
        <div style="text-align:center;">
            <tr>
                <td>
                    <a href="cliente1.php"><button><i class="fa fa-arrow-circle-left" aria-hidden="true"> Volver</i></button></a>
                </td>
                <td>
                    <a href="cliente1.php"><button><i class="fa fa-floppy-o" aria-hidden="true"> Guardar</i></button></a>
                </td>
            </tr>
        </div>
    </div>
</body>
</html>