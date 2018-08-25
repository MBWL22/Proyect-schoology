<?php
   // echo json_encode($_POST);
    session_start(); 
    $linea1="";
    $linea2="";
    if($_POST["cursoUpdate"]=="Ninguno" && $_POST["grupoUpdate"]=="Ninguno"){
        $respuesta["codigo"]= 0;
        $respuesta["mensaje"]= "Debe seleccionar un grupo o Curso";
        echo json_encode($respuesta);
    }else if($_POST["cursoUpdate"]!="Ninguno" && $_POST["grupoUpdate"]=="Ninguno"){
        $archivo = fopen("../data/update.json","a+");
        $update =array();
        $update["nombre"]= $_SESSION["nombre"];
        $update["tipoUsuario"]= $_SESSION["tipoUsuario"];
        $update["apellido"] = $_SESSION["apellido"];
        $update["postUpdate"] = $_POST["postUpdate"];
        $update["emailUsuario"]=$_SESSION["emailUsuario"];
        $archivoCursos = fopen("../data/cursos.json","r");
        while(($linea1 = fgets($archivoCursos))){
            $registro = json_decode($linea1,true);
          if($_POST["cursoUpdate"]==$registro["nameCourse"]){  
            $update["accessCodeCourse"]=$registro["accessCodeCourse"];
            $update["nameCourse"]=$registro["nameCourse"];
            break;
            }
        }
        fwrite($archivo, json_encode($update)."\n");
        echo json_encode($update);
        fclose($archivoCursos); 
        fclose($archivo);
    }elseif($_POST["cursoUpdate"]=="Ninguno" && $_POST["grupoUpdate"]!="Ninguno"){
        $archivo = fopen("../data/update.json","a+");
        $update =array();
        $update["nombre"]= $_SESSION["nombre"];
        $update["tipoUsuario"]= $_SESSION["tipoUsuario"];
        $update["apellido"] = $_SESSION["apellido"];
        $update["postUpdate"] = $_POST["postUpdate"];
        $update["emailUsuario"]=$_SESSION["emailUsuario"];
        $archivoGrupos = fopen("../data/grupos.json","r");
        while(($linea2 = fgets($archivoGrupos))){
            $registro = json_decode($linea2,true);
          if($_POST["grupoUpdate"]==$registro["nameGrupo"]){  
            $update["accessCodeGrupo"]=$registro["accessCodeGrupo"];
            $update["nameGrupo"]=$registro["nameGrupo"];
            fclose($archivoGrupos);
            fwrite($archivo, json_encode($update)."\n");
            fclose($archivo);
            echo json_encode($update);
            break;
            }
        }
    }else{
        $archivo = fopen("../data/update.json","a+");
        $update1 =array();
        $update1["nombre"]= $_SESSION["nombre"];
        $update1["tipoUsuario"]= $_SESSION["tipoUsuario"];
        $update1["apellido"] = $_SESSION["apellido"];
        $update1["postUpdate"] = $_POST["postUpdate"];
        $update1["emailUsuario"]=$_SESSION["emailUsuario"];
        $archivoGrupos = fopen("../data/grupos.json","r");
        while(($linea1 = fgets($archivoGrupos))){
            $registro = json_decode($linea1,true);
          if($_POST["grupoUpdate"]==$registro["nameGrupo"]){  
            $update1["accessCodeGrupo"]=$registro["accessCodeGrupo"];
            $update1["nameGrupo"]=$registro["nameGrupo"];
            fclose($archivoGrupos);
            fwrite($archivo, json_encode($update1)."\n");
            echo json_encode($update1);
            break;
            }
        }

        $update =array();
        $update["nombre"]= $_SESSION["nombre"];
        $update["tipoUsuario"]= $_SESSION["tipoUsuario"];
        $update["apellido"] = $_SESSION["apellido"];
        $update["postUpdate"] = $_POST["postUpdate"];
        $update["emailUsuario"]=$_SESSION["emailUsuario"];
        $archivoCursos = fopen("../data/cursos.json","r");
        while(($linea2 = fgets($archivoCursos))){
            $registro = json_decode($linea2,true);
          if($_POST["cursoUpdate"]==$registro["nameCourse"]){  
            $update["accessCodeCourse"]=$registro["accessCodeCourse"];
            $update["nameCourse"]=$registro["nameCourse"];
            fclose($archivoCursos);
            fwrite($archivo, json_encode($update)."\n");
            fclose($archivo);
            echo json_encode($update);
            break;
            }
        }

    }


    
    //var_dump($usuarios);
?>