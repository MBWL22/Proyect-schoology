<?php
    session_start(); 
    if (!isset($_SESSION["emailUsuario"]))
        header("Location: login.html");
?>
