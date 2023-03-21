<?php
   
    
class usuario{

                  public $id_persona;
                  public $nombre;
                  public $celular;
                  public $contrasena;            
                  public $contrasena1;            
                  public $contrasena2;            
                  
                    

                    function modificar(){
                       
                                        $obj = new conexion();
                                        $c=$obj->conectando();
                                        $query = "select * from persona where id_persona = '$this->id_persona'";
                                        $ejecuta = mysqli_query($c, $query);
                                        if(mysqli_fetch_array($ejecuta)){
                                            $update = "update persona set
                                                                                id_persona='$this->id_persona',
                                                                                nombre_completo='$this->nombre'
                                                                                where id_persona='$this->id_persona'
                                                                                
                                            ";
                                            echo $update;
                                            mysqli_query($c,$update);
                                            echo "<script> alert('El nombre fue modificado en el sistema, si no se ha actualizado cierre sesión y vuelva a ingresar'); window.location.href='../vista/usuario.php';</script>";
                                        }else{
                                            echo "<script> alert('El nombre no se pudo cambiar del Sistema')</script>";
                                        
                                        }
                    }

                    function modificar1(){
                                          $obj = new conexion();
                                          $c=$obj->conectando();
                                          $query = "select * from persona where id_persona = '$this->id_persona'";
                                          $ejecuta = mysqli_query($c, $query);
                                          if(mysqli_fetch_array($ejecuta)){
                                              $update = "update persona set
                                                                                     id_persona='$this->id_persona',
                                                                                     celular='$this->celular'
                                                                                     where id_persona='$this->id_persona'
                                                                                     
                                              ";
                                              echo $update;
                                              mysqli_query($c,$update);
                                              echo "<script> alert('El numero de celular fue modificado en el sistema, si no se ha actualizado cierre sesión y vuelva a ingresar'); window.location.href='../vista/usuario.php';</script>";
                                        }else{
                                              echo "<script> alert('El numero de celular no se pudo cambiar del Sistema')</script>";
                                             
                                          }


                    }   
                    
                    function modificar2(){
                                        $obj = new conexion();
                                        $c=$obj->conectando();
                                        $query = "select * from persona where id_persona = '$this->id_persona'";
                                        $ejecuta = mysqli_query($c, $query);
                                        $fila = mysqli_fetch_assoc($ejecuta);
                                        if(mysqli_fetch_array($ejecuta)){
                                            echo "<script> alert('El id no coincide con la  base de datos')</script>";
                                        }else{
                                            if(password_verify($this->contrasena, $fila['contrasena'])){
                                                if($this->contrasena1==$this->contrasena2){
                                                    $contra_fuerte = password_hash ($this->contrasena1, PASSWORD_DEFAULT);
                                                    $update = "update persona set
                                                                                        id_persona='$this->id_persona',
                                                                                        contrasena='$contra_fuerte'
                                                                                        where id_persona='$this->id_persona'
                                                                                        
                                                    ";
                                                    echo $update;
                                                    mysqli_query($c,$update);
                                                    echo "<script> alert('La contraseña fue modificada en el sistema'); window.location.href='../vista/usuario.php';</script>";
                                                }else{
                                                    echo "<script> alert('Las contraseñas no son iguales'); window.location.href='../vista/usuario_con.php';</script>";
                                                }
                                            }else{
                                                echo "<script> alert('La contraseña actual no coincide con la base de datos')</script>";
                                            }
                                        }                                         

                    }
                    function modificar3(){
                                            $obj = new conexion();
                                            $c=$obj->conectando();
                                            $query = "select * from persona where id_persona = '$this->id_persona'";
                                            $ejecuta = mysqli_query($c, $query);
                                            if(mysqli_fetch_array($ejecuta)){
                                                $update = "update persona set
                                                                                        id_persona='$this->id_persona',
                                                                                        correo='$this->correo'
                                                                                        where id_persona='$this->id_persona'
                                                                                        
                                                ";
                                                echo $update;
                                                mysqli_query($c,$update);
                                                echo "<script> alert('El correo fue modificado en el sistema, si no se ha actualizado cierre sesión y vuelva a ingresar'); window.location.href='../vista/usuario.php';</script>";
                                            }else{
                                                echo "<script> alert('El correo no se pudo modificar')</script>";
                                            
                                            }


                    } 

                    
    }
?>