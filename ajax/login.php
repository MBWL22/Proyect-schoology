<?php
    session_start(); //Es obligatorio llamar a esta funcion para acceder a $_SESSION
    $archivo = fopen("../data/usuarios.json","r");
    while(($linea=fgets($archivo))){
        $registro = json_decode($linea,true);
        if ($registro["emailUsuario"]==$_POST["emailUsuario"]
            && $registro["password"]==$_POST["password"]){
                //Usuario con credenciales correctas
                $_SESSION["emailUsuario"] = $_POST["emailUsuario"];
                $_SESSION["nombre"] =$registro["nombre"];
                $_SESSION["apellido"] = $registro["apellido"];
                $_SESSION["password"] = $_POST["password"];
                $_SESSION["tipoUsuario"] = $registro["tipoUsuario"];
                echo '{"codigo":0,"mensaje":"Usuario logueado con exito"}';
                fclose($archivo);
                exit();
        }
    }
    
    echo '{"codigo":1,"mensaje":"Credenciales invalidas"}';
?>