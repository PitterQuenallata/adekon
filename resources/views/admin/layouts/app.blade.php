<!DOCTYPE html>
<html lang="es" data-bs-theme="light" data-menu-color="light" data-topbar-color="dark">

<head>
    <meta charset="utf-8" />
    <title>POS - laravel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Myra Studio" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('admins/assets/images/favicon.ico') }}">

    <script src="{{ url('admins/assets/libs/jquery2/dist/jquery.min.js') }}"></script>



<!-- CSS -->
<link href="{{ url('admins/assets/libs/morris.js/morris.css') }}" rel="stylesheet" type="text/css">
<link href="{{ url('admins/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ url('admins/assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ url('admins/assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ url('admins/assets/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ url('admins/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">

<link href="{{ url('admins/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="{{ url('admins/assets/libs/daterangepicker/daterangepicker.css') }}">


<link rel="stylesheet" type="text/css" href="{{ url('admins/assets/libs/jqueryToast/dist/jquery.toast.min.css') }}">

<link href="{{ url('admins/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ url('admins/assets/css/style.min.css') }}" rel="stylesheet" type="text/css">

<!-- JavaScript -->
<script src="{{ url('admins/assets/libs/jqueryToast/dist/jquery.toast.min.js') }}"></script>
<script src="{{ url('admins/assets/libs/jqueryNumber/jquerynumber.min.js') }}"></script>





<script src="{{ url('admins/assets/js/config.js') }}"></script>
<!-- Sweet Alerts js -->
<script src="{{ url('admins/assets/libs/sweetalert2/sweetalert2.all.min.js') }}"></script>



<script src="{{ url('admins/js/alertss.js') }}"></script>
<script src="{{ url('admins/js/forms.js') }}"></script>
</head>

<body>
    @if (Auth::user())
    <!-- ========== Menu Izquierda ========== -->
    <div class="layout-wrapper">


        @include('admin.partials.sidebar')
        <div class="page-content">

            <!-- ========== Navbar Cabezera ========== -->
            @include('admin.partials.navbar')

            <!-- ========== Contenido ========== -->
            <div class="container-fluid">
                @yield('contenido')
            </div>



        </div>
    </div>
    @else
    @yield('ingresar')
    @endif




<!-- App js -->
<script src="{{ url('admins/assets/js/vendor.min.js')}}"></script>
<script src="{{ url('admins/assets/js/app.js')}}"></script>

<!-- Jquery Sparkline Chart  -->
<script src="{{ url('admins/assets/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

<!-- Jquery-knob Chart Js-->
<script src="{{ url('admins/assets/libs/jquery-knob/jquery.knob.min.js')}}"></script>


<!-- Morris Chart Js-->
<script src="{{ url('admins/assets/libs/morris.js/morris.min.js')}}"></script>

<script src="{{ url('admins/assets/libs/raphael/raphael.min.js')}}"></script>

<!-- Dashboard init-->
<script src="{{ url('admins/assets/js/pages/dashboard.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js')}}"></script>
<!-- third party js -->
<script src="{{ url('admins/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ url('admins/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{ url('admins/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ url('admins/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}"></script>
<script src="{{ url('admins/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ url('admins/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js')}}"></script>
<script src="{{ url('admins/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ url('admins/assets/libs/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{ url('admins/assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ url('admins/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{ url('admins/assets/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>
<script src="{{ url('admins/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{ url('admins/assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>

<script src="{{ url('admins/assets/libs/select2/js/select2.min.js')}}"></script>



<script src="{{ url('admins/assets/libs/daterangepicker/moment.min.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/locale/es.min.js"></script>
<script>
  moment.locale('es'); // Configurar el idioma global en español
  moment.updateLocale('es', {
    months: [
      "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
      "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
    ],
    weekdays: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
    weekdaysShort: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
  });
</script>
<script src="{{ url('admins/assets/libs/daterangepicker/daterangepicker.js')}}"></script>



    <!-- js-->
    <!-- <script src="{{ url('admins/assets/js/pages/sweet-alerts.js') }}"></script> -->
    <script src="{{ url('admins/js/plantilla.js') }}"></script>
    <script src="{{ url('admins/js/proveedor.js') }}"></script>
    <script src="{{ url('admins/js/categoria.js') }}"></script>
    <script src="{{ url('admins/js/marca.js') }}"></script>
    <script src="{{ url('admins/js/modelo.js') }}"></script>
    <script src="{{ url('admins/js/diseno.js') }}"></script>
    <script src="{{ url('admins/js/producto.js') }}"></script>
    <script src="{{ url('admins/js/usuario.js') }}"></script>


    {{--@if (session('success'))
        <!-- <script type="text/javascript">
            Swal.fire({
                title: '{{ session('success') }}',
    icon: 'success',
    confirmButtonText: "Aceptar"
    });
    </script> -->
    @endif --}}



</body>

</html>