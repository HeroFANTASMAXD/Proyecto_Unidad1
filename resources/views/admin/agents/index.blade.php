@extends('layout.app')

@section('content')

<div class="content">
    <div style="max-width:900px; margin:auto;">

        <h1>Agentes IA </h1><br>

        <a href="{{ route('agents.create') }}" class="btn">
            + Añadir Agente
        </a>

        <div style="margin-top:20px; display:grid; gap:20px;">

            @foreach($agents as $agent)
                <div class="card" style="grid-template-columns:1fr;">

                    <div class="card-text">
                        <h2>{{ $agent->name }}</h2>
                        <p>{{ $agent->link }}</p>

                        <div style="display:flex; gap:10px;">

                            <a href="{{ route('agents.edit', $agent->id) }}" class="btn">
                                Editar
                            </a>

                            <form method="POST" action="{{ route('agents.delete', $agent->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn" style="background:red;">
                                    Eliminar
                                </button>
                            </form>

                        </div>
                    </div>

                </div>
            @endforeach

        </div>

    </div>
</div>

@endsection