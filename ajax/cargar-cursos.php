<?php
    session_start();
    $archivo = fopen("../data/cursos.json","r");
    $linea="";
    $cursos=array();
    $archivo1="../data/cursos.json";
    if(filesize($archivo1)>0){
    while(($linea = fgets($archivo))){
        $registro = json_decode($linea,true);
        if($_SESSION["emailUsuario"]==$registro["emailUsuario"]){  
         $cursos[] = $registro;
        }
      }
    }


    if(!empty($cursos)){
        echo json_encode($cursos);
    }else{
        $respuesta["codigo"]= 0;
        $respuesta["mensaje"]= "No hay cursos de este usuario";
        echo json_encode($respuesta);
    }
    fclose($archivo);
    //var_dump($usuarios);
    
?>