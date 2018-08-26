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
                        <li class="nav-item">
                          <a class="nav-link" href="#" id="click-asignar"><i class="fas fa-file-signature icon-custom"></i>Asignación</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#" id="click-evento"><i class="fas fa-calendar-alt icon-custom"></i>Eventos</a>
                              </li>
                        <!--<li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Más</a>
                                <div class="dropdown-menu">
                                  <a id="anchor-drop-publicacion" class="dropdown-item" href="#"><i class="fas fa-upload icon-custom"></i>Publicación personal del blog</a>
                                </div>
                              </li>-->
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
                  <label class="titulos-asignacion">Enviar a:</label> 
                  
                 <button style="width: 100px" data-toggle="modal" data-target="#realizar-busqueda-1" class="btn btn-warning" ><i class="fas fa-search"></i></button>

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

                    <!--Ventana modal de búsqueda-->
                 <div class="modal fade" id="realizar-busqueda-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h6 class="modal-title" id="exampleModalLabel">Vistazo</h6>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <table>
                                <tr>
                                  <td><div class="estilo-modal"> <i class="fas fa-book-open icon-custom-3"></i>Cursos:</div></td>
                                  <td>
                                      <select class="estilo-interno" id="selec-cursos-ins">
                                       <option>Ninguno</option>
                                      </select>
                                 </td>
                                </tr>
                                <tr>
                                    <td><div class="estilo-modal"><i class="fas fa-users icon-custom-3"></i>Grupos:</div></td>
                                    <td>
                                        <select class="estilo-interno" id="selec-grupos-ins">
                                        <option>Ninguno</option>
                                        </select>
                                    </td>
                                  </tr>
                                  
                              </table>
                          </div>
                          
                            <div class="modal-footer">
                              
                                  <button style="text-align: center" type="button"  data-dismiss="modal" id="btn-seleccionar">Seleccione</button>
                                  <button type="button" id="btn-cancel" data-dismiss="modal">Cancelar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--Fin ventana modal-->

                      
    
                </div> <!--Fin del formulario para actualizar-->

                <!--Formulario para realizar asignaciones-->
        <div id="formulario-asignar" class="form-control">
                <div>
                  <ul class="nav nav-tabs">
                      <li class="nav-item">
                        <div class="nav-link active" id="asignar-post">Post:</div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" id="act-actualizar"><i class="fas fa-file-signature icon-custom"></i>Asignación</a>
                      </li>
                  </ul>
                </div>
                <div> <!--Contenido central de la pantalla de asignaciones-->
                  
                    <label class="titulos-asignacion">Nombre</label><br>
                    <input id="txt-nombre-asignacion" autofocus type="text"><br>
                    <label class="titulos-asignacion">Descripción</label><br>
                    <textarea id="area-asignacion"></textarea><br>
                    <label class="titulos-asignacion">Puntos Máximos</label>
                    <input id="txt-puntos" type="text" placeholder="100%">
                    <label class="titulos-asignacion">Enviar a:</label>
                    <button style="width: 100px" data-toggle="modal" data-target="#realizar-busqueda" class="btn btn-warning" ><i class="fas fa-search"></i></button>

                    <!--Ventana modal de búsqueda-->
                   <div class="modal fade" id="realizar-busqueda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h6 class="modal-title" id="exampleModalLabel">Vistazo</h6>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <table>
                                <tr>
                                  <td><div class="estilo-modal"> <i class="fas fa-book-open icon-custom-3"></i>Cursos:</div></td>
                                  <td>
                                      <select class="estilo-interno" id="selec-cursos-asig">
                                       <option>Ninguno</option>
                                      </select>
                                 </td>
                                </tr>
                              </table>
                          </div>
                          
                            <div class="modal-footer">
                              
                                  <button style="text-align: center" type="button"  data-dismiss="modal" id="btn-seleccionar-asig">Seleccione</button>
                                  <button type="button" id="btn-cancel" data-dismiss="modal">Cancelar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                  <!--Fin ventana modal-->

                  <div id="div-temporal-oculto">
                      <table>
                          <tr>
                              <td class="estilo-titulo-tabla">Fecha de vencimiento:</td>
                              <td><input class="estilo-interno" type="date" id="fecha-asig"></td>
                          </tr>
                      </table>
                      <div style="text-align:end; margin-top: 20px; margin-bottom: 20px"><input type="button" class="btn btn-primary" value="Crear" id="btn-crear-asignacion">
                      </div>
                  </div> <!--Fin del div-temporal-oculto-->
                  
                </div> <!--Fin del contenido central-->
                
              </div> <!--Fin del formulario para crear asignaciones-->

              <!--Formulario para realizar eventos-->
        <div id="formulario-evento" class="form-control">
                <div>
                  <ul class="nav nav-tabs">
                      <li class="nav-item">
                        <div class="nav-link active" id="asignar-post">Post:</div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" id="actualizar-evento"><i class="fas fa-calendar-alt icon-custom"></i>Evento</a>
                      </li>
                  </ul>
                </div>
                <div id="contenido-crear-eventos"> <!--Contenido central de la pantalla de eventos-->
                    <div style="float: left" class="titulos-asignacion">Nombre:</div><div class="ast">*</div><br>
                        <input id="txt-nombre-evento" autofocus type="text"><br>
                    <div style="margin-top: 10px; float: left;" class="titulos-asignacion">Título</div><div class="ast">*</div><br>
                        <input type="text" id="txt-titulo-evento"><br>
                    <label class="titulos-asignacion posicion-titulos" style="margin-top: 10px">Descripción</label><br>
                        <textarea id="area-crear-evento"></textarea><br>
                   
                    <label class="titulos-asignacion">Cuando</label><br>
                        <input type="date" id="fecha-evento"><br>
                    
                        
                    <label class="titulos-asignacion">Enviar a:</label>
                    <div><button style="width: 100px" data-toggle="modal" data-target="#realizar-busqueda-2" class="btn btn-warning" ><i class="fas fa-search"></i></button></div>

                    <!--Ventana modal de búsqueda-->
                    <div class="modal fade" id="realizar-busqueda-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h6 class="modal-title" id="exampleModalLabel">Vistazo</h6>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <table>
                                <tr>
                                  <td><div class="estilo-modal"> <i class="fas fa-book-open icon-custom-3"></i>Cursos:</div></td>
                                  <td>
                                      <select class="estilo-interno" id="selec-cursos-even">
                                       <option>Ninguno</option>
                                      </select>
                                 </td>
                                </tr>
                                <tr>
                                    <td><div class="estilo-modal"><i class="fas fa-users icon-custom-3"></i>Grupos:</div></td>
                                    <td>
                                        <select class="estilo-interno" id="selec-grupos-even">
                                        <option>Ninguno</option>
                                        </select>
                                    </td>
                                  </tr>
                                  
                              </table>
                          </div>
                          
                            <div class="modal-footer">
                              
                                  <button style="text-align: center" type="button"  data-dismiss="modal" id="btn-seleccionar-even">Seleccione</button>
                                  <button type="button" id="btn-cancel" data-dismiss="modal">Cancelar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--Fin ventana modal-->

                    <div id="btn-crear-evento"><input  type="button" value="crear" class="btn btn-primary" id="btn-crear-even"></div>
                  </div> <!--Fin del contenido central para crear eventos-->
              
                
              </div> <!--Fin del formulario para crear eventos-->
      
                <!--Publicaciones recientes realizadas por el instructor, totalmente dinámicas-->

                <!--En esta sección del código aparecen las publicaciones realizadas por el instructor, dichas publicaciones son ejecutadas cuando dicho instructor da click en ACTUALIZAR (enlace que se encuentra en nav)-->
                <div id="publicacion"> <!--Esto no se modificará es la información de Bienvenida, se encontrará en duro-->
                    <table>
                        <tr>
                            <td rowspan="2"><img src="img/schoology-logo (1) (1).png"></td>
                            <td><div id="encabezado-publicacion">Bienvenid@ a Schoology <?php echo $_SESSION["nombre"]." ".$_SESSION["apellido"] ;?></div></td>
                        </tr>
                        <tr>
                            <td id="contenido-publicacion">Aquí hay algunas cosas que puede hacer para comenzar:<br>
                                    <a href="#">Lea nuestra empresa Blog</a><br>
                                    <a href="#">Guía de ayuda</a></td>
                        </tr>
                    </table>
                </div>
                <div id="contenido-update"></div>
            
        </div>
        <!--En este div se maneja la información que se postea al dar click en ASIGNACIONES O EVENTOS-->
        <div class="form-control invitacion-colegas" id="panel-tareas">
           
        </div> 

        <div class="form-control invitacion-colegas" id="panel-eventos">
           
        </div> 
        <!--Fin del div asignación o evento-->



        <div class="form-control invitacion-colegas">
            <div id="proximo" style="float:left">Aplicaciones Sugeridas</div>
            <div style="float:right"><a href="#">Más</a></div>
            <div class="posicion-table">
                <table>
                    <tr>
                        <td><img src="img/google drive.PNG"></td>
                        <td><a href="#" class="infor-extra">Aplicación de recursos de Google Drive</a></td>
                    </tr>
                </table>
            </div>
            <table>
                <tr>
                    <td><img src="img/google drive.PNG"></td>
                    <td><a href="#" class="infor-extra">Aplicación de asignaciones de Google Drive</a></td>
                </tr>
            </table>
        </div>

      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/controlador-instructor.js"></script>
      <script src="js/controlador.js"></script>
</body>
</html>