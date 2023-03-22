<?php
   
    
class restaurante{

                  public $nombre;
                  public $imagen;
                  public $direccion;
                  public $telefono;
                  public $correo;            
                  public $hora;            
                  public $encargado;          
                  public $id=01;          
                  
                    
                    function agrega(){
                     
                                      $obj = new conexion();
                                      $c=$obj->conectando();
                                      $query = "select * from restaurante where id_res = '$this->id'";
                                      $ejecuta = mysqli_query($c, $query);
                                      if(mysqli_fetch_array($ejecuta)){
                                          echo "<script> alert('No se puede crear nuevos datos del restaurante, solo se pueden modificar');window.location.href='../vista/company_modificar.php';</script>";
                                      }else{
                                          $conet = new Conexion();
                                          $c = $conet->conectando(); 
                                          $ruta = '../vista/assets/avatar/'.$_FILES['imagen']['name'];
                                          move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta); 
                                          $insertar = "insert into restaurante values(
                                                                              
                                                                              '$this->id',
                                                                              '$this->nombre',
                                                                              '$this->direccion',
                                                                              '$this->telefono',
                                                                              '$this->correo',
                                                                              '$this->hora',
                                                                              '$this->encargado',
                                                                              '$ruta'
                                                                              
                                          )";
                                          //echo $insertar;
                                          mysqli_query($c, $insertar);
                                          echo "<script> alert('Los datos del restaurante se han agregado en el sistema, si no se han actualizado cierre sesión y vuelva a ingresar'); window.location.href='../vista/company.php';</script>";
                                      
                                      }
                  }                    

                    function modificar(){
                       
                                        $obj = new conexion();
                                        $c=$obj->conectando();
                                        $query = "select * from restaurante where nombre_res = '$this->nombre'";
                                        $ejecuta = mysqli_query($c, $query);
                                        if(mysqli_fetch_array($ejecuta)){
                                            echo "<script> alert('El nombre ya Existe en el Sistema')</script>";
                                        }else{
                                            $conet = new Conexion();
                                             $c = $conet->conectando(); 
                                             $ruta = '../vista/assets/avatar/'.$_FILES['imagen']['name'];
                                             move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta);
                                            $update = "update restaurante set
                                                                                id_res=1,
                                                                                nombre_res='$this->nombre',
                                                                                direccion='$this->direccion',
                                                                                telefono='$this->telefono',
                                                                                correo='$this->correo',
                                                                                horario='$this->hora',
                                                                                id_encargado='$this->encargado',
                                                                                slogan='$ruta'
                                                                                where id_res=1
                                                                                
                                            ";
                                            //echo $update;
                                            mysqli_query($c,$update);
                                            echo "<script> alert('Los datos del restaurante se han modificado en el sistema, si no se han actualizado cierre sesión y vuelva a ingresar'); window.location.href='../vista/company.php';</script>";
                                        
                                        }
                    }                    
    }
?>