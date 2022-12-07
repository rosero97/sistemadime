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
                                        $query = "select * from persona where nombre_completo = '$this->nombre'";
                                        $ejecuta = mysqli_query($c, $query);
                                        if(mysqli_fetch_array($ejecuta)){
                                            echo "<script> alert('El nombre ya Existe en el Sistema')</script>";
                                        }else{
                                            $update = "update persona set
                                                                                id_persona='$this->id_persona',
                                                                                nombre_completo='$this->nombre'
                                                                                where id_persona='$this->id_persona'
                                                                                
                                            ";
                                            echo $update;
                                            mysqli_query($c,$update);
                                            echo "<script> alert('El nombre fue modificado en el sistema, si no se ha actualizado cierre sesión y vuelva a ingresar'); window.location.href='../vista/usuario/usuario.php';</script>";
                                        
                                        }
                    }

                    function modificar1(){
                                          $obj = new conexion();
                                          $c=$obj->conectando();
                                          $query = "select * from persona where celular = '$this->celular'";
                                          $ejecuta = mysqli_query($c, $query);
                                          if(mysqli_fetch_array($ejecuta)){
                                             echo "<script> alert('El numero de celular ya Existe en el Sistema')</script>";
                                          }else{
                                             $update = "update persona set
                                                                                    id_persona='$this->id_persona',
                                                                                    celular='$this->celular'
                                                                                    where id_persona='$this->id_persona'
                                                                                    
                                             ";
                                             echo $update;
                                             mysqli_query($c,$update);
                                             echo "<script> alert('El numero de celular fue modificado en el sistema, si no se ha actualizado cierre sesión y vuelva a ingresar'); window.location.href='../vista/usuario/usuario.php';</script>";
                                             
                                          }


                    }   
                    
                    function modificar2(){
                                        $obj = new conexion();
                                        $c=$obj->conectando();
                                        $query = "select * from persona where id_persona = '$this->id_persona' and contrasena = '$this->contrasena'";
                                        $ejecuta = mysqli_query($c, $query);
                                        if(mysqli_fetch_array($ejecuta)){
                                            if($this->contrasena1==$this->contrasena2){
                                                $update = "update persona set
                                                                                    id_persona='$this->id_persona',
                                                                                    contrasena='$this->contrasena1'
                                                                                    where id_persona='$this->id_persona'
                                                                                    
                                                ";
                                                echo $update;
                                                mysqli_query($c,$update);
                                                echo "<script> alert('La contraseña fue modificada en el sistema'); window.location.href='../vista/usuario/usuario.php';</script>";
                                            }else{
                                                echo "<script> alert('Las contraseñas no son iguales'); window.location.href='../vista/usuario_con.php';</script>";
                                            }
                                        }else{
                                            echo "<script> alert('La contraseña actual no coincide con la base de datos')</script>";
                                        }

                    }

                    
    }
?>