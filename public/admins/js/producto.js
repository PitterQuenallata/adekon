// Previsualizar imagen en el modal de agregar
document.getElementById("imagenAgregar").addEventListener("change", function (event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById("previewAgregar").setAttribute("src", e.target.result);
        };
        reader.readAsDataURL(file);
    }
});

$(".tablas").on("click", ".btnEditarProducto", function () {
    var idProducto = $(this).attr("idProducto");
    $.ajax({
        url: "Editar-Producto/" + idProducto,
        type: "GET",
        success: function (producto) {
            console.log("Datos recibidos:", producto);

            // Rellenar el formulario con los datos del producto
            $("#editarIdProducto").val(producto.id_producto);
            $("#editarNombre").val(producto.nombre_producto);
            $("#editarMarca").val(producto.id_marca);
            $("#editarCategoria").val(producto.id_categoria);
            $("#editarModelo").val(producto.id_modelo);
            $("#editarDiseño").val(producto.id_diseño);
            $("#editarDescripcion").val(producto.descripcion_producto);
            $("#editarStock").val(producto.stock_producto);
            $("#editarPrecio").val(producto.precio_producto);
            $("#editarDimensiones").val(producto.dimensiones_producto);
            $("#editarVentas").val(producto.venta_producto);
            $("#editarEstado").val(producto.estado_producto);

            // Mostrar la imagen actual
            if (producto.img_producto) {
                $("#previewEditar").attr("src", producto.img_producto);
            } else {
                $("#previewEditar").attr("src", "ruta/a/imagen/por-defecto.jpg"); // Imagen por defecto si no hay
            }
        },
        error: function (xhr, status, error) {
            console.error("Error en AJAX:", xhr.status, error);
        },
    });
});

// Previsualizar la nueva imagen seleccionada
document.getElementById("editarImagen").addEventListener("change", function (event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById("previewEditar").setAttribute("src", e.target.result);
        };
        reader.readAsDataURL(file);
    }
});
