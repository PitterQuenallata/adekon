$(".tablas").on('click', '.btnEditarCategoria', function () {
    var idCategoria = $(this).attr('idCategoria');
    console.log("ID de categoría recibido:", idCategoria); // Confirmar el ID

    $.ajax({
        url: 'Editar-Categoria/' + idCategoria,
        type: 'GET',
        success: function (categoria) {
            console.log("Datos recibidos:", categoria);
            $("#idEditar").val(categoria.id_categoria);
            $("#editarCategoria").val(categoria.nombre_categoria);
        },
        error: function (xhr, status, error) {
            console.error("Error en AJAX:", xhr.status, error);
        }
    });

});
