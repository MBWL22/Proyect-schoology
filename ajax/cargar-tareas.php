<?php
    session_start();
    $archivo = fopen("../data/tareas.json","r");
    $linea="";
    $tareas=array();
    if($_SESSION["tipoUsuario"]=="instructor"){
    while(($linea = fgets($archivo))){
        $registro = json_decode($linea,true);
        if($_SESSION["emailUsuario"]==$registro["emailUsuario"]){  
           $tareas[]=$registro; 
        }
    }
}else{
    while(($linea = fgets($archivo))){
        $registro = json_decode($linea,true);
        if($_SESSION["accessCodeCourse"]==$registro["accessCodeCourse"]){  
         $tareas[] = $registro;
        }
      }
   }

    if(!empty($tareas)){
        echo json_encode($tareas);
    }else{
        $respuesta["codigo"]= 0;
        $respuesta["mensaje"]= "No hay tareas de este usuario";
        echo json_encode($respuesta);
    }
    fclose($archivo);
    //var_dump($usuarios);
    
?>