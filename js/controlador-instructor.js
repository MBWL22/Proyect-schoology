/*function cambio(){
    document.getElementById("titulo-curso").innerHTML="Diana";
    console.log("Diana");
    
}*/
$(document).ready(function(){
    cargarCursos();
    cargarGrupos();
    cargarUpdate();
    cargarTarea();
    cargarEvento(); 
    
    
});

//Función para aparecer el contenido del menú de cursos instructores para dispositivos móviles
$(document).ready(visualizar);
    var contador = 1;
    function visualizar(){
    if(contador == 1){
        $("#navbar-contenedor").animate({
            left: '0'
        });
        contador = 0;
    }else{
        contador = 1;
        $("#navbar-contenedor").animate({
            left: '-100%'});
        }
    }

function mostrar(){
    if(document.getElementById('pantalla-ningun-curso').style.display == 'none'){
        document.getElementById('pantalla-ningun-curso').style.display= 'block';
    }
    else{
        document.getElementById('pantalla-ningun-curso').style.display= 'none';
    }
    
}


function mostrarGrupo(){
    if(document.getElementById('pantalla-ningun-grupo').style.display == 'none'){
        document.getElementById('pantalla-ningun-grupo').style.display = 'block';
    }
    else{
        document.getElementById('pantalla-ningun-grupo').style.display = 'none';
    }
}

$(document).ready(function(){ 
    $('#click-course').on('click',function(){
       $('#pantalla-ningun-curso').toggle('slow');
    });
 });

 $(document).ready(function(){ 
    $('#click-group').on('click',function(){
       $('#pantalla-ningun-grupo').toggle('slow');
    });
 });

 /* Función para agregar comentarios de forma dinámica */
function añadirComentario(){
    $("#div-comentarios").append("<div><input type = 'text' class = 'estilos-comentarios'></div<div id = 'estilos-post'><input type='button' value='Post' class = 'btn btn-link'></div>");
}

/* Función para mostrar la pantalla para actualizar */
$(document).ready(function(){ 
    $('#click-actualizar').on('click',function(){
       $('#formulario-actualizar').toggle('slow');
    });
 });

/* Función para mostrar la pantalla para  crear asignaciones */
$(document).ready(function(){ 
    $('#click-asignar').on('click',function(){
       $('#formulario-asignar').toggle('slow');
    });
 });
/* Función para mostrar la pantalla para  crear eventos */
$(document).ready(function(){ 
    $('#click-evento').on('click',function(){
       $('#formulario-evento').toggle('slow');
    });
 });


 /* Métodos que permiten visualizar los grupos o los cursos cuando ya existe al menos uno. */
/*
 $(document).ready(function(){ 
    $('#click-group').on('click',function(){
       $('#contenedor-grupo').toggle('slow');
    });
 });

 $(document).ready(function(){ 
    $('#click-course').on('click',function(){
       $('#contenedor-cur').toggle('slow');
    });
 });*/
//----------------------------------------------------PETICIONES PARA CURSOS------------------------------------------------------------------
 $("#btn-empty-crear-curso").click(function(){
        var parametros= 
        "accessCodeCourse="+$("#access-code").val()+"&"+
        "levelCuorse="+$("#level-curso").val()+"&"+
        "nameCourse="+$("#name-curso").val()+"&"+
        "sectionCourse="+$("#section-name-curso").val()+"&"+
        "areaCourse="+$("#select-area-curso").val();

         console.log(parametros);
           $.ajax({
             url:"ajax/guardar-cursos.php",
             method:"POST",
             data:parametros,
             dataType:"json",
             success:function(respuesta){
                 if (respuesta.codigo==0){
                     console.log(respuesta.mensaje);
                     $("#div-code-error").html('<div class="error-div"><i class="fas fa-exclamation-circle" style="color: #E3556A; font-size: 25px">'+
                     '</i><span style="font-size: 15px;">Error: Ya existe un curso con este codigo de acceso</span></div>');
                     $("#access-code").removeClass("is-valid");
                     $("#access-code").addClass("is-invalid");
                 }else{
                    console.log(respuesta.mensaje); 
                    cargarCursos();

                 }
               } ,
             error:function(error){
                 console.log(error);
                }
            });         
    });
    
