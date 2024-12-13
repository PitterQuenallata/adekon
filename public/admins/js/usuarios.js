$(document).ready(function() {
  // Destruir cualquier instancia previa de DataTable
  if ($.fn.DataTable.isDataTable('#tablaUsuarios')) {
    $('#tablaUsuarios').DataTable().destroy();
  }
  
  // Inicializar DataTable con configuración en español
  $('#tablaUsuarios').DataTable({
    "language": {
      "sProcessing": "Procesando...",
      "sLengthMenu": "Mostrar _MENU_ registros",
      "sZeroRecords": "No se encontraron resultados",
      "sEmptyTable": "Ningún dato disponible en esta tabla",
      "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
      "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
      "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
      "sInfoPostFix": "",
      "sSearch": "Buscar:",
      "sUrl": "",
      "sInfoThousands": ",",
      "sLoadingRecords": "Cargando...",
      "oPaginate": {
        "sFirst": "Primero",
        "sLast": "Último",
        "sNext": "Siguiente",
        "sPrevious": "Anterior"
      },
      "oAria": {
        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
      }
    },
    "columnDefs": [
      {
        "targets": [0, 1, 7, 8, 9], // Índices de las columnas que quieres centrar
        "className": "text-center"
      },
      {
        "targets": [2, 3, 4, 5, 6 ], // Índices de las columnas que quieres alinear a la izquierda
        "className": "text-left"
      }
    ]
  });

});

/*=============================================
asiganacion de usuario y contraseña segun el nombre y apellido
=============================================*/
$(document).ready(function() {
  // Escuchar cambios en los campos de nombre y apellido
  $('#nombre_usuario, #apellido_usuario').on('change', function() {
    // Obtener los valores del nombre y apellido
    var nombre = $('#nombre_usuario').val().toLowerCase();
    var apellido = $('#apellido_usuario').val().toLowerCase();

    // Generar el usuario y contraseña con la primera letra del nombre y el apellido completo
    if (nombre && apellido) {
      var usuario = nombre.charAt(0) + apellido;

      // Asignar valores a los campos de usuario y contraseña
      $('#nuevoUsuario').val(usuario).trigger('input'); // Disparar manualmente el evento `input`
      $('#password_usuario').val(usuario).trigger('input'); // Disparar manualmente el evento `input`
    }
  });
});








/*=============================================
SUBIENDO LA FOTO DEL USUARIO
=============================================*/
$(".editarFotoPerfil").change(function () {
  var imagen = this.files[0];

  if (!imagen) {
    return; // Salir si no hay archivo seleccionado
  }

  /*=============================================
  VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
  =============================================*/
  if (imagen.type != "image/jpeg" && imagen.type != "image/png") {
    $(".editarFotoPerfil").val("");
    fncSweetAlert("error", "¡La imagen debe estar en formato JPG o PNG!");
  } else if (imagen.size > 2000000) {
    $(".editarFotoPerfil").val("");
    fncSweetAlert("error", "¡La imagen no debe pesar más de 2MB!");
  } else {
    var datosImagen = new FileReader();
    datosImagen.readAsDataURL(imagen);

    datosImagen.onload = function (event) {
      var rutaImagen = event.target.result;
      $(".previsualizar").attr("src", rutaImagen);
    };
  }
});

