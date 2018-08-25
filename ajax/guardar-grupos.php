<?php
    session_start(); //Es obligatorio llamar a esta funcion para acceder a $_SESSION
    $archivo = fopen("../data/grupos.json","a+");
    $archivo1="../data/grupos.json";
    $linea="";
    if(filesize($archivo1)>0){
    while(($linea = fgets($archivo))){
        $registro = json_decode($linea,true);
      if($_POST["accessCodeGrupo"]==$registro["accessCodeGrupo"]){  
        fclose($archivo);
        $respuesta["codigo"]= 0;
        $respuesta["mensaje"]= "Ya existe un grupo con este codigo";
        echo json_encode($respuesta);
        break;
        }
      }
    }

    if($_POST["accessCodeGrupo"]!=$registro["accessCodeGrupo"]){  
        $grupos=array();
        $grupos["emailUsuario"]= $_SESSION["emailUsuario"];
        $grupos["tipoUsuario"]= $_SESSION["tipoUsuario"];
        $grupos["accessCodeGrupo"]=$_POST["accessCodeGrupo"];
        $grupos["nameGrupo"]=$_POST["nameGrupo"];
        $grupos["descripGrupo"]=$_POST["descripGrupo"];
        $grupos["accessGrupo"]=$_POST["accessGrupo"];
        $grupos["privacyGrupo"]=$_POST["privacyGrupo"];
      
      fwrite($archivo, json_encode($grupos) . "\n");
      fclose($archivo);
      $respuesta["codigo"]= 1;
      $respuesta["mensaje"]= "Grupo creado exitosamente";
      echo json_encode($respuesta);
    }
?> 