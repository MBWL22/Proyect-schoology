<?php
    session_start(); 
    if (!isset($_SESSION["accessCodeCourse"]))
        header("Location: home-instructor.php");
   // if ($_SESSION["tipoUsuario"]=="ADMIN")
?>