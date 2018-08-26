<?php include("seguridad-estu.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign up for a Schoology Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet"  href="css/estilos-instructor.css" >
    <link rel="shortcut icon" href="img/schoology-logo (1).png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">  
</head>

</head>
<body>
    <div class="cuadro-superior">  
            <a href="index.html"> 
               <div id="div-logo"> <img src="img/header-logo-transparent.png" width="215"  alt="31" id="imagen-logo" ></div>
            </a> 
    </div><br>

    <div  id="cuadro-inter">
       <div class="posicion">
        <form id="cuadro-pequeño" class="container" >
            <div class="form-row">
            <h3>Sign up for Schoology</h3>
            <a href="student.html" id="Back-a">Back</a>
            <div style="text-align: center;"><?php echo $_SESSION["accessCodeCourse"] ?></div><br>
            <div class="posicion-forms form-row" >
                <div id="div-ins-error"></div>
                <div class="col-6 posicion-registro" >
                  <input type="text" class="form-control input-small" placeholder="First Name" id="fname-est">
                </div>
                <div class="col-6 posicion-registro" >
                  <input type="text" class="form-control input-small" placeholder="Last Name" id="posicion-nombre-est">
                </div>
                <div class="col-12 posicion-registro">
                   <input type="email" class="form-control" placeholder="Email address" id="email-est">
                </div>
                <div class="col-12 posicion-registro">
                  <input type="password" class="form-control" placeholder="Password" id="password-est">
                </div>  
                <div class="col-12 posicion-registro">
                   <input type="password" class="form-control" placeholder="Confirm Password" id="confirm-password-est">
                </div>
                <label>Birthday date:</label>
                <div class="col-12 posicion-registro">
                      <input type="date" class="form-control"  id="date-cumple-est">
              </div>
    
                <div class="terminos col-12">
                    <label for="rbt-terminos"> 
                       <input type="checkbox" id="rbt-terminos" name="checkbox2">By clicking <b>Register</b>, you are agreeing to our <a href="#">Privacy Policy</a> and <a href="#">Terms of Use</a>
                    </label>
                </div> 
                <button type="button" class="boton-registro col-12" id="btn-registro-est"> Register</button>
           </div>
        </div>
        </form>
       </div> 
    </div>

    <footer id="ultimo-div">
        <div class="contenido" class="container">
            <p>
                    Schoology © 2018 · <a href="#">Privacy Policy</a> · <a href="#">Terms of Use</a> · <a href="#">Help Center</a>
            </p>


        </div>
    </footer>
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/controlador.js"></script>
    
    
  
</body>
</html>