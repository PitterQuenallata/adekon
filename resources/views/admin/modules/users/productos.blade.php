@extends('welcome')

@section('contenido')
    <div class="px-3">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="py-3 py-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="page-title mb-0">Productos</h4>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-none d-lg-block">
                            <ol class="breadcrumb m-0 float-end">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Inicio</a></li>
                                <li class="breadcrumb-item active">Productos</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">

                <div class="box">

                    <div class="box-header with-border mb-4">
                        <!-- Botón con margen adicional para separación -->
                        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#AgregarProducto">
                            Agregar Producto
                        </button>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Lista de Productos</h4>
                                        <p class="text-muted font-size-13 mb-4">
                                            Esta tabla muestra todas los Productos que ingresaste.
                                        </p>

                                        <!-- Tabla ajustada con scroll horizontal -->
                                        <div class="table-responsive">
                                            <table id="tablas scroll-horizontal-datatable"
                                                class="tablas table w-100 nowrap dt-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nombre</th>
                                                        <th>Marca</th>
                                                        <th>Categoría</th>
                                                        <th>Modelo</th>
                                                        <th>Diseño</th>
                                                        <th>Descripción</th>
                                                        <th>Imagen</th>
                                                        <th>Stock</th>
                                                        <th>Precio</th>
                                                        <th>Dimensiones</th>
                                                        <th>Ventas</th>
                                                        <th>Estado</th>
                                                        <th>Acciones</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($productos as $producto)
                                                        <tr>
                                                            <td>{{ $producto->id_producto }}</td>
                                                            <td>{{ $producto->nombre_producto }}</td>
                                                            <td>{{ $producto->marca }}</td>
                                                            <td>{{ $producto->categoria }}</td>
                                                            <td>{{ $producto->modelo }}</td>
                                                            <td>{{ $producto->diseño }}</td>
                                                            <td>{{ $producto->descripcion_producto }}</td>
                                                            <td>
                                                                <img src="{{ $producto->img_producto }}" alt="Imagen"
                                                                    style="width: 50px; height: 50px;">
                                                            </td>
                                                            <td>
                                                                @if ($producto->stock_producto < 25)
                                                                    <span class="badge bg-danger rounded-pill">
                                                                        {{ $producto->stock_producto }}
                                                                    </span>
                                                                @elseif ($producto->stock_producto >= 25 && $producto->stock_producto <= 50)
                                                                    <span class="badge bg-warning rounded-pill">
                                                                        {{ $producto->stock_producto }}
                                                                    </span>
                                                                @else
                                                                    <span class="badge bg-success rounded-pill">
                                                                        {{ $producto->stock_producto }}
                                                                    </span>
                                                                @endif
                                                            </td>
                                                            <td>{{ $producto->precio_producto }}</td>
                                                            <td>{{ $producto->dimensiones_producto }}</td>
                                                            <td>{{ $producto->venta_producto }}</td>
                                                            <td>
                                                                @if ($producto->estado_producto == 1)
                                                                    <span class="badge bg-success">Activo</span>
                                                                @else
                                                                    <span class="badge bg-danger">Inactivo</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <button type="button"
                                                                    class="btn btn-warning waves-effect waves-light btnEditarProducto"
                                                                    data-bs-toggle="modal" data-bs-target="#EditarProducto"
                                                                    idProducto="{{ $producto->id_producto }}">
                                                                    <i class="mdi mdi-pencil"></i>
                                                                </button>
                                                                <button type="button"
                                                                    class="btn btn-danger waves-effect waves-light"><i
                                                                        class="mdi mdi-close"></i></button>
                                                            </td>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>


                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </section>

        </div>

    </div>
    <!-- sample modal content -->
    <div id="AgregarProducto" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Agregar Nuevo Producto</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body p-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Nombre Producto</label>
                                    <input type="text" class="form-control" placeholder="Ingrese nombre de Producto"
                                        name="nombre_producto">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Marca</label>
                                    <select class="form-control" name="id_marca">
                                        <option value="">Seleccione una marca</option>
                                        @foreach ($marcas as $marca)
                                            <option value="{{ $marca->id_marca }}">{{ $marca->nombre_marca }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Categoría</label>
                                    <select class="form-control" name="id_categoria">
                                        <option value="">Seleccione una categoría</option>
                                        @foreach ($categorias as $categoria)
                                            <option value="{{ $categoria->id_categoria }}">
                                                {{ $categoria->nombre_categoria }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Modelo</label>
                                    <select class="form-control" name="id_modelo">
                                        <option value="">Seleccione un modelo</option>
                                        @foreach ($modelos as $modelo)
                                            <option value="{{ $modelo->id_modelo }}">{{ $modelo->nombre_modelo }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Diseño</label>
                                    <select class="form-control" name="id_diseño">
                                        <option value="">Seleccione un diseño</option>
                                        @foreach ($diseños as $diseño)
                                            <option value="{{ $diseño->id_diseño }}">{{ $diseño->nombre_diseño }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Descripción</label>
                                    <textarea class="form-control" placeholder="Descripción del producto" name="descripcion_producto"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Stock</label>
                                    <input type="number" class="form-control" placeholder="Cantidad en stock"
                                        name="stock_producto">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Precio</label>
                                    <input type="text" class="form-control" placeholder="Precio del producto"
                                        name="precio_producto">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Dimensiones</label>
                                    <textarea class="form-control" placeholder="Dimensiones del producto" name="dimensiones_producto"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Ventas</label>
                                    <input type="number" class="form-control" placeholder="Cantidad vendida"
                                        name="venta_producto">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Estado</label>
                                    <select class="form-control" name="estado_producto">
                                        <option value="1">Activo</option>
                                        <option value="0">Inactivo</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Imagen</label>
                                    <input type="file" class="form-control" name="img_producto" id="imagenAgregar">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Previsualización de Imagen</label>
                                    <div class="d-flex justify-content-center">
                                        <img id="previewAgregar" src="" class="img-fluid rounded"
                                            style="max-width: 50%; height: auto;">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect"
                            data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="EditarProducto" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"
        style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Editar Producto</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('Actualizar-Producto') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="modal-body p-4">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="hidden" id="editarIdProducto" name="id_producto">
                                <div class="mb-3">
                                    <label class="form-label">Nombre Producto</label>
                                    <input type="text" class="form-control" placeholder="Ingrese nombre de Producto"
                                        id="editarNombre" name="nombre_producto">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Marca</label>
                                    <select class="form-control" id="editarMarca" name="id_marca">
                                        <option value="">Seleccione una marca</option>
                                        @foreach ($marcas as $marca)
                                            <option value="{{ $marca->id_marca }}">{{ $marca->nombre_marca }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Categoría</label>
                                    <select class="form-control" id="editarCategoria" name="id_categoria">
                                        <option value="">Seleccione una categoría</option>
                                        @foreach ($categorias as $categoria)
                                            <option value="{{ $categoria->id_categoria }}">
                                                {{ $categoria->nombre_categoria }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Modelo</label>
                                    <select class="form-control" id="editarModelo" name="id_modelo">
                                        <option value="">Seleccione un modelo</option>
                                        @foreach ($modelos as $modelo)
                                            <option value="{{ $modelo->id_modelo }}">{{ $modelo->nombre_modelo }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Diseño</label>
                                    <select class="form-control" id="editarDiseño" name="id_diseño">
                                        <option value="">Seleccione un diseño</option>
                                        @foreach ($diseños as $diseño)
                                            <option value="{{ $diseño->id_diseño }}">{{ $diseño->nombre_diseño }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Descripción</label>
                                    <textarea class="form-control" placeholder="Descripción del producto" id="editarDescripcion"
                                        name="descripcion_producto"></textarea>
                                </div>


                                <div class="mb-3">
                                    <label class="form-label">Stock</label>
                                    <input type="number" class="form-control" placeholder="Cantidad en stock"
                                        id="editarStock" name="stock_producto">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Precio</label>
                                    <input type="text" class="form-control" placeholder="Precio del producto"
                                        id="editarPrecio" name="precio_producto">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Dimensiones</label>
                                    <textarea class="form-control" placeholder="Dimensiones del producto" id="editarDimensiones"
                                        name="dimensiones_producto"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Ventas</label>
                                    <input type="number" class="form-control" placeholder="Cantidad vendida"
                                        id="editarVentas" name="venta_producto">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Estado</label>
                                    <select class="form-control" id="editarEstado" name="estado_producto">
                                        <option value="1">Activo</option>
                                        <option value="0">Inactivo</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Imagen Actual</label>
                                    <div class="d-flex justify-content-center">
                                        <img id="previewEditar" src="" alt="Previsualización"
                                            class="img-fluid rounded" style="max-width: 50%; height: auto;">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Cambiar Imagen</label>
                                    <input type="file" class="form-control" id="editarImagen" name="img_producto">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect"
                            data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
