@extends('admin.layouts.app')


@section('ingresar')

<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-9">
            <div class="card shadow-lg rounded overflow-hidden">
                <div class="row ">
                    <!-- Imagen del lado izquierdo -->
                    <div class="col-lg-5 d-none d-lg-block bg-light">
                        <div style="width: 100%; height: 100%; overflow: hidden; position: relative;">
                            <img src="{{ url('admins/assets/images/portadaLogin.jpg')}}" alt="Portada" style="width: 100%; height: auto; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                        </div>
                    </div>
                    <!-- Contenido del lado derecho -->
                    <div class="col-lg-7">
                        <div class="p-5">
                            <!-- Logo -->
                            <div class="text-center w-75 mx-auto auth-logo mb-4">
                                <a href="dashboard" class="logo-dark">
                                    <span><img src="{{ url('dekonLogo.png')}}" alt="Logo Oscuro" height="70"></span>
                                </a>
                                <a href="dashboard" class="logo-light">
                                    <span><img src="{{ url('dekonLogo.png')}}" alt="Logo Claro" height="70"></span>
                                </a>
                            </div>
                            <!-- Bienvenida -->
                            <h1 class="h3 mb-1 text-center">¡Bienvenido!</h1>
                            <p class="text-muted mb-4 text-center">Inicio de Sesión</p>
                            <!-- Formulario -->
                            <form action="{{ route('login') }}" method="POST">
                                @csrf

                                <div class="form-group mb-3">
                                    <label class="form-label" for="ingUsuario">Usuario</label>
                                    <input class="form-control" type="text" id="username" name="username" required autocomplete="username" placeholder="Ingrese usuario">
                                </div>


                                <div class="form-group mb-3">
                                    <label class="form-label" for="ingPassword">Contraseña</label>
                                    <input class="form-control" type="password" id="passoword" name="password" required placeholder="Ingrese contraseña">
                                </div>
                                <div class="form-group mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkbox-signin" checked>
                                        <label class="form-check-label" for="checkbox-signin">Recordar</label>
                                    </div>
                                </div>

                                @error('username')
                                <br>
                                <div class="alert alert-danger" role="alert">
                                    Error al ingresar usuario
                                </div>
                                @enderror
                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-primary w-100" type="submit">Ingresar</button>
                                </div>

                            </form>
                            <div class="row mt-4">
                                <div class="col-12 text-center">
                                    <p class="text-muted mb-2">
                                        <a class="text-muted font-weight-medium ms-1"
                                            href='pages-recoverpw.html'>Te olvidaste de contraseña?</a>
                                    </p>

                                </div> <!-- end col -->
                            </div>
                        </div>
                    </div> <!-- End col-lg-7 -->
                </div> <!-- End row -->
            </div> <!-- End card -->
        </div> <!-- End col-12 -->
    </div> <!-- End row -->
</div> <!-- End container -->



@endsection