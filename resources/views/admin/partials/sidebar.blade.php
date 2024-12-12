<div class="main-menu">
    <!-- Brand Logo -->
    <div class="logo-box">
        <!-- Brand Logo Light -->
        <a href="{{ url('Inicio') }}"class="logo-light">
            <img src="assets/images/logo-light.png" alt="logo" class="logo-lg" height="32">
            <img src="assets/images/logo-light-sm.png" alt="small logo" class="logo-sm" height="32">
        </a>

        <!-- Brand Logo Dark -->
        <a href="{{ url('Inicio') }}" class="logo-dark">
            <img src="assets/images/logo-dark.png" alt="dark logo" class="logo-lg" height="32">
            <img src="assets/images/logo-dark-sm.png" alt="small logo" class="logo-sm" height="32">
        </a>
    </div>

    <!--- Menu -->
    <div data-simplebar>
        <ul class="app-menu">

            <li class="menu-title">Menu</li>

            <li class="menu-item">
                <a href="{{ url('Inicio') }}" class="menu-link waves-effect active">
                    <span class="menu-icon"><i data-lucide="airplay "></i></span>
                    <span class="menu-text"> Inicio </span>
                    {{-- <span class="badge bg-info rounded-pill ms-auto">3</span> --}}
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ url('Usuarios') }}" class="menu-link waves-effect">
                    <span class="menu-icon"><i data-lucide="users "></i></span>
                    <span class="menu-text"> Usuarios </span>
                    {{-- <span class="badge bg-info rounded-pill ms-auto">3</span> --}}
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ url('Proveedores') }}" class="menu-link waves-effect">
                    <span class="menu-icon"><i data-lucide="building "></i></span>
                    <span class="menu-text"> Proveedores </span>
                    {{-- <span class="badge bg-info rounded-pill ms-auto">3</span> --}}
                </a>
            </li>

            <li class="menu-item">
                <a href="#menuInventory" data-bs-toggle="collapse" class="menu-link waves-effect">
                    <span class="menu-icon"><i data-lucide="grid"></i></span>
                    <span class="menu-text">Inventario</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuInventory" data-bs-parent="#sidebarMenu">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="{{ url('Productos') }}" class="menu-link">
                                <span class="menu-text">Productos</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ url('Categorias') }}" class="menu-link">
                                <span class="menu-text">Categorias</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ url('Marcas') }}" class="menu-link">
                                <span class="menu-text">Marcas</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ url('Modelos') }}" class="menu-link">
                                <span class="menu-text">Modelos</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ url('Diseños') }}" class="menu-link">
                                <span class="menu-text">Diseños</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="menu-item">
                <a href="#menuPurchases" data-bs-toggle="collapse" class="menu-link waves-effect">
                    <span class="menu-icon"><i data-lucide="shopping-cart"></i></span>
                    <span class="menu-text">Compras</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuPurchases" data-bs-parent="#sidebarMenu">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="{{ url('listar-compras') }}" class="menu-link">
                                <span class="menu-text">Listar Compras</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ url('nuevas-compras') }}" class="menu-link">
                                <span class="menu-text">Nuevas Compras</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="menu-item">
                <a href="#menuSales" data-bs-toggle="collapse" class="menu-link waves-effect">
                    <span class="menu-icon"><i data-lucide="shopping-bag"></i></span>
                    <span class="menu-text">Ventas</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuSales" data-bs-parent="#sidebarMenu">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="{{ url('listar-ventas') }}" class="menu-link">
                                <span class="menu-text">Listar Ventas</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ url('nueva-venta') }}" class="menu-link">
                                <span class="menu-text">Nueva Venta</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="menu-item">
                <a href="{{ url('Clientes') }}" class="menu-link waves-effect">
                    <span class="menu-icon"><i data-lucide="user-plus "></i></span>
                    <span class="menu-text"> Clientes </span>
                    {{-- <span class="badge bg-info rounded-pill ms-auto">3</span> --}}
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ url('Reportes') }}" class="menu-link waves-effect">
                    <span class="menu-icon"><i data-lucide="copy"></i></span>
                    <span class="menu-text"> Reportes de Ventas</span>
                    {{-- <span class="badge bg-info rounded-pill ms-auto">3</span> --}}
                </a>
            </li>
            {{-- <li class="menu-item">
                <a href="#menuExpages" data-bs-toggle="collapse" class="menu-link waves-effect">
                    <span class="menu-icon"><i data-lucide="copy"></i></span>
                    <span class="menu-text"> Extra Pages </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuExpages">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="pages-starter.html" class="menu-link">
                                <span class="menu-text">Starter</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="pages-invoice.html" class="menu-link">
                                <span class="menu-text">Invoice</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="pages-login.html" class="menu-link">
                                <span class="menu-text">Log In</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="pages-register.html" class="menu-link">
                                <span class="menu-text">Register</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="pages-recoverpw.html" class="menu-link">
                                <span class="menu-text">Recover Password</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="pages-lock-screen.html" class="menu-link">
                                <span class="menu-text">Lock Screen</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="pages-404.html" class="menu-link">
                                <span class="menu-text">Error 404</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="pages-500.html" class="menu-link">
                                <span class="menu-text">Error 500</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --}}


        </ul>


    </div>
</div>
