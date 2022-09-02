<?php
   
    
class num_menu{

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
                                                                                    '$this->mesa'
                                                                                    
                                           )";
                                           echo $insertar;
                                           mysqli_query($c,$insertar);
                                           echo "<script> alert('La Mesa fue Creada en el Sistema')</script>";
                                            
                                        }
                    }

                    function modificar(){

                    }   
                    
                    function eliminar(){

                    }

                    
    }
?>
