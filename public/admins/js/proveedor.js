
$(".tablas").on('click', '.btnEditarProveedor', function () {
    var idProveedor = $(this).attr('idProveedor');

    $.ajax({
        url: 'Editar-Proveedor/' + idProveedor,
        type: 'GET',
        success: function (proveedor) {
            console.log(proveedor);
            $("#idEditar").val(proveedor.id)

            $("#editarProveedor").val(proveedor.nombre_proveedor)
            $("#editarNit").val(proveedor.nit_ci_proveedor)
            $("#editarTelefono").val(proveedor.telefono_proveedor)
            $("#editarDireccion").val(proveedor.direccion_proveedor)
            $("#editarEmail").val(proveedor.email_proveedor)

        }
    })
})