function cargarCursos(){
    $.ajax({
        url:"ajax/cargar-cursos.php",
        dataType:"json",
        success: function(respuesta){
             if(respuesta.codigo==0){
                 console.log(respuesta.mensaje);
                $("#contenido-central").html(
                   ` <label id="lbl-contenido">You are not currently enrolled in any courses</label><br>
                       <div id="imagen"><img src="img/cometa-curso.PNG"></div>
                      <div id="cont-boton"><button class="btn btn-primary" data-toggle="modal" data-target="#crear-curso" >Create a Courses</button>
                      </div> `
                );
               
             }else{ 
                console.log(respuesta);
                $("#contenido-central").addClass("container");
                $("#contenido-central").html( `<div class="row" id="area-cursos"></div> <div id="cont-boton"><button class="btn btn-primary" data-toggle="modal" data-target="#crear-curso" >Create a Courses</button>
                </div>`);
                for (var i=0;i<respuesta.length;i++){
                    $("#area-cursos").append(
                        `
                        <div id="imagen-curso" class="col-12 col-sm-6 col-md-3 col-lg-2 col-xl-2">
                                <div id="profile-curso"><img src="img/edit-profile/group-default.svg"></div>
                                <div id="nombre-curso" >${respuesta[i].nameCourse}</div>
                        </div>`
                    );
                    $("#selec-cursos-ins").append(
                        ` <option>${respuesta[i].nameCourse}</option>`

                    ); 
                    $("#selec-cursos-asig").append(
                        ` <option>${respuesta[i].nameCourse}</option>`

                    );  
                    $("#selec-cursos-even").append(
                        ` <option>${respuesta[i].nameCourse}</option>`

                    );  
                    $("#selec-ingresar-curso").append(
                        ` <option>${respuesta[i].nameCourse}</option>`

                    );  
                }
            }      
        },
        error:function(error){
            console.log(error);
        }
     });
}
//----------------------------------------------------PETICIONES PARA GRUPOS------------------------------------------------------------------
$("#btn-create-grupo").click(function(){
    var parametros= 
    "accessCodeGrupo="+$("#access-code-grupo").val()+"&"+
    "nameGrupo="+$("#name-grupo").val()+"&"+
    "descripGrupo="+$("#description-grupo").val()+"&"+
    "accessGrupo="+$("#sl-acces-grupo").val()+"&"+
    "privacyGrupo="+$("#sl-privacy-grupo").val();

     console.log(parametros);
       $.ajax({
         url:"ajax/guardar-grupos.php",
         method:"POST",
         data:parametros,
         dataType:"json",
         success:function(respuesta){
             if (respuesta.codigo==0){
                 console.log(respuesta.mensaje);
                 $("#div-code-error-grupo").html('<div class="error-div"><i class="fas fa-exclamation-circle" style="color: #E3556A; font-size: 25px">'+
                 '</i><span style="font-size: 15px;">Error: Ya existe un grupo con este codigo de acceso</span></div>');
                 $("#access-code-grupo").removeClass("is-valid");
                 $("#access-code-grupo").addClass("is-invalid");
             }else{
                console.log(respuesta.mensaje); 
                cargarGrupos();
             }
           } ,
         error:function(error){
             console.log(error);
            }
        });         
});

function cargarGrupos(){
$.ajax({
    url:"ajax/cargar-grupos.php",
    dataType:"json",
    success: function(respuesta){
         if(respuesta.codigo==0){
             console.log(respuesta.mensaje);
            $("#contenido-central-grupo").html(
               `<label id="lbl-contenido">You are not currently enrolled in any groups</label><br>
               <div id="imagen"><img src="img/cometa-curso.PNG"></div>
               <div id="cont-boton"><button class="btn btn-primary" data-toggle="modal" data-target="#crear-groups">Create a Groups</button>
               </div> `
            );

         }else{ 
            console.log(respuesta);
            $("#contenido-central-grupo").addClass("container");
            $("#contenido-central-grupo").html( `<div class="row" id="area-grupos"></div> <div id="cont-boton"><button class="btn btn-primary" data-toggle="modal" data-target="#crear-groups">Create a Groups</button>
            </div>`);
            for (var i=0;i<respuesta.length;i++){
                $("#area-grupos").append(
                    `<div id="imagen-grupo" class="col-12 col-sm-6 col-md-3 col-lg-2 col-xl-2">
                    <div id="profile-grupo"><img src="img/edit-profile/group-default.svg"></div>
                    <div id="nombre-grupo">${respuesta[i].nameGrupo}</div>
                  </div>`
                );
                $("#selec-grupos-ins").append(
                    `  <option>${respuesta[i].nameGrupo}</option>`
                ); 
                $("#selec-grupos-even").append(
                    `  <option>${respuesta[i].nameGrupo}</option>`
                ); 
            }
        }      
    },
    error:function(error){
        console.log(error);
    }
 });
}


//------------------------------FUNCIONES Y PETICIONES PARA UPDATES---------------------------------------------------

