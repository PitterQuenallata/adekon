$(".tablas").on('click', '.btnEditarModelo', function () {
    var idmodelo = $(this).attr('idModelo');
    $.ajax({
        url: 'Editar-Modelo/' + idmodelo,
        type: 'GET',
        success: function (marca) {
            console.log("Datos recibidos:", marca);
            $("#idEditar").val(marca.id_modelo);
            $("#editarModelo").val(marca.nombre_modelo);
        },
        error: function (xhr, status, error) {
            console.error("Error en AJAX:", xhr.status, error);
        }
    });

});
