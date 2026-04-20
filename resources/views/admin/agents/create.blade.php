@extends('layout.app')

@section('content')

<div class="content">
    <div class="card" style="max-width:500px; margin:auto;">

        <h2>Crear Agente</h2>

        <form method="POST" action="{{ route('agents.store') }}">
            @csrf

            <input type="text" name="name" placeholder="Nombre del agente" required>
            <input type="text" name="link" placeholder="Link del agente" required>

            <button class="btn">Guardar</button>
        </form>

    </div>
</div>

@endsection