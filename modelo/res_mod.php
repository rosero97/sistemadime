<?php
   
    
class restaurante{

                  public $nombre;
                  public $direccion;
                  public $telefono;
                  public $correo;            
                  public $hora;            
                  public $encargado;            
                  
                    

                    function modificar(){
                       
                                        $obj = new conexion();
                                        $c=$obj->conectando();
                                        $query = "select * from restaurante where nombre_res = '$this->nombre'";
                                        $ejecuta = mysqli_query($c, $query);
                                        if(mysqli_fetch_array($ejecuta)){
                                            echo "<script> alert('El nombre ya Existe en el Sistema')</script>";
                                        }else{
                                            $update = "update restaurante set
                                                                                id_res=1,
                                                                                nombre_res='$this->nombre',
                                                                                direccion='$this->direccion',
                                                                                telefono='$this->telefono',
                                                                                correo='$this->correo',
                                                                                horario='$this->horario',
                                                                                id_encargado='$this->encargado'
                                                                                where id_res=1
                                                                                
                                            ";
                                            echo $update;
                                            mysqli_query($c,$update);
                                            echo "<script> alert('Los datos del restaurante se han modificado en el sistema, si no se han actualizado cierre sesión y vuelva a ingresar'); window.location.href='../vista/company.php';</script>";
                                        
                                        }
                    }                    
    }
?>