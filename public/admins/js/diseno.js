$(".tablas").on('click', '.btnEditarDiseno', function () {
    var iddiseno = $(this).attr('idDiseno');
    alert(iddiseno);
    $.ajax({
        url: 'Editar-Diseno/' + iddiseno,
        type: 'GET',
        success: function (diseno) {
            console.log("Datos recibidos:", diseno);
            $("#idEditar").val(diseno.id_diseño);
            $("#editarDiseno").val(diseno.nombre_diseño);
        },
        error: function (xhr, status, error) {
            console.error("Error en AJAX:", xhr.status, error);
        }
    });

});
