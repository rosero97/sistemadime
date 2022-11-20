<?php
   
    
class menu{

                  public $num_menu;
                  public $nombre;
                  public $imagen;
                  public $descripcion;
                  public $ida;

                    

                    function agregar(){
                       
                                          $obj = new conexion();
                                          $c=$obj->conectando();
                                          $query = "select * from menu where nombre = '$this->nombre'";
                                          $ejecuta = mysqli_query($c, $query);
                                          if(mysqli_fetch_array($ejecuta)){
                                             echo "<script> alert('El plato ya Existe en el Sistema')</script>";
                                          }else{
                                          $conet = new Conexion();
                                          $c = $conet->conectando(); 
                                          $ruta = '../imagenes/'.$_FILES['imagen']['name'];
                                          move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta);
                                          $insertar = "insert into menu value(
                                                                                    '$this->num_menu',
                                                                                    '$this->nombre',
                                                                                    '$ruta',
                                                                                    '$this->descripcion',
                                                                                    '$this->ida'
                                                                                    
                                          )";
                                          echo $insertar;
                                          mysqli_query($c,$insertar);
                                          echo "<script> alert('El plato fue Creado en el Sistema'); window.location.href='../vista/menu2.php';</script>";
                                            
                                        }
                    }

                    function modificar(){
                                          $obj = new conexion();
                                          $c=$obj->conectando();
                                          $query = "select * from menu where nombre = '$this->nombre'";
                                          $ejecuta = mysqli_query($c, $query);
                                          if(mysqli_fetch_array($ejecuta)){
                                             echo "<script> alert('El plato ya Existe en el Sistema')</script>";
                                          }else{
                                             $conet = new Conexion();
                                             $c = $conet->conectando(); 
                                             $ruta = '../imagenes/'.$_FILES['imagen']['name'];
                                             move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta);
                                             $update = "update menu set
                                                                                    id_menu='$this->num_menu',
                                                                                    nombre='$this->nombre',
                                                                                    imagen='$ruta',
                                                                                    descripcion='$this->descripcion',
                                                                                    id_encargado='$this->ida'
                                                                                    where id_menu='$this->num_menu'
                                                                                    
                                             ";
                                             echo $update;
                                             mysqli_query($c,$update);
                                             echo "<script> alert('El plato fue modificado en el sistema'); window.location.href='../vista/menu2.php';</script>";
                                             
                                          }


                    }   
                    
                    function eliminar(){
                                          $obj = new conexion();
                                          $c=$obj->conectando();
                                          $query = "select * from menu where id_menu = '$this->nombre'";
                                          $ejecuta = mysqli_query($c, $query);
                                          if(mysqli_fetch_array($ejecuta)){
                                             echo "<script> alert('El plato NO se puede eliminar del Sistema, solo se puede modificar')</script>";
                                          }else{
                                             $update = "delete from menu 
                                                                                    where id_menu='$this->num_menu'
                                             ";
                                             echo $update;
                                             mysqli_query($c,$update);
                                             echo "<script> alert('El plato fue Eliminada del sistema'); window.location.href='../vista/menu2.php';</script>";
                                             
                                          }

                    }

                    
    }
?>
