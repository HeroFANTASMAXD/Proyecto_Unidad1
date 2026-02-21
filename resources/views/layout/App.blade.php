<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Nenúfar v2.0 - Tu Agente de Código</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">
    <aside class="sidebar" id="miSidebar">
        <nav class="nav-links">
            <a href="{{ route('inicio') }}">INICIO</a>
            <a href="{{ route('agentes') }}">AGENTES</a>
            <a href="{{ route('menu') }}">MENÚ</a>
            <a href="{{ route('soporte') }}">SOPORTE</a>
        </nav>

        <div class="burger" id="burgerBtn" title="Abrir menú">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </aside>

    <main class="content">
        @yield('content')
        
    </main>
</div>

<script>

    const burgerBtn = document.getElementById('burgerBtn');
    const sidebar = document.getElementById('miSidebar');

    burgerBtn.addEventListener('click', () => {
        sidebar.classList.toggle('active');
        burgerBtn.classList.toggle('toggle-anim');
    });
</script>

</body>
</html>