$(".tablas").on('click', '.btnEditarmarca', function () {
    var idmarca = $(this).attr('idmarca');
    $.ajax({
        url: 'Editar-Marca/' + idmarca,
        type: 'GET',
        success: function (marca) {
            console.log("Datos recibidos:", marca);
            $("#idEditar").val(marca.id_marca);
            $("#editarMarca").val(marca.nombre_marca);
        },
        error: function (xhr, status, error) {
            console.error("Error en AJAX:", xhr.status, error);
        }
    });

});
