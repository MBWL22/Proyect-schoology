<?php
    session_start(); //Es obligatorio llamar a esta funcion para acceder a $_SESSION
    $archivo = fopen("../data/cursos.json","r");
    $linea="";
    while(($linea=fgets($archivo))){
        $registro = json_decode($linea,true);
        if ($registro["nameCourse"]==$_POST["nameCourse"]){
                //Usuario con credenciales correctas
                $_SESSION["sectionCourse"] =$registro["sectionCourse"];
                $_SESSION["nameCourse"] = $registro["nameCourse"];
                $_SESSION["accessCodeCourse"] = $registro["accessCodeCourse"];
                $_SESSION["tipoUsuario"] = $registro["tipoUsuario"];
                echo '{"codigo":0,"mensaje":"Usuario en curso con exito"}';
                fclose($archivo);
                exit();
        }
    }
    
    echo '{"codigo":1,"mensaje":"No existe un curso"}';
?>