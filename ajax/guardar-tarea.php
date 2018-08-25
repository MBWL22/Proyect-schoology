<?php
   session_start(); 
    $linea1="";
    if($_POST["cursoTarea"]=="Ninguno" ){
        $respuesta["codigo"]= 0;
        $respuesta["mensaje"]= "Debe seleccionar un Curso";
        echo json_encode($respuesta);
    }else{
        $archivo = fopen("../data/tareas.json","a+");
        $tarea =array();
        $tarea["nombre"]= $_SESSION["nombre"];
        $tarea["tipoUsuario"]= $_SESSION["tipoUsuario"];
        $tarea["apellido"] = $_SESSION["apellido"];
        $tarea["fechaTarea"] = $_POST["fechaTarea"];
        $tarea["puntosTarea"] = $_POST["puntosTarea"];
        $tarea["descripTarea"] = $_POST["descripTarea"];
        $tarea["nombreTarea"] = $_POST["nombreTarea"];
        $tarea["emailUsuario"]=$_SESSION["emailUsuario"];
        $archivoCursos = fopen("../data/cursos.json","r");
        while(($linea1 = fgets($archivoCursos))){
            $registro = json_decode($linea1,true);
          if($_POST["cursoTarea"]==$registro["nameCourse"]){  
            $tarea["accessCodeCourse"]=$registro["accessCodeCourse"];
            $tarea["nameCourse"]=$registro["nameCourse"];
            break;
            }
        }
        fwrite($archivo, json_encode($tarea)."\n");
        echo json_encode($tarea);
        fclose($archivoCursos); 
        fclose($archivo);
    }
?> 