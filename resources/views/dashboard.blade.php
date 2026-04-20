<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nenúfar v2.0</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">

    <!-- SIDEBAR -->
    <aside class="sidebar" id="miSidebar">

        <nav class="nav-links">
            <a href="{{ route('inicio') }}">INICIO</a>
            <a href="{{ route('agentes') }}">AGENTES</a>
            <a href="{{ route('menu') }}">MENÚ</a>
            <a href="{{ route('soporte') }}">SOPORTE</a>

            @if(auth()->user()->role == 'admin')
                <a href="/admin">USUARIOS</a>
            @endif
        </nav>

        <!-- USER PANEL -->
        <div class="user-panel">

            <div class="user-info">
                <span>{{ auth()->user()->name }}</span>
                <small>{{ auth()->user()->role }}</small>
            </div>

            <!-- LOGOUT -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="logout-btn">
                    Cerrar sesión
                </button>
            </form>

        </div>

        <!-- BURGER -->
        <div class="burger" id="burgerBtn">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </aside>

    <!-- CONTENIDO -->
    <main class="content">
        @include('layout._partials.messages')
        @yield('content')
    </main>

</div>

<script>
const burgerBtn = document.getElementById('burgerBtn');
const sidebar = document.getElementById('miSidebar');

burgerBtn.addEventListener('click', () => {
    sidebar.classList.toggle('active');
});
</script>

</body>
</html>