@extends('admin.layouts.app')


@section('contenido')
    <div class="px-3">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="py-3 py-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="page-title mb-0">Categorias</h4>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-none d-lg-block">
                            <ol class="breadcrumb m-0 float-end">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Inicio</a></li>
                                <li class="breadcrumb-item active">categorias</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">

                <div class="box">

                    <div class="box-header with-border mb-4">
                        <!-- Botón con margen adicional para separación -->
                        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#Agregarcategoria">
                            Agregar Categoria
                        </button>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Lista de categorias</h4>
                                        <p class="text-muted font-size-13 mb-4">
                                            Esta tabla muestra todas las categorias que ingresaste.
                                        </p>

                                        <!-- Tabla ajustada con scroll horizontal -->
                                        <div class="table-responsive">
                                            <table id="tablas scroll-horizontal-datatable"
                                                class="tablas table w-100 nowrap dt-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nombre</th>
                                                        <th>Acciones</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($categorias as $categoria)
                                                        <tr>
                                                            <td>{{$categoria->id_categoria}}</td>
                                                            <td>{{$categoria->nombre_categoria }}</td>
                                                            <td>
                                                                <button type="button"
                                                                    class="btn btn-warning waves-effect waves-light btnEditarCategoria"
                                                                    data-bs-toggle="modal" data-bs-target="#Editarcategoria"
                                                                    idCategoria="{{ $categoria->id_categoria}}">
                                                                    <i class="mdi mdi-pencil"></i>
                                                                </button>
                                                                <button type="button"
                                                                    class="btn btn-danger waves-effect waves-light"><i
                                                                        class="mdi mdi-close"></i></button>
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

    <div id="Agregarcategoria" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Agregar Nueva Categoria</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    @csrf
                    <div class="modal-body p-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="field-1" class="form-label">Nombre Categoria</label>
                                    <input type="text" class="form-control" id="field-1"
                                        placeholder="Ingrese nombre de categoria" name="nuevoCategoria">
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
    <div id="Editarcategoria" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Editar categoria</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('Actualizar-Categoria') }}" method="post">
                    @csrf
                    @method('put')

                    <div class="modal-body p-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="field-1" class="form-label">Nombre categoria</label>
                                    <input type="text" class="form-control" id="editarCategoria" name="editarCategoria"
                                        required>
                                    <input type="text" class="form-control" id="idEditar" name="id_categoria" hidden>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect"
                            data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Guardar Cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
