<?php
    session_start();
    $archivo = fopen("../data/grupos.json","r");
    $linea="";
    $grupos=array();
    $archivo1="../data/grupos.json";
    if(filesize($archivo1)>0){
    while(($linea = fgets($archivo))){
        $registro = json_decode($linea,true);
        if($_SESSION["emailUsuario"]==$registro["emailUsuario"]){  
         $grupos[] = $registro;
        }
      }
    }


    if(!empty($grupos)){
        echo json_encode($grupos);
    }else{
        $respuesta["codigo"]= 0;
        $respuesta["mensaje"]= "No hay grupos de este usuario";
        echo json_encode($respuesta);
    }
    fclose($archivo);
    //var_dump($usuarios);
    
?>