<?php
    session_start(); //Es obligatorio llamar a esta funcion para acceder a $_SESSION
    $archivo = fopen("../data/usuarios.json","a+");
    $linea="";
    while(($linea = fgets($archivo))){
        $registro = json_decode($linea,true);
      if($_POST["emailUsuario"]==$registro["emailUsuario"]){  
        fclose($archivo);
        $respuesta["codigo"]= 0;
        $respuesta["mensaje"]= "Ya existe una cuenta  con este correo electronico";
        echo json_encode($respuesta);
        break;
        }
      }
    if($_POST["emailUsuario"]!=$registro["emailUsuario"]){  
      $_SESSION["emailUsuario"] = $_POST["emailUsuario"];
      $_SESSION["nombre"] = $_POST["nombre"];
      $_SESSION["apellido"] = $_POST["apellido"];
      $_SESSION["password"] = $_POST["password"];
      $_SESSION["tipoUsuario"] = $_POST["tipoUsuario"];
      fwrite($archivo, json_encode($_POST) . "\n");
      fclose($archivo);
      $respuesta["codigo"]= 1;
      $respuesta["mensaje"]= "Registro guardado exitosamente";
      echo json_encode($respuesta);
    }
?>
 