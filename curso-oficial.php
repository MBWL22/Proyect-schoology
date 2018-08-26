<?php include("seguridad-curso.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $_SESSION["nameCourse"]; ?>| Schoology</title>
    <link rel="shortcut icon" href="img/favicon_0.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <script src="fontAwesone/js/all.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos-curso-oficial.css" rel="stylesheet">
    <link href="css/estilos-navbar-oficial.css" rel="stylesheet">
    <link href="css/estilos-area-instructor.css" rel="stylesheet">
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
              <a href="salir-curso.php" class="a-not"><div id="div-imagen"><img src="img/logo.png"></a></div>
              <div class="posicion-interna">UPGRADE</div>
              <div class="posicion-interna"  id="click-course">COURSES</div>
              <div class="posicion-interna"  id="click-group">GROUPS</div>
              <div class="posicion-interna">RESOURCES</div></a>
          <div id="div-iconos" style="float: right">
                  <div class="dropdown" style="float: right">
                          <button id="btn-dropdown" class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <?php echo $_SESSION["nombre"]." ".$_SESSION["apellido"] ;?>
                          </button>
                          <div id="dropdown-interno" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item estilo-anchor" href="#">Your Profile</a>
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
            <div style="float: right; margin-right: 5px;" >
              <select style="font-size:12px; color:brown;" id="selec-ingresar-curso">
              <option>seleccione curso</option>
              </select>
              <button id="btn-ingresar-curso" type="button">ingresar</button>
              <div id="error-ingresar-curso"></div>
            </div>

          <div id="contenido-central">
            <!--  <label id="lbl-contenido">You are not currently enrolled in any courses</label><br>
                <div id="imagen"><img src="img/cometa-curso.PNG"></div>
                <div id="cont-boton"><button class="btn btn-primary" data-toggle="modal" data-target="#crear-curso" >Create a Courses</button>
                </div>-->
            </div>
        </div>
    </div> <!--Fin del contenedor de pantalla-ningun-curso-->

        <!-- Modal -->
          <div class="modal fade" id="crear-curso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h6 class="modal-title" id="exampleModalLabel">Create course</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body"> <!--Estructura del formulario para crear cursos-->
                  
                  <div id="nota-texto" class="text-muted">You must fill in the fields marked with *</div>
                  <div id="div-code-error"> </div>
                  <table>
                    <tr>
                      <td><div class="estilo-fuente">Course name:</div><div class="ast">*</div></td>
                      <td><input type="text" placeholder="ejem: IS401" id="name-curso"></td>
                    </tr>
                    <tr>
                        <td><div class="estilo-fuente">Section Name:</div><div class="ast">*</div></td>
                        <td><input type="text" placeholder="ejem:section-1" id="section-name-curso"></td>
                      </tr>
                      <tr>
                          <td><div class="estilo-fuente">Subject Area:</div><div class="ast">*</div></td>
                          <td>
                            <select name="select-area" style="height: 28px;" class="fuente-select" id="select-area-curso">
                                <option value="s-nothing"></option>
                                <option value="s-other">Other</option>
                                <option value="s-health">Health & a Physical Education</option>
                                <option value="s-language">Language Arts</option>
                                <option value="s-math">Mathematics</option>
                                <option value="s-professional">Professional Development</option>
                                <option value="s-science">Science</option>
                                <option value="s-social">Social Studies</option>
                                <option value="s-especial">Special Education</option>
                                <option value="s-technology">Technology</option>
                                <option value="s-arts">Arts</option>
                            </select>
                         </td>
                        </tr>
                        <tr>
                            <td><div class="estilo-fuente">Level:</div><div class="ast">*</div></td>
                            <td><select name="select-level" style="height: 28px;" class="fuente-select" id="level-curso">
                                <option value="s-nothing2"></option>
                                <option value="s-none">none</option>
                                <option value="s-primary" disabled>Primary/Secondary</option>
                                <option value="s-pre">Pre-k</option>
                                <option value="s-k">K</option>
                                <option value="s-1">1</option>
                                <option value="s-2">2</option>
                                <option value="s-3">3</option>
                                <option value="s-4">4</option>
                                <option value="s-5">5</option>
                                <option value="s-6">6</option>
                                <option value="s-7">7</option>
                                <option value="s-8">8</option>
                                <option value="s-9">9</option>
                                <option value="s-10">10</option>
                                <option value="s-11">11</option>
                                <option value="s-12">12</option>
                                <option value="s-higher" disabled>Higher Education</option>
                                <option value="s-undergraduate">Undergraduate</option>
                                <option value="s-graduate">Graduate</option>
                            </select></td>
                          </tr>
                          <tr>
                      <td><div class="estilo-fuente">Access code:</div><div class="ast">*</div></td>
                      <td><input type="text" placeholder="ejem: AX34-5678" id="access-code"></td>
                    </tr>
                  </table>
              </div>
              
                <div class="modal-footer">
                  
                      <button style="text-align: center" type="button"  data-dismiss="modal" id="btn-empty-crear-curso">Create</button>
                      <button type="button" id="btn-cancel">Cancel</button>
                </div>
              </div>
            </div>
          </div>
          

    

    <div id="pantalla-ningun-grupo"> <!--Inicio de pantalla cuando no existe ningún grupo-->
        <div id="contenedor-principal" class="form-control">
            <div id="titulo-curso">Groups</div>
            <div id="anclaje-cursos"><a href="#">My Groups </a></div>
            
            <div id="contenido-central-grupo">
            <!--    <label id="lbl-contenido">You are not currently enrolled in any groups</label><br>
                <div id="imagen"><img src="img/cometa-curso.PNG"></div>
                <div id="cont-boton"><button class="btn btn-primary" data-toggle="modal" data-target="#crear-groups">Create a Groups</button>
                </div>-->
            </div>
        </div>
    </div> <!--Fin de la pantalla ningun grupo-->

        <!-- Modal -->
        <div class="modal fade" id="crear-groups" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h6 class="modal-title" id="exampleModalLabel">Create Group</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body"> <!--Estructura del formulario para crear grupos-->
                <div id="div-code-error-grupo"> </div>
                  <table>
                    <tr>
                      <td><div class="estilo-fuente">Name:</div><div class="ast">*</div></td>
                      <td><input autofocus type="text" id="name-grupo"></td>
                    </tr>
                    <tr>
                        <td><div class="estilo-fuente">Description:</div></td>
                        <td><input type="text" id="description-grupo"></td>
                      </tr>
                      <tr>
                          <td><div class="estilo-fuente">Privacy:</div></td>
                          <td>
                            <select name="select-area2" style="height: 28px;" class="fuente-select" id="sl-privacy-grupo">
                                <option value="s-school">School</option>
                                <option value="s-group">Group</option>
                                <option value="s-no-one">No one</option>
                                <option value="s-custom">custom</option>
                                
                            </select>
                            <td><div class="text-muted mensaje">Only accessible to people in your organization</div></td>
                         </td>
                        </tr>
                        <tr>
                            <td><div class="estilo-fuente">Access:</div></td>
                            <td><select name="select-level" style="height: 28px;" class="fuente-select" id="sl-acces-grupo">
                                <option value="s-invite">Invite Only</option>
                                <option value="s-allow">Allow request</option>
                                <option value="s-open">Open</option>
                            </select></td>
                            <td><div class="text-muted mensaje">Members must invited</div></td>
                            
                          </tr>
                          <tr>
                          <td><div class="estilo-fuente">Acces Code:</div><div class="ast">*</div></td>
                            <td><input autofocus type="text" id="access-code-grupo" placeholder="ejem: AX45-15DF"></td>
                        </tr>
                  </table>
              </div>
              
                <div class="modal-footer">
                  
                      <button style="text-align: center" type="button"  data-dismiss="modal" id="btn-create-grupo">Create</button>
                      <button type="button" id="btn-cancel">Cancel</button>
                </div>
              </div>
            </div>
          </div>
    <!--Fin del navbar-->
    
   
            <div class="contenedor-izquierdo">
            
                    <div class="curso-posicion imagen" style="padding-left: 20px"><img src="img/course-profile/profile 2.png"></div>
                   
                    <div class="contenedor-enlaces-curso" style="margin-top: 20px;">
                            <div class="curso-posicion"><a href="#" ><i class="fas fa-pen-alt icon-custom-4"></i>Materiales</a></div>
                            <div class="curso-posicion"><a href="#" ><i class="fas fa-pen icon-custom-4"></i>Actualizaciones</a></div>
                            <div class="curso-posicion"><a href="#" ><i class="fas fa-book icon-custom-4"></i>GradeBook</a></div>
                            <div class="curso-posicion"><a href="#" ><i class="fas fa-users-cog icon-custom-4"></i>Configuración de grado</a></div>
                            <div class="curso-posicion"><a href="#" ><i class="fas fa-star icon-custom-4"></i>Insignias</a></div>
                            <div class="curso-posicion"><a href="#" ><i class="fas fa-edit icon-custom-4"></i>Asistencia</a></div>
                            <div class="curso-posicion"><a  href="#" ><i class="fas fa-users icon-custom-4"></i>Miembro</a></div>
                    </div>
        </div>

        <div class="contenedor-derecho"> <!--Inicio de contenedor derecho-->
                <div> <!--Nav de íconos-->
                    <ul class="nav nav-tabs">
                            <li class="nav-item">
                              <div class="nav-link estilo-nombre-curso"><?php echo $_SESSION["nameCourse"]; ?><i class="fas fa-book-open icon-curso"></i></div>
                            </li>

                            
                          </ul>
               </div> <!--Fin del nav de íconos-->
               <div style="float:right"><button class="btn-styles"><i class="far fa-comments icon-notificaciones"></i>Notificaciones</button></div>

               <div id="contenido-botones"> <!--Nav de íconos-->
                <ul class="nav nav-tabs">
                        <li class="nav-item">
                                <div class="dropdown">
                                        <button class="dropdown-toggle estilo-boton" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Añadir 
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">añadir actualización</a>
                                                <a class="dropdown-item" href="#">añadir asignacion</a>
                                                <a class="dropdown-item" href="#">añadir evento</a>
                                        </div>
                                      </div>
                        </li>

                        <li class="nav-item">
                                <div class="dropdown" style="margin-left: 20px">
                                        <button class="dropdown-toggle estilo-boton" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Opciones
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#">Guarde el curso en los recursos</a>
                                          
                                        </div>
                                      </div>
                        </li>
                        
                      </ul>
                </div> <!--Fin del nav de íconos-->


                <div class="contenedor-final" id="curso-asignaciones">

                      
                </div>
                

                        
                
                
    </div> <!--Fin del contenedor derecho-->


    <div class="form-control invitacion-colegas" id="panel-tareas-curso">
           
           </div> 
   
           <div class="form-control invitacion-colegas" id="panel-eventos-curso">
              
           </div>
           
           
    <!--<div style="float: right" class="invitacion-colegas" >
            <div id="proximo" style="float:left">Proximo</div>
            <div style="float:right"><button class="btn btn-link" data-toggle="modal" data-target="#crear-eventos-en-curso">añadir evento</button></div>-->

            <!--ventana modal para crear eventos-->
                    <!-- Modal -->
        <div class="modal fade" id="crear-eventos-en-curso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h6 class="modal-title" id="exampleModalLabel" style="color:darkblue">Crear evento</h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body"> <!--Estructura del formulario para crear grupos-->
                        <div id="contenido-crear-eventos"> <!--Contenido central de la pantalla de eventos-->
                            <div style="float: left" class="titulos-asignacion">Nombre:</div><div class="ast">*</div><br>
                                <input id="txt-nombre-evento" autofocus type="text"><br>
                            <div style="margin-top: 10px; float: left;" class="titulos-asignacion">Título</div><div class="ast">*</div><br>
                                <input type="text" id="txt-titulo-evento"><br>
                            <label class="titulos-asignacion posicion-titulos" style="margin-top: 10px">Descripción</label><br>
                                <textarea id="area-crear-evento"></textarea><br>
                            <div>
                                <label class="titulos-asignacion">RSVP</label><br>
                                <select name="rsvp" class="posicion-titulos"><br>
                                        <option value="opt-discapacitado">Discapacitado</option>
                                        <option value="opt-only-invited">Solo los invitados pueden confirmar su asitencia</option>
                                </select><br>
                            </div>
                            <label class="titulos-asignacion">Cuando</label><br>
                                <input type="date"><br>
                           </div> 
                                
                  
                    <div class="modal-footer">
                      
                          <button style="text-align: center" type="button"  data-dismiss="modal" id="btn-create" class="btn btn-primary">Guardar Cambios</button>
                          <button type="button" id="btn-cancel" class="btn btn-secondary" style="color: white">Cancelar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
            <!--Fin de la ventana modal de creación de eventos-->
            
            
            <!--<div id="cont-interno-asignaciones">
                <div id="contenedor-anclaje-asignaciones"><a href="#"><i class="fas fa-file-signature icon-custom-2"></i>Nombre de la asignaciones</a></div>
               <div class="footer-asignaciones">Hora</div> 
               <div class="footer-asignaciones">Fecha</div> 
            </div>

            <div id="cont-interno-asignaciones">
                <div id="contenedor-anclaje-asignaciones"><a href="#"><i class="fas fa-file-signature icon-custom-2"></i>Nombre de la asignación</a></div>
               <div class="footer-asignaciones">Hora</div> 
               <div class="footer-asignaciones">Fecha</div> 
            </div>

            <div id="contenedor-interno-eventos"> 
                <div><a href="#"><i class="fas fa-calendar-alt icon-custom-2"></i>Nombre del evento</a></div>
            </div>
        </div>--> <!--Fin del div de asignaciones y eventos-->
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/controlador-instructor.js"></script>
      <script src="js/controlador.js"></script>
</body>
</html>