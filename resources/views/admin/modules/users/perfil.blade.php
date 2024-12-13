@extends('admin.layouts.app')
@section('contenido')
<div class="px-3">
  <div class="container-fluid">
    <div class="py-3 py-lg-4">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h4 class="page-title mb-0">Editar Perfil</h4>
          <p class="text-muted">Actualice sus datos personales y de acceso.</p>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <form method="POST" enctype="multipart/form-data" class="needs-validation">
          @csrf
          @if($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Información del Usuario</h5>
              <div class="row g-3">
                <div class="col-md-4">
                  <div class="mb-3">
                    <label for="editarNombrePerfil" class="form-label">Nombres</label>
                    <input type="text" class="form-control" id="editarNombrePerfil" name="editarNombrePerfil"
                      value="{{ auth()->user()->first_name }}" oninput="validateJS(event,'text')" required
                      style="text-transform: uppercase;">
                    <div class="valid-feedback">Válido.</div>
                    <div class="invalid-feedback">Por favor, ingrese su nombre.</div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="mb-3">
                    <label for="editarApellidoPerfil" class="form-label">Apellido Paterno</label>
                    <input type="text" class="form-control" id="editarApellidoPerfil" name="editarApellidoPerfil"
                      value="{{ auth()->user()->last_name }}" oninput="validateJS(event,'text')" required
                      style="text-transform: uppercase;">
                    <div class="valid-feedback">Válido.</div>
                    <div class="invalid-feedback">Por favor, ingrese su apellido paterno.</div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="mb-3">
                    <label for="editarApellidoMaternoPerfil" class="form-label">Apellido Materno</label>
                    <input type="text" class="form-control" id="editarApellidoMaternoPerfil"
                      name="editarApellidoMaternoPerfil" value="{{ auth()->user()->last_mader_name }}"
                      oninput="validateJS(event,'text')" required style="text-transform: uppercase;">
                    <div class="valid-feedback">Válido.</div>
                    <div class="invalid-feedback">Por favor, ingrese su apellido materno.</div>
                  </div>
                </div>
              </div>

              <div class="row g-3">
                <div class="col-md-4">
                  <div class="mb-3">
                    <label for="editarUsuarioPerfil" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="editarUsuarioPerfil" name="editarUsuarioPerfil"
                      value="{{ auth()->user()->username}}" readonly>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="mb-3">
                    <label for="editarPasswordPerfil" class="form-label">Nueva Contraseña</label>
                    <input type="password" class="form-control @error('editarPasswordPerfil') is-invalid @enderror"
                      id="editarPasswordPerfil" name="editarPasswordPerfil" placeholder="Opcional: Cambiar contraseña">
                    @error('editarPasswordPerfil')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="mb-3">
                    <label for="editarPasswordPerfil_confirmation" class="form-label">Confirmar Contraseña</label>
                    <input type="password" class="form-control" id="editarPasswordPerfil_confirmation"
                      name="editarPasswordPerfil_confirmation" placeholder="Confirme su nueva contraseña">
                  </div>
                </div>
              </div>

              <div class="row g-3">
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="editarCelularPerfil" class="form-label">Celular</label>
                    <input type="text" class="form-control" id="editarCelularPerfil" name="editarCelularPerfil"
                      value="{{ auth()->user()->telefono}}" oninput="validateJS(event,'phone')" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="editarEmailPerfil" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="editarEmailPerfil" name="editarEmailPerfil"
                      value="{{ auth()->user()->email}}" oninput="validateJS(event,'email')" required>
                  </div>
                </div>
                @error('editarEmailPerfil')
                <div class="alert alert-danger">Correo ya existe</div>
                @enderror
              </div>

              <!-- Sección para la foto -->
              <div class="card">
            <div class="card-body">

              <div class="row g-3">
                <!-- Otros campos -->
                <div class="row">
                  <div class="col-md-12">
                    <label for="editarFotoPerfil" class="form-label">Foto de Perfil</label>
                    <div class="input-group d-flex align-items-center">
                      <div class="me-3">
                        <input class="form-control editarFotoPerfil" name="editarFotoPerfil" id="editarFotoPerfil" type="file" style="width: 300px">
                      </div>
                      <div class="ms-4 mt-2">
                        @if(auth()->user()->foto)
                        <img class="img-fluid avatar-md rounded previsualizar" src="{{ url(auth()->user()->foto) }}" alt="Foto de usuario">
                        @else
                        <img class="img-fluid avatar-md rounded previsualizar" src="{{ url('storage/admins/storage/users/avatar0.jpg') }}" alt="Foto de usuario">
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


            </div>
          </div>

          <!-- Botón para Guardar Cambios -->
          <div class="text-center mt-4">
            <button type="submit" class="btn btn-info waves-effect waves-light">Guardar Cambios</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function() {
  /*=============================================
  SUBIENDO LA FOTO DEL USUARIO
  =============================================*/
  $(".editarFotoPerfil").change(function() {
    var imagen = this.files[0];

    // Verificar si se seleccionó un archivo
    if (!imagen) {
      return; // Salir si no hay archivo seleccionado
    }

    // Validar formato de la imagen
    if (imagen.type != "image/jpeg" && imagen.type != "image/png") {
      $(".editarFotoPerfil").val(""); // Limpiar el input file
      fncSweetAlert("error", "¡La imagen debe estar en formato JPG o PNG!");
      return; // Salir del proceso
    }

    // Validar tamaño de la imagen (máximo 2 MB)
    if (imagen.size > 2000000) {
      $(".editarFotoPerfil").val(""); // Limpiar el input file
      fncSweetAlert("error", "¡La imagen no debe pesar más de 2MB!");
      return; // Salir del proceso
    }

    // Mostrar una vista previa de la imagen seleccionada
    var datosImagen = new FileReader();
    datosImagen.readAsDataURL(imagen);

    datosImagen.onload = function(event) {
      var rutaImagen = event.target.result;
      $(".previsualizar").attr("src", rutaImagen); // Cambiar la imagen de vista previa
    };
  });
});
</script>
@endsection