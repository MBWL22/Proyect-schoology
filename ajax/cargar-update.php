<?php
    session_start();
    $archivo = fopen("../data/update.json","r");
    $linea="";
    $linea1="";
    $update=array();
    
    while(($linea = fgets($archivo))){
        $registro = json_decode($linea,true);
        if($_SESSION["emailUsuario"]==$registro["emailUsuario"]){  
           $update[]=$registro; 
           
        }
      }
     /* fclose($archivo);
      for ($i=0;i<count($update);$i++){
        while(($linea = fgets($archivo))){
            $registro = json_decode($linea,true);
            if($update[$i]["accesCodeGrupo"]==$registro["accesCodeGrupo"] || $update[$i]["accesCodeCourse"]==$registro["accesCodeCourse"]){ 
               $update[]=$registro; 
            }
          }  
      }*/
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