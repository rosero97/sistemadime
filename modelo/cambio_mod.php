<?php


class cambio{

                  public $correoRe;
                  public $contrasena;
                  public $contrasena1;



                    function modificarCo(){

                                        $obj = new conexion();
                                        $c=$obj->conectando();
                                        $query = "select * from persona where correo = '$this->correoRe'";
                                        $ejecuta = mysqli_query($c, $query);
                                        if(mysqli_fetch_array($ejecuta)){
                                            if($this->contrasena==$this->contrasena1){
                                                $update = "update persona set
                                                                                    correo='$this->correoRe',
                                                                                    contrasena='$this->contrasena'
                                                                                    where correo='$this->correoRe'

                                                ";
                                                echo $update;
                                                mysqli_query($c,$update);
                                                echo "<script> alert('La contraseña fue modificada en el sistema'); window.location.href='../vista/Iniciar Sesion-2.php';</script>";
                                            }else{
                                                echo "<script> alert('Las contraseñas no son iguales'); window.location.href='../vista/Cambio de contraseña.php';</script>";
                                            }
                                        }else{
                                            echo "<script> alert('El correo actual no coincide con la base de datos'); window.location.href='../vista/Cambio de contraseña.php';</script>";
                                        }

                    }


    }
?>
