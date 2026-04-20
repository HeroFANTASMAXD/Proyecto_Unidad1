@extends('layout.app')

@section('content')

<div class="content">
    <div class="card" style="max-width:500px; margin:auto;">

        <h2>Editar Agente</h2>

        <form method="POST" action="{{ route('agents.update', $agent->id) }}">
            @csrf
            @method('PUT')

            <input type="text" name="name" value="{{ $agent->name }}" required>
            <input type="text" name="link" value="{{ $agent->link }}" required>

            <button class="btn">Actualizar</button>
        </form>

    </div>
</div>

@endsection