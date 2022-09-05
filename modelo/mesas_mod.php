<?php
   
    
class num_menu{

                     public $num_mesa;
                    public $mesa;

                    

                    function agregar(){
                       
                                        $obj = new conexion();
                                        $c=$obj->conectando();
                                        $query = "select * from num_menu where num_mesa = '$this->mesa'";
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
                                           echo "<script> alert('La Mesa fue Creada en el Sistema')</script>";
                                            
                                        }
                    }

                    function modificar(){
                     $obj = new conexion();
                     $c=$obj->conectando();
                     $query = "select * from num_menu where num_mesa = '$this->mesa'";
                     $ejecuta = mysqli_query($c, $query);
                     if(mysqli_fetch_array($ejecuta)){
                        echo "<script> alert('La Mesa ya Existe en el Sistema')</script>";
                     }else{
                        $update = "update num_menu set
                                                                 num_mesa='$this->num_mesa',
                                                                 numero='$this->mesa'
                                                                 where num_mesa='$this->num_mesa'
                                                                 
                        ";
                        echo $update;
                        mysqli_query($c,$update);
                        echo "<script> alert('La Mesa modificada')</script>";
                         
                     }


                    }   
                    
                    function eliminar(){

                    }

                    
    }
?>
