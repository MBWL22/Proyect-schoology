<?php
    session_start(); 
    if (!isset($_SESSION["accessCodeCourse"]))
        header("Location: student.html");
   // if ($_SESSION["tipoUsuario"]=="ADMIN")
?>
