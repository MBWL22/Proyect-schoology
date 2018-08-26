<?php
    session_start(); //Es obligatorio llamar a esta funcion para acceder a $_SESSION
    $archivo = fopen("../data/cursos.json","r");
    $linea="";
    while(($linea = fgets($archivo))){
        $registro = json_decode($linea,true);
      if($_POST["accessCodeCourse"]==$registro["accessCodeCourse"]){  
        $_SESSION["accessCodeCourse"] = $registro["accessCodeCourse"];
        $respuesta["codigo"]= 1;
        $respuesta["mensaje"]= "El codigo de curso es valido";
        fclose($archivo);
        echo json_encode($respuesta);
        exit();
        }
      }

      if (isset($_SESSION["accessCodeCourse"])){
        $respuesta["codigo"]= 0;
        $respuesta["mensaje"]= "El codigo de curso no es valido ";
        echo json_encode($respuesta);
      }
    
?>