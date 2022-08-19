<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../config/estilos.css" rel="Stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8606130a5f.js" crossorigin="anonymous"></script>
    <?php
        $mesa = $_POST ["nmesa"];
        $personas = $_POST ["nper"];
        $obs = $_POST ["colobser"];
        $fecha = $_POST ["fecha"];
        $hora = $_POST ["hora"];
    ?>
</head>
<body id="hambu">
    <div class="center">
        <img src="../imagenes/digitals.jpg" alt="">
    </div><br>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div id="numero_reservacion">
                    <hi>Reservaciones</hi>
                </div><br>
            </div>
            <div class="col-md-6">
            </div>
            <div class="col-md-3">
                <div id="der">
                <button id="nom" class="nombre"><i class="fa-solid fa-user fa-5x"></i></button>
                        <div class="nombre1-content">
                            <a href="usuario.php">Jose Angel Rosero Orozco</a>
                        </div>
                </div>
            </div>
        </div><br><br>   
        <div class="row">
            <div class="col-md-3" id="reser">
                Martes, 05 de abril de 2022
            </div>
            <div class="col-md-2" id="reser">
                Reservacion
            </div>
            <div class="col-md-2" id="reser">
                N: 0001
            </div>
            <div class="col-md-2" id="reser">
                Cliente
            </div>
            <div class="col-md-3" id="reser">
                Jose Angel Rosero Orozco
            </div>
        </div>
        <div class="row">
            <div class="col-md-2" id="reser">
                Identificacion
            </div>
            <div class="col-md-2" id="reser">
                1001095170
            </div>
            <div class="col-md-2" id="reser">
                Telefono
            </div>
            <div class="col-md-2" id="reser">
                3103867812
            </div>
            <div class="col-md-2" id="reser">
                Email
            </div>
            <div class="col-md-2" id="reser">
                joserosero@gmail.com
            </div>
        </div>
        <div class="row">
            <div class="col-md-3" id="reser">
                Numero de mesa
            </div>
            <div class="col-md-3" id="reser">
            <?php
                echo "$mesa";
            ?>
            </div>
            <div class="col-md-3" id="reser">
                Numero de personas
            </div>
            <div class="col-md-3" id="reser">
            <?php
                echo "$personas";
            ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4" id="reser">
                Observacciones
            </div>
            <div class="col-md-8" id="reser">
            <?php
                echo "$obs";
            ?>    
            </div>
        </div>
        <div class="row">
            <div class="col-md-3" id="reser">
                Dia de la reserva
            </div>
            <div class="col-md-3" id="reser">
            <?php
                echo "$fecha";
            ?>
            </div>
            <div class="col-md-3" id="reser">
                Hora de la reserva
            </div>
            <div class="col-md-3" id="reser">
            <?php
                echo "$hora";
            ?>
            </div>
        </div><br><br>
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <a href="cliente1.php">Volver</a>
            </div>
            <div class="col-md-4">               
            </div>            
        </div>  
    </div>   
</body>
</html>