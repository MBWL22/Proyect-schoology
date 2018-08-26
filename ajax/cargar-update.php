<?php
    session_start();
    $archivo = fopen("../data/update.json","r");
    $linea="";
    $update=array();
    if($_SESSION["tipoUsuario"]=="instructor"){
    while(($linea = fgets($archivo))){
        $registro = json_decode($linea,true);
        if($_SESSION["emailUsuario"]==$registro["emailUsuario"]){  
           $update[]=$registro; 
           
        }
      }
    }else{
        while(($linea = fgets($archivo))){
            $registro = json_decode($linea,true);
            if($_SESSION["accessCodeCourse"]==$registro["accessCodeCourse"]){  
             $update[] = $registro;
            }
          }
       }



    if(!empty($update)){
        echo json_encode($update);
    }else{
        $respuesta["codigo"]= 0;
        $respuesta["mensaje"]= "No hay actualizaciones de este usuario";
        echo json_encode($respuesta);
    }
    fclose($archivo);
    //var_dump($usuarios);
    
?>