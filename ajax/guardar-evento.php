<?php
   // echo json_encode($_POST);
    session_start(); 
    $linea1="";
    $linea2="";
    if($_POST["cursoEvento"]=="Ninguno" && $_POST["grupoEvento"]=="Ninguno"){
        $respuesta["codigo"]= 0;
        $respuesta["mensaje"]= "Debe seleccionar un grupo o Curso";
        echo json_encode($respuesta);
    }else if($_POST["cursoEvento"]!="Ninguno" && $_POST["grupoEvento"]=="Ninguno"){
        $archivo = fopen("../data/eventos.json","a+");
        $evento =array();
        $evento["nombre"]= $_SESSION["nombre"];
        $evento["tipoUsuario"]= $_SESSION["tipoUsuario"];
        $evento["apellido"] = $_SESSION["apellido"];
        $evento["descripEvento"] = $_POST["descripEvento"];
        $evento["tituloEvento"] = $_POST["tituloEvento"];
        $evento["nombreEvento"] = $_POST["nombreEvento"];
        $evento["fechaEvento"] = $_POST["fechaEvento"];
        $evento["emailUsuario"]=$_SESSION["emailUsuario"];
        $archivoCursos = fopen("../data/cursos.json","r");
        while(($linea1 = fgets($archivoCursos))){
            $registro = json_decode($linea1,true);
          if($_POST["cursoEvento"]==$registro["nameCourse"]){  
            $evento["accessCodeCourse"]=$registro["accessCodeCourse"];
            $evento["nameCourse"]=$registro["nameCourse"];
            break;
            }
        }
        fwrite($archivo, json_encode($evento)."\n");
        echo json_encode($evento);
        fclose($archivoCursos); 
        fclose($archivo);
    }elseif($_POST["cursoEvento"]=="Ninguno" && $_POST["grupoEvento"]!="Ninguno"){
        $archivo = fopen("../data/eventos.json","a+");
        $evento =array();
        $evento["nombre"]= $_SESSION["nombre"];
        $evento["tipoUsuario"]= $_SESSION["tipoUsuario"];
        $evento["apellido"] = $_SESSION["apellido"];
        $evento["descripEvento"] = $_POST["descripEvento"];
        $evento["tituloEvento"] = $_POST["tituloEvento"];
        $evento["nombreEvento"] = $_POST["nombreEvento"];
        $evento["fechaEvento"] = $_POST["fechaEvento"];
        $evento["emailUsuario"]=$_SESSION["emailUsuario"];
        $archivoCursos = fopen("../data/grupos.json","r");
        while(($linea1 = fgets($archivoGrupos))){
            $registro = json_decode($linea1,true);
          if($_POST["grupoEvento"]==$registro["nameGrupo"]){  
            $evento["accessCodeGrupo"]=$registro["accessCodeGrupo"];
            $evento["nameGrupo"]=$registro["nameGrupo"];
            break;
            }
        }
        fwrite($archivo, json_encode($evento)."\n");
        echo json_encode($evento);
        fclose($archivoGrupos); 
        fclose($archivo);
    }else{
        $archivo = fopen("../data/eventos.json","a+");
        $evento =array();
        $evento["nombre"]= $_SESSION["nombre"];
        $evento["tipoUsuario"]= $_SESSION["tipoUsuario"];
        $evento["apellido"] = $_SESSION["apellido"];
        $evento["descripEvento"] = $_POST["descripEvento"];
        $evento["tituloEvento"] = $_POST["tituloEvento"];
        $evento["nombreEvento"] = $_POST["nombreEvento"];
        $evento["fechaEvento"] = $_POST["fechaEvento"];
        $evento["emailUsuario"]=$_SESSION["emailUsuario"];
        $archivoCursos = fopen("../data/cursos.json","r");
        while(($linea1 = fgets($archivoCursos))){
            $registro = json_decode($linea1,true);
          if($_POST["cursoEvento"]==$registro["nameCourse"]){  
            $evento["accessCodeCourse"]=$registro["accessCodeCourse"];
            $evento["nameCourse"]=$registro["nameCourse"];
            break;
            }
        }
        fwrite($archivo, json_encode($evento)."\n");
        echo json_encode($evento);
        fclose($archivoCursos); 

        $evento =array();
        $evento["nombre"]= $_SESSION["nombre"];
        $evento["tipoUsuario"]= $_SESSION["tipoUsuario"];
        $evento["apellido"] = $_SESSION["apellido"];
        $evento["descripEvento"] = $_POST["descripEvento"];
        $evento["tituloEvento"] = $_POST["tituloEvento"];
        $evento["nombreEvento"] = $_POST["nombreEvento"];
        $evento["fechaEvento"] = $_POST["fechaEvento"];
        $evento["emailUsuario"]=$_SESSION["emailUsuario"];
        $archivoCursos = fopen("../data/grupos.json","r");
        while(($linea2 = fgets($archivoGrupos))){
            $registro = json_decode($linea2,true);
          if($_POST["grupoEvento"]==$registro["nameGrupo"]){  
            $evento["accessCodeGrupo"]=$registro["accessCodeGrupo"];
            $evento["nameGrupo"]=$registro["nameGrupo"];
            break;
            }
        }
        fwrite($archivo, json_encode($evento)."\n");
        echo json_encode($evento);
        fclose($archivoGrupos); 
        fclose($archivo);

    }


    
    //var_dump($usuarios);
?>