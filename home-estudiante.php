<?php include("seguridad.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home | Schoology</title>
    <link rel="shortcut icon" href="img/favicon_0.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <script src="fontAwesone/js/all.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos-area-instructor.css" rel="stylesheet">
    <link href="css/estilos-navbar-oficial.css" rel="stylesheet">
    <link href="css/estilos-curso-oficial.css" rel="stylesheet">
    <script defer src="js/fontawesome-all.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--Inicio del navbar-->
    <header>
      <div id="menu-titular">
          <div id="anclaje-boton" href="" style="float: right" onclick="visualizar()">
              <i class="fas fa-bars"></i>
          </div>
         <div class="s">Schoology</div>
         <div> 
              <a href="#"><div class="icon-o" ><i class="fas fa-search colorY" style="color: white; width: 25px; height: 25px;"></i></div></a>
              <a href="#"><div class="icon-o"><i class="fas fa-angle-double-down colorY"style="color: white; width: 25px; height: 25px;"></i></div></a>
              <a href="#"><div class="icon-o"><i class="far fa-calendar-alt colorY"style="color: white; width: 25px; height: 25px;"></i></div></a>
              <a href="#"><div class="icon-o"><i class="far fa-envelope colorY"style="color: white; width: 25px; height: 25px;"></i></div></a>
              <a href="#"><div class="icon-o"><i class="far fa-bell colorY"style="color: white; width: 25px; height: 25px;"></i></div></a>
          </div>
      </div>
      
      <div id="navbar-contenedor">
              <a href="#" class="a-not"><div id="div-imagen"><img src="img/logo.png"></a></div>
              <div class="posicion-interna"  id="click-course">COURSES</div>
              <div class="posicion-interna"  id="click-group">GROUPS</div>
              <div class="posicion-interna">RESOURCES</div></a>
              <div class="posicion-interna">GRADES</div>
              
              
          <div id="div-iconos" style="float: right">
                  <div class="dropdown" style="float: right">
                          <button id="btn-dropdown" class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <?php echo $_SESSION["nombre"]." ".$_SESSION["apellido"] ;?>
                          </button>
                          <div id="dropdown-interno" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item estilo-anchor" href="#">Your perfil</a>
                            <a class="dropdown-item estilo-anchor" href="#">UNAH</a>
                            <a class="dropdown-item estilo-anchor" href="#">Settings</a>
                            <hr style="border: solid 0.5px; color: white">
                            <a class="dropdown-item estilo-anchor" href="logout.php">Logout</a>
                          </div>
                      </div>
              <a href="#"><div class="p-interna-derecha"><i class="fas fa-search" style="color: white; width: 25px; height: 25px;"></i></div></a>
              <a href="#"><div class="p-interna-derecha"><i class="fas fa-angle-double-down"style="color: white; width: 25px; height: 25px;"></i></div></a>
              <a href="#"><div class="p-interna-derecha"><i class="far fa-calendar-alt"style="color: white; width: 25px; height: 25px;"></i></div></a>
              <a href="#"><div class="p-interna-derecha"><i class="far fa-envelope"style="color: white; width: 25px; height: 25px;"></i></div></a>
              <a href="#"><div class="p-interna-derecha"><i class="far fa-bell"style="color: white; width: 25px; height: 25px;"></i></div></a>
          </div>
      </div>
  </header>

  <!--Fin del navbar-->

    <div id="pantalla-ningun-curso" > <!--Inicio de pantalla cuando no existe ningún curso-->
      <div id="contenedor-principal" class="form-control">
            <div id="titulo-curso">Courses</div>
            <div id="anclaje-cursos"><a href="#">My Courses</a></div><br>
          <div id="contenido-central">
            <!--  <label id="lbl-contenido">You are not currently enrolled in any courses</label><br>
                <div id="imagen"><img src="img/cometa-curso.PNG"></div>
                <div id="cont-boton"><button class="btn btn-primary" data-toggle="modal" data-target="#crear-curso" >Create a Courses</button>
                </div>-->
            </div>
        </div>
    </div> <!--Fin del contenedor de pantalla-ningun-curso-->

          

    

    <div id="pantalla-ningun-grupo"> <!--Inicio de pantalla cuando no existe ningún grupo-->
        <div id="contenedor-principal" class="form-control">
            <div id="titulo-curso">Groups</div>
            <div id="anclaje-cursos"><a href="#">My Groups </a></div>
            
            <div id="contenido-central-grupo">
             <label id="lbl-contenido">You have not joined any groups</label><br>
                <div id="imagen"><img src="img/cometa-curso.PNG"></div>
                <div id="cont-boton"><button class="btn btn-primary" data-toggle="modal" data-target="#crear-groups">Join a Group</button>
                </div>
            </div>
        </div>
    </div> <!--Fin de la pantalla ningun grupo-->

        <!-- Modal -->

    <!--Fin del navbar-->

    <!--Estructura de la página oficial del área de instructor-->
    <div id="nav-principal">
            <ul class="nav nav-tabs">
               <li class="nav-item">
                 <a class="nav-link active" href="#">ACTIVIDADES RECIENTES</a>
               </li>
               <li class="nav-item">
                 <a id="anchor-tablero-curso" class="nav-link" href="#">TABLERO DE CURSOS</a>
               </li>
           </ul>

       </div> <!--fin del nav principal-->
       
       <div id="div-oficial" class="form-control" style="float:left">
             <div id="nav-secundario"> <!--Nav de íconos-->
                <ul class="nav nav-tabs">
                        <li class="nav-item">
                          <div class="nav-link">Post:</div>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#" id="click-actualizar"><i class="fas fa-pen icon-custom"></i>Actualizar</a>
                        </li>
                      </ul>
                </div> <!--Fin del nav de íconos-->
                <!--Formulario para actualizar-->
        <div id="formulario-actualizar" class="form-control">
                <div>
                  <ul class="nav nav-tabs">
                      <li class="nav-item">
                        <div class="nav-link active" id="actualizar-post">Post:</div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" id="act-actualizar"><i class="fas fa-pen icon-custom"></i>Actualizar</a>
                      </li>
                  </ul>
                </div>
                  <textarea id="txt-area-actualizar" autofocus></textarea><br>
                
                  <div id="contenido-navs-actualizar">
                          <ul class="nav">
                                  <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fas fa-pen iconos-actualizar"></i></a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fas fa-link iconos-actualizar"></i></a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fas fa-archive iconos-actualizar"></i></a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fas fa-question-circle iconos-actualizar"></i></a>
                                  </li>
                                </ul>
                  </div>
                  <div id="error-seleccionar"> </div> 
                    
                    <button class="btn btn-primary" id="btn-crear-update">Crear</button> 
                    </div> <!--Fin del nav de íconos-->
                      
                        <!--Publicaciones recientes realizadas por el instructor, totalmente dinámicas-->
       
                       <!--En esta sección del código aparecen las publicaciones realizadas por el instructor-->
                       <div id="contenido-update">   
             
                       </div>
                       
                       <div id="publicacion"> <!--Esto no se modificará es la información de Bienvenida, se encontrará en duro-->
                           <table>
                               <tr>
                                   <td rowspan="2"><img src="img/schoology-logo (1) (1).png"></td>
                                   <td><div id="encabezado-publicacion">Bienvenid@ a Schoology  <?php echo $_SESSION["nombre"]." ".$_SESSION["apellido"] ;?> </div></td>
                               </tr>
                               <tr>
                                   <td id="contenido-publicacion">Aquí hay algunas cosas que puede hacer para comenzar:<br>
                                           <a href="#">Lea nuestra empresa Blog</a><br>
                                           <a href="#">Guía de ayuda</a></td>
                               </tr>
                           </table>
                       </div>
       
                       
                       
       
                   
               </div> <!--Fin del div principal-->

               <!--Asignaciones realizadas por el instructor en el curso al que el estudiante pertenece-->

              <div class="form-control invitacion-colegas" id="panel-tareas-est">
           
              </div> 
   
              <div class="form-control invitacion-colegas" id="panel-eventos-est">

              </div> 

                    
               <!--Fin del div de asignaciones y eventos-->
                

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/controlador-estudiante.js"></script> 
    <script src="js/controlador.js"></script> 
</body>
</html>