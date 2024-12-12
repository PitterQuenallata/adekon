@extends('welcome')

@section('ingresar')
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center min-vh-100">
                        <div class="w-100 d-block card shadow-lg rounded my-5 overflow-hidden">
                            <div class="row">
                                <div class="col-lg-5 d-none d-lg-block bg-login rounded-left"></div>
                                <div class="col-lg-7">
                                    <div class="p-5">
                                        <div class="text-center w-75 mx-auto auth-logo mb-4">
                                            <a href="index.html" class="logo-dark">
                                                <span><img src="assets/images/logo-dark.png" alt=""
                                                        height="32"></span>
                                            </a>

                                            <a href="index.html" class="logo-light">
                                                <span><img src="assets/images/logo-light.png" alt=""
                                                        height="32"></span>
                                            </a>
                                        </div>


                                        <h1 class="h5 mb-1">Ingresar al sistema</h1>

                                        <p class="text-muted mb-4">Ingresa tu correo electronico y contraseña para acceder
                                            al administrador</p>

                                        <form action="{{ route('login') }}" method="post">

                                            @csrf

                                            <div class="form-group mb-3">
                                                <label class="form-label" for="emailaddress">Correo electronico</label>
                                                <input class="form-control" type="email" id="emailaddress" required=""
                                                    placeholder="Ingresa tu correo electronico" name="email">
                                            </div>

                                            <div class="form-group mb-3">
                                                <a href="pages-recoverpw.html"
                                                    class="text-muted float-end"><small></small></a>
                                                <label class="form-label" for="password">Contrasña</label>
                                                <input class="form-control" type="password" required="" id="password"
                                                    placeholder="Ingresa tu contraseña" name="password">
                                            </div>

                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <input class="form-check-input" type="checkbox" id="checkbox-signin"
                                                        checked>
                                                    <label class="form-check-label ms-2" for="checkbox-signin">Recordar mi
                                                        cuenta</label>
                                                </div>
                                                @error('email')
                                                <br>
                                                <div class="alert alert-danger">
                                                    Error de Email o Contraseña
                                                </div>

                                                @enderror
                                            </div>

                                            <div class="form-group mb-0 text-center">
                                                <button class="btn btn-primary w-100" type="submit"> Iniciar sesion
                                                </button>
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
                                        <!-- end row -->
                                    </div> <!-- end .padding-5 -->
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div> <!-- end .w-100 -->
                    </div> <!-- end .d-flex -->
                </div> <!-- end col-->
            </div> <!-- end row -->
        </div>
        <!-- end container -->
    </div>
@endsection