function cargarUpdate(){
    $("#contenido-update").html("");
    $.ajax({
        url:"ajax/cargar-update.php",
        dataType:"json",
        success: function(respuesta){
             if(respuesta.codigo==0){
                 console.log(respuesta.mensaje);
             }else{ 
                console.log(respuesta);
                for (var i=0;i<respuesta.length;i++){ 
                    $("#contenido-update").append(
                        ` <div id="publicaciones-instructor">
                        <table>
                                <tr>
                                    <td rowspan="2"><img src="img/edit-profile/picture1.png"></td>
                                    <td><div id="encabezado-publicacion"> ${respuesta[i].tipoUsuario}: ${respuesta[i].nombre+" "+respuesta[i].apellido}--${respuesta[i].nameCourse}</div></td>
                                </tr>
                                <tr>
                                    <td id="contenido-publicacion">${respuesta[i].postUpdate}</td>
                                </tr>
                            </table>       
                            </div>`
                    ); 
                }
            }
        },
        error:function(error){
            console.log(error);
        }
     });

}

$("#btn-crear-update").click(function(){
    var parametros= 
    "cursoUpdate="+$("#selec-cursos-ins").val()+"&"+
    "grupoUpdate="+$("#selec-grupos-ins").val()+"&"+
    "postUpdate="+$("#txt-area-actualizar").val();

     console.log(parametros);
       $.ajax({
         url:"ajax/guardar-update.php",
         method:"POST",
         data:parametros,
         dataType:"json",
         success:function(respuesta){
             if (respuesta.codigo==0){
                 console.log(respuesta.mensaje);
                 $("#error-seleccionar").html('<div class="error-div"><i class="fas fa-exclamation-circle" style="color: #E3556A; font-size: 25px">'+
                 '</i><span style="font-size: 15px;">Error: Selecciona un Grupo o Curso </span></div>');
             }else{
                console.log(respuesta);
                cargarUpdate(); 
             }
           } ,
         error:function(error){
             console.log(error);
            }
        });         
});


//------------------------------FUNCIONES Y PETICIONES PARA ASIGNACIONES---------------------------------------------------
function cargarTarea(){
    $("#contenido-noticias").html("");
    $.ajax({
        url:"ajax/cargar-tareas.php",
        dataType:"json",
        success: function(respuesta){
             if(respuesta.codigo==0){
                 console.log(respuesta.mensaje);
                 $("#panel-tareas").html(`
                 <a id="anchor-colegas" href="#"><i class="fas fa-users icon-custom"></i>Invita a tus colegas que te acompañen a Schoology</a><br>
                 <div id="proximo" style="float:left">Proximo de Asignaciones</div>
                 <div style="float:right"><a href="#">calendar</a></div>
                 <div class="infor-extra">No hay asignaciones próximos</div>`);

                 $("#panel-tareas-curso").html(`
                 <a id="anchor-colegas" href="#"><i class="fas fa-users icon-custom"></i>Invita a tus colegas que te acompañen a Schoology</a><br>
                 <div id="proximo" style="float:left">Proximo de Eventos</div>
                 <div style="float:right"><button class="btn btn-link" data-toggle="modal" data-target="#crear-eventos-en-curso">añadir evento</button></div>
                 <div class="infor-extra">No hay asignaciones próximos</div>`);

             }else{ 
                console.log(respuesta);
                $("#panel-tareas").html(`
                <div id="proximo" style="float:left">Proximo de Asignaciones</div>
                <div style="float:right"><a href="#">calendar</a></div>
                <div id="contenido-noticias"></div>
                </div>`);

                $("#panel-tareas-curso").html(`
                 <div id="proximo" style="float:left">Proximo de Asignaciones</div><br>
                  <div style="float:right"><button class="btn btn-link" data-toggle="modal" data-target="#crear-eventos-en-curso">añadir evento</button></div>
                  <div id="contenido-noticias"></div>
                  </div>`);
                for (var i=0;i<respuesta.length;i++){ 
                    $("#contenido-noticias").append(
                        ` <div id="cont-interno-asignaciones">
                        <div id="contenedor-anclaje-asignaciones"><a href="#"><i class="fas fa-file-signature icon-custom-2"></i>${respuesta[i].nombreTarea}</a></div>
                       <div>${respuesta[i].nameCourse}</div> <!--Dato que se tomará del formulario de creación de eventos-->
                       <div>${respuesta[i].fechaTarea}</div> <!--Dato que se tomará del formulario de creación de eventos-->
                        </div> `
                    ); 
                    $("#curso-asignaciones").append(
                        ` <div>
                        <div class="estilo-asignacion"><i class="fas fa-file-signature icono-asignacion"></i>${respuesta[i].nombreTarea}</div>
                            <div class="cont-asignaciones">${respuesta[i].descripTarea}</div>     
                            <div style="margin-top: 10px" class="footer-asignaciones">${respuesta[i].fechaTarea}</div> <!--Dato que se tomará del formulario de creación de eventos-->
                    </div><br><br>`
                    ); 
                }
            }
        },
        error:function(error){
            console.log(error);
        }
     });

}

