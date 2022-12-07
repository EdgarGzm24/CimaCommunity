$(document).ready(function(){
    var facultades = $('#facultades');

    //Ejecutar accion al cambiar de opcion en el select de las bandas
    $('#campus').change(function(){
      var campus_id = $(this).val(); //obtener el id seleccionado

      if(campus_id !== ''){ //verificar haber seleccionado una opcion valida

        /*Inicio de llamada ajax*/
        $.ajax({
          data: {campus_id:campus_id}, //variables o parametros a enviar, formato => nombre_de_variable:contenido
          dataType: 'html', //tipo de datos que esperamos de regreso
          type: 'POST', //mandar variables como post o get
          url: 'funciones/get_facultad.php' //url que recibe las variables
        }).done(function(data){ //metodo que se ejecuta cuando ajax ha completado su ejecucion             

          facultades.html(data); //establecemos el contenido html de discos con la informacion que regresa ajax             
          facultades.prop('disabled', false); //habilitar el select
        });
        /*fin de llamada ajax*/

      }else{ //en caso de seleccionar una opcion no valida
        facultades.val(''); //seleccionar la opcion "- Seleccione -", osea como reiniciar la opcion del select
        facultades.prop('disabled', true); //deshabilitar el select
      }    
    });
  });

  $(document).ready(function(){
    var carreras = $('#carreras');

    //Ejecutar accion al cambiar de opcion en el select de las bandas
    $('#facultades').change(function(){
      var facultad_id = $(this).val(); //obtener el id seleccionado

      if(facultad_id !== ''){ //verificar haber seleccionado una opcion valida

        /*Inicio de llamada ajax*/
        $.ajax({
          data: {facultad_id:facultad_id}, //variables o parametros a enviar, formato => nombre_de_variable:contenido
          dataType: 'html', //tipo de datos que esperamos de regreso
          type: 'POST', //mandar variables como post o get
          url: 'funciones/get_carrera.php' //url que recibe las variables
        }).done(function(data){ //metodo que se ejecuta cuando ajax ha completado su ejecucion             

          carreras.html(data); //establecemos el contenido html de discos con la informacion que regresa ajax             
          carreras.prop('disabled', false); //habilitar el select
        });
        /*fin de llamada ajax*/

      }else{ //en caso de seleccionar una opcion no valida
        carreras.val(''); //seleccionar la opcion "- Seleccione -", osea como reiniciar la opcion del select
        carreras.prop('disabled', true); //deshabilitar el select
      }    
    });
  });

$('#formRegistro').submit(function(e){
    e.preventDefault();
     let datos = new FormData(this);
     
     $.ajax({
         type: 'POST' ,
         url: 'funciones/validRegistro.php',
         data: datos, 
         contentType: false,
         processData: false,
         success: function(){
          Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Felicidades! Te haz registrado con exito!',
            showConfirmButton: false,
            timer: 1500
          })
          $('#formRegistro')[0].reset();
          $('#imgVista').attr('src', "https://via.placeholder.com/150");
        }
     })
 });

 $('#formPublicacion').submit(function(e){
  e.preventDefault();
   let datos = new FormData(this);
   
   $.ajax({
       type: 'POST' ,
       url: 'funciones/validPublicacion.php',
       data: datos, 
       contentType: false,
       processData: false,
       success: function(){
        $('#formPublicacion')[0].reset();
        $('#imgPrevia').html("");
      }
   })
});

$(document).ready(function () {
  // Send Search Text to the server
  $("#buscarComunidad").keyup(function () {
      let searchText = $(this).val();
      if (searchText != "") {
      $.ajax({
          url: "funciones/action.php",
          method: "post",
          data: {
          query: searchText,
          },
          success: function (response) {
          $("#show-list").html(response);
          },
      });
      } else {
      $("#show-list").html("");
      }
  });
  // Set searched text in input field on click of search button
  $(document).on("click", "a", function () {
      $("#buscarComunidad").val($(this).text());
      $("#show-list").html("");
  });
  });