<?php


class reserva{
   
                  public $reserva;
                  public $fecha;
                  public $observaciones;
                  public $id_estado=1;
                  public $mesa;
                  public $personas;
                  public $num_persona;
                  public $cancelar=2;
                  
                    

                    function agregar(){
                       
                                          $obj = new conexion();
                                          $c=$obj->conectando();
                                          $query = "SELECT * FROM numero_reservacion WHERE fecha_hora = '$this->fecha' AND id_estado = '$this->id_estado' AND mesa_id = '$this->mesa'";
                                          $ejecuta = mysqli_query($c, $query);
                                          if(mysqli_fetch_array($ejecuta)){
                                             echo "<script> alert('La Reservacion ya existe en el Sistema, porfavor intente otra vez')</script>";
                                          }else{
                                          $insertar = "insert into numero_reservacion value(
                                                                                    '$this->reserva',
                                                                                    '$this->fecha',
                                                                                    '$this->observaciones',
                                                                                    '$this->id_estado',
                                                                                    '$this->mesa',
                                                                                    '$this->personas',
                                                                                    '$this->num_persona'
                                                                                    
                                          )";
                                          echo $insertar;
                                          mysqli_query($c,$insertar);
                                          echo "<script> alert('La reservacion fue Creada en el Sistema'); window.location.href='../vista/usuario/agendar_reserva.php';</script>";
                                            
                                        }
                    }

                    function modificar(){
                                          $obj = new conexion();
                                          $c=$obj->conectando();
                                          $query = "select * from numero_reservacion where fecha_hora = '$this->fecha'";
                                          $ejecuta = mysqli_query($c, $query);
                                          if(mysqli_fetch_array($ejecuta)){
                                             echo "<script> alert('La reservación ya Existe en el Sistema')</script>";
                                          }else{
                                             $update = "update numero_reservacion set
                                                                                    n_reservacion='$this->reserva',
                                                                                    num_personas='$this->personas',
                                                                                    fecha_hora='$this->fecha',
                                                                                    observaciones='$this->observaciones'
                                                                                    where n_reservacion='$this->reserva'
                                                                                    
                                             ";
                                             echo $update;
                                             mysqli_query($c,$update);
                                             echo "<script> alert('La reservación fue modificada en el sistema'); window.location.href='../vista/usuario/agendar_reserva.php';</script>";
                                             
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
                                             echo $update;
                                             mysqli_query($c,$update);
                                             echo "<script> alert('La reservación se desactivo del sistema'); window.location.href='../vista/usuario/agendar_reserva.php';</script>";
                                           
                                          }


                    }   
                    
                    

                    
    }
?>