$("#btn-crear-asignacion").click(function(){
    var parametros= 
    "cursoTarea="+$("#selec-cursos-asig").val()+"&"+
    "fechaTarea="+$("#fecha-asig").val()+"&"+
    "descripTarea="+$("#area-asignacion").val()+"&"+
    "puntosTarea="+$("#txt-puntos").val()+"&"+
    "nombreTarea="+$("#txt-nombre-asignacion").val();

     console.log(parametros);
       $.ajax({
         url:"ajax/guardar-tarea.php",
         method:"POST",
         data:parametros,
         dataType:"json",
         success:function(respuesta){
             if (respuesta.codigo==0){
                 console.log(respuesta.mensaje);
                 $("#error-seleccionar").html('<div class="error-div"><i class="fas fa-exclamation-circle" style="color: #E3556A; font-size: 25px">'+
                 '</i><span style="font-size: 15px;">Error: Selecciona Curso para asignar tarea</span></div>');
             }else{
                console.log(respuesta);
                cargarTarea(); 
             }
           } ,
         error:function(error){
             console.log(error);
            }
        });         
});

//------------------------------FUNCIONES Y PETICIONES PARA EVENTOS---------------------------------------------------
function cargarEvento(){
    $("#contenido-eventos").html("");
    $.ajax({
        url:"ajax/cargar-eventos.php",
        dataType:"json",
        success: function(respuesta){
             if(respuesta.codigo==0){
                 console.log(respuesta.mensaje);
                 $("#panel-eventos").html(`
                 <a id="anchor-colegas" href="#"><i class="fas fa-users icon-custom"></i>Invita a tus colegas que te acompañen a Schoology</a><br>
                 <div id="proximo" style="float:left">Proximo de Eventos</div>
                 <div style="float:right"><a href="#">calendar</a></div>
                 <div class="infor-extra">No hay eventos próximos</div>`);

                 $("#panel-eventos-curso").html(`
                 <a id="anchor-colegas" href="#"><i class="fas fa-users icon-custom"></i>Invita a tus colegas que te acompañen a Schoology</a><br>
                 <div id="proximo" style="float:left">Proximo de Eventos</div>
                 <div style="float:right"><button class="btn btn-link" data-toggle="modal" data-target="#crear-eventos-en-curso">añadir evento</button></div>
                 <div class="infor-extra">No hay eventos próximos</div>`);


             }else{ 
                console.log(respuesta);
                $("#panel-eventos").html(`
                <div id="proximo" style="float:left">Proximo de Eventos </div><br>
                <div style="float:right"><a href="#">calendar</a></div>
            
                <div id="contenido-eventos"></div>
                </div>`);

                $("#panel-eventos-curso").html(`
                  <div id="proximo" style="float:left">Proximo de Eventos</div><br>
                  <div style="float:right"><button class="btn btn-link" data-toggle="modal" data-target="#crear-eventos-en-curso">añadir evento</button></div>
                  <div id="contenido-eventos"></div>
                   </div>`);
                for (var i=0;i<respuesta.length;i++){ 
                    $("#contenido-eventos").append(
                        `  <div id="contenedor-interno-eventos"> 
                        <div><a href="#"><i class="fas fa-calendar-alt icon-custom-2"></i>${respuesta[i].nombreEvento}</a></div>
                        <div>${respuesta[i].fechaEvento}</div>
                    </div> `
                    ); 
            
                }
            }
        },
        error:function(error){
            console.log(error);
        }
     });

}

$("#btn-crear-even").click(function(){
    var parametros= 
    "cursoEvento="+$("#selec-cursos-even").val()+"&"+
    "fechaEvento="+$("#fecha-evento").val()+"&"+
    "grupoEvento="+$("#selec-grupos-even").val()+"&"+
    "descripEvento="+$("#area-crear-evento").val()+"&"+
    "tituloEvento="+$("#txt-titulo-evento").val()+"&"+
    "nombreEvento="+$("#txt-nombre-evento").val();
     console.log(parametros);

       $.ajax({
         url:"ajax/guardar-evento.php",
         method:"POST",
         data:parametros,
         dataType:"json",
         success:function(respuesta){
             if (respuesta.codigo==0){
                 console.log(respuesta.mensaje);
                 $("#error-seleccionar").html('<div class="error-div"><i class="fas fa-exclamation-circle" style="color: #E3556A; font-size: 25px">'+
                 '</i><span style="font-size: 15px;">Error: Selecciona un Curso o Grupo para asignar evento</span></div>');
             }else{
                console.log(respuesta);
                cargarEvento(); 
             }
           } ,
         error:function(error){
             console.log(error);
            }
        });         
});
