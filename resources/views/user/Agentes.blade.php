@extends('layout.app')

@section('content')

<div style="max-width:900px; margin:auto;">

    {{-- ========================= --}}
    {{-- 🟢 SECCIÓN USUARIO --}}
    {{-- ========================= --}}

    <div class="card">
        <div>
            <h1>Agentes</h1>
            <p>
                Selecciona el agente ideal según tu nivel de programación.
                <a href="https://gemini.google.com/gem/1XeDkQ_5DB7eGocdD7e9L9cK38aprKE1Y?usp=sharing" target="_blank">
                    Nenúfar v2.0
                </a>
            </p>

            <a href="https://gemini.google.com/gem/1XeDkQ_5DB7eGocdD7e9L9cK38aprKE1Y?usp=sharing" target="_blank">
                <button class="btn">Seleccionar</button>
            </a>
        </div>

        <img src="{{ asset('img/nenufar2.jpeg') }}">
    </div>


    {{-- ========================= --}}
    {{-- 🔥 LISTA DE AGENTES --}}
    {{-- ========================= --}}

    <div style="margin-top:30px; display:grid; gap:20px;">

        @foreach($agents as $agent)
            <div class="card" style="grid-template-columns:1fr;">

                <div class="card-text">
                    <h2>{{ $agent->name }}</h2>
                    <p>{{ $agent->link }}</p>

                    <a href="{{ $agent->link }}" target="_blank" class="btn">
                        Usar Agente
                    </a>

                    {{-- ========================= --}}
                    {{-- 🔴 SOLO ADMIN --}}
                    {{-- ========================= --}}
                    @auth
                        @if(auth()->user()->role === 'admin')
                            <div style="display:flex; gap:10px; margin-top:10px;">

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
                        @endif
                    @endauth

                </div>

            </div>
        @endforeach

    </div>

</div>

@endsection