<?php




class reserva{


                 public $reserva;
                 public $fecha;
                 public $hora_inicio;
                 public $hora_fin;
                 public $observaciones;
                 public $id_estado=1;
                 public $mesa;
                 public $num_persona;
                 public $cancelar=2;




                   function agregar(){


                                         $obj = new conexion();
                                         $c=$obj->conectando();
                                         $query = "SELECT * FROM numero_reservacion WHERE mesa_id = '$this->mesa' AND fecha = '$this->fecha' AND id_estado = '$this->id_estado' AND ((hora_inicio >= '$this->hora_inicio' AND hora_inicio < '$this->hora_fin') OR (hora_fin > '$this->hora_inicio' AND hora_fin <= '$this->hora_fin'));";
                                         $ejecuta = mysqli_query($c, $query);
                                         if(mysqli_fetch_array($ejecuta)){
                                            echo "<script> alert('La Reservacion ya existe en el Sistema, porfavor intente otra vez')</script>";
                                         }else{
                                         $insertar = "insert into numero_reservacion value(
                                                                                   '$this->reserva',
                                                                                   '$this->fecha',
                                                                                   '$this->hora_inicio',
                                                                                   '$this->hora_fin',
                                                                                   '$this->observaciones',
                                                                                   '$this->id_estado',
                                                                                   '$this->mesa',
                                                                                   '$this->num_persona'


                                         )";
                                         //echo $insertar;
                                         mysqli_query($c,$insertar);


                                         $cod_charset = "1234567890";
                                         $cod_name = "";


                                         for($i=0;$i<11;$i++){
                                            $cod_name .= substr($cod_charset, rand(0, 10),1);
                                         }


                                         $evento = "CREATE EVENT `$cod_name`
                                                     ON SCHEDULE AT '$this->fecha $this->hora_inicio' + INTERVAL 61 MINUTE
                                                     ON COMPLETION NOT PRESERVE ENABLE
                                                     DO UPDATE numero_reservacion SET id_estado = 2
                                                     WHERE fecha = '$this->fecha' AND hora_inicio < NOW() - INTERVAL 60 MINUTE";


                                         mysqli_query($c,$evento);


                                         echo "<script> alert('La reservacion fue Creada en el Sistema'); window.location.href='../vista/agendar_reserva.php';</script>";


                                       }
                   }


                   function modificar(){
                                         $obj = new conexion();
                                         $c=$obj->conectando();
                                         $query = "select * from numero_reservacion where fecha = '$this->fecha' and hora_inicio = '$this->hora_inicio'";
                                         $ejecuta = mysqli_query($c, $query);
                                         if(mysqli_fetch_array($ejecuta)){
                                            echo "<script> alert('La reservación ya Existe en el Sistema')</script>";
                                         }else{
                                            $update = "update numero_reservacion set
                                                                                   n_reservacion='$this->reserva',
                                                                                   fecha='$this->fecha',
                                                                                   hora_inicio='$this->hora_inicio',
                                                                                   hora_fin='$this->hora_fin',
                                                                                   observaciones='$this->observaciones',
                                                                                   where n_reservacion='$this->reserva'


                                            ";
                                            //echo $update;
                                            mysqli_query($c,$update);
                                            echo "<script> alert('La reservación fue modificada en el sistema'); window.location.href='../vista/agendar_reserva.php';</script>";


                                         }




                   }


                   function modificar2(){
                                         $obj = new conexion();
                                         $c=$obj->conectando();
                                         $query = "select * from numero_reservacion where n_reservacion ='$this->reserva' AND id_estado = '$this->cancelar' ";
                                         $ejecuta = mysqli_query($c, $query);
                                         if(mysqli_fetch_array($ejecuta)){
                                            echo "<script> alert('La reservación ya esta desactivada')</script>";
                                         }else{
                                            $update = "update numero_reservacion set
                                                                                   n_reservacion='$this->reserva',
                                                                                   id_estado='$this->cancelar'
                                                                                   where n_reservacion='$this->reserva'


                                            ";
                                            //echo $update;
                                            mysqli_query($c,$update);
                                            echo "<script> alert('La reservación se desactivo del sistema'); window.location.href='../vista/agendar_reserva.php';</script>";


                                         }




                   }








   }
?>
