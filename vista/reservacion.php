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
</head>
<body id="hambu">
    <div class="center">
        <img src="../imagenes/digitals.jpg" alt="">
    </div><br>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div id="numero_reservacion">
                        <hi>Numero de reservacion: 0001</hi>
                    </div><br>
                </div>
                <div class="col-md-6">
                </div>
                <div class="col-md-3">
                    <div id="der">
                        <button id="nom" class="nombre">Jose Angel Rosero Orozco <i class="fa-solid fa-user"></i></button>
                        <div class="nombre1-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>
        <form action="agendar_reserva.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col" id="segparte1">
                        Datos de la reservacion 
                    </div>     
                </div>
                <div class="row">
                    <div class="col-md-3" id="informacion1">
                        Identificacion
                    </div>
                    <div class="col" id="informacion">
                        1001095170
                    </div>
                    <div class="col-md-3" id="informacion1">
                        Fecha
                    </div>
                    <div class="col" id="current_date"></p>
                        <script>
                            date = new Date();
                            year = date.getFullYear();
                            month = date.getMonth() + 1;
                            day = date.getDate();
                            document.getElementById("current_date").innerHTML = month + "/" + day + "/" + year;
                        </script>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3" id="informacion1">
                        Cliente
                    </div>
                    <div class="col" id="informacion">
                        José Angel Rosero Orozco
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3" id="informacion1">
                        Direccion
                    </div>
                    <div class="col" id="informacion">
                        Calle 45 Sur # 51 - 29G
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3" id="informacion1">
                        Telefono
                    </div>
                    <div class="col" id="informacion">
                        3103867812 
                    </div>
                    <div class="col-md-3" id="informacion1">
                        Email
                    </div>
                    <div class="col" id="informacion">
                        joserosero@gmail.com
                    </div>
                </div>    
                <div class="row">
                    <div class="col-md-3" id="informacion1">
                        <label for="observaciones" class="">Observaciones</label>
                    </div>
                     <div class="col-md-9">    
                        <textarea id="colobser" name="colobser" rows="2" cols="100%" autofocus ></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col" id="segparte1">
                                Numero de mesa
                            </div>
                            <div class="col" id="segparte">
                                <input type="number" id="nmesa" name="nmesa">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col" id="segparte1">
                                Numero de personas
                            </div>
                            <div class="col" id="segparte">
                                <input type="number" id="nper" name="nper">
                            </div>
                        </div>                                               
                    </div>
                    <div class="col-md-6" id="segparte">
                        <div class="row">
                            <div class="col" id="segparte">
                                Dia de la reserva
                            </div>
                            <div class="col" id="segparte">
                                <input type="date" id="fecha" name="fecha">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col" id="segparte">
                               Hora de la reserva 
                            </div>
                            <div class="col" id="segparte">
                                <input type="time" id="hora" name="hora"> 
                             </div>                      
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col" id="der2">
                        <input type="submit" id="Consultar" name="submit" value="Consultar" onclick="alert('Su reservacion fue exitosa')"/>
                    </div>
                    <div class="col-md-6" id="der2">
                        <a href="mesas.html" target="">Vista previa de las mesas</a>
                    </div>
                </div>
            </div>   
         </form>  
    </div>
</body>
</html>