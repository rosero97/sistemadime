<?php
   
    
class num_menu{

                  public $num_mesa;
                  public $mesa;

                    

                    function agregar(){
                       
                                          $obj = new conexion();
                                          $c=$obj->conectando();
                                          $query = "select * from num_menu where mesa_id = '$this->mesa'";
                                          $ejecuta = mysqli_query($c, $query);
                                          if(mysqli_fetch_array($ejecuta)){
                                             echo "<script> alert('La Mesa ya Existe en el Sistema')</script>";
                                          }else{
                                          $insertar = "insert into num_menu value(
                                                                                    '$this->num_mesa',
                                                                                    '$this->mesa'
                                                                                    
                                          )";
                                          echo $insertar;
                                          mysqli_query($c,$insertar);
                                          echo "<script> alert('La mesa fue Creada en el Sistema')</script>";
                                            
                                        }
                    }

                    function modificar(){
                                          $obj = new conexion();
                                          $c=$obj->conectando();
                                          $query = "select * from num_menu where mesa_id = '$this->mesa'";
                                          $ejecuta = mysqli_query($c, $query);
                                          if(mysqli_fetch_array($ejecuta)){
                                             echo "<script> alert('La Mesa ya Existe en el Sistema')</script>";
                                          }else{
                                             $update = "update num_menu set
                                                                                    mesa_id='$this->num_mesa',
                                                                                    num_mesa='$this->mesa'
                                                                                    where mesa_id='$this->num_mesa'
                                                                                    
                                             ";
                                             echo $update;
                                             mysqli_query($c,$update);
                                             echo "<script> alert('La mesa fue modificada en el sistema')</script>";
                                             
                                          }


                    }   
                    
                    function eliminar(){
                                          $obj = new conexion();
                                          $c=$obj->conectando();
                                          $query = "select * from num_menu where mesa_id = '$this->mesa'";
                                          $ejecuta = mysqli_query($c, $query);
                                          if(mysqli_fetch_array($ejecuta)){
                                             echo "<script> alert('La Mesa NO se puede eliminar del Sistema, solo se puede modificar')</script>";
                                          }else{
                                             $update = "delete from num_menu 
                                                                                    where mesa_id='$this->num_mesa'
                                             ";
                                             echo $update;
                                             mysqli_query($c,$update);
                                             echo "<script> alert('La mesa fue Eliminada del sistema'); window.location.href='../vista/mesas.php';</script>";
                                             
                                          }

                    }

                    
    }
?>
