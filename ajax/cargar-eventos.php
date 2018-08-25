<?php
    session_start();
    $archivo = fopen("../data/eventos.json","r");
    $linea="";
    $linea1="";
    $evento=array();
    
    while(($linea = fgets($archivo))){
        $registro = json_decode($linea,true);
        if($_SESSION["emailUsuario"]==$registro["emailUsuario"]){  
           $evento[]=$registro; 
           
        }
      }
     
    if(!empty($evento)){
        echo json_encode($evento);
    }else{
        $respuesta["codigo"]= 0;
        $respuesta["mensaje"]= "No hay actualizaciones de este usuario";
        echo json_encode($respuesta);
    }
    fclose($archivo);
    //var_dump($usuarios);
    
?>