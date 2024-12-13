$(".tablas").on('click', '.btnEditarDiseno', function () {
    var iddiseno = $(this).attr('idDiseno');
    alert(iddiseno);
    $.ajax({
        url: 'Editar-Diseno/' + iddiseno,
        type: 'GET',
        success: function (diseno) {
            console.log("Datos recibidos:", diseno);
            $("#idEditar").val(diseno.id_diseno);
            $("#editarDiseno").val(diseno.nombre_diseno);
        },
        error: function (xhr, status, error) {
            console.error("Error en AJAX:", xhr.status, error);
        }
    });

});
