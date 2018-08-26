<?php
    session_start(); //Es obligatorio llamar a esta funcion para acceder a $_SESSION
    $archivo = fopen("../data/cursos.json","a+");
    $archivo1="../data/cursos.json";
    $linea="";
    if(filesize($archivo1)>0){
    while(($linea = fgets($archivo))){
        $registro = json_decode($linea,true);
      if($_POST["accessCodeCourse"]==$registro["accessCodeCourse"]){  
        fclose($archivo);
        $respuesta["codigo"]= 0;
        $respuesta["mensaje"]= "Ya existe un curso con este codigo";
        echo json_encode($respuesta);
        break;
        }
      }
    }

    if($_POST["accessCodeCourse"]!=$registro["accessCodeCourse"]){  
        $cursos=array();
        $cursos["emailUsuario"]= $_SESSION["emailUsuario"];
        $cursos["tipoUsuario"]= $_SESSION["tipoUsuario"];
        $cursos["accessCodeCourse"]=$_POST["accessCodeCourse"];
        $cursos["levelCuorse"]=$_POST["levelCuorse"];
        $cursos["nameCourse"]=$_POST["nameCourse"];
        $cursos["sectionCourse"]=$_POST["sectionCourse"];
        $cursos["areaCourse"]=$_POST["areaCourse"];
      
      fwrite($archivo, json_encode($cursos) . "\n");
      fclose($archivo);
      $respuesta["codigo"]= 1;
      $respuesta["mensaje"]= "Curso creado exitosamente";
      echo json_encode($respuesta);
    }
    
?> 