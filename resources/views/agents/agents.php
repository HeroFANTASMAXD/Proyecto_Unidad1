@extends('layout.app')

@section('content')

<div style="max-width:900px; margin:auto;">

    {{-- ===================== --}}
    {{-- 🟢 HEADER USUARIO --}}
    {{-- ===================== --}}
    <div class="card" style="border-left:5px solid #4ade80;">
        <div>
            <h1>Agentes disponibles</h1>
            <p>
                Selecciona el agente ideal según tu nivel de programación.
            </p>

            <a href="https://gemini.google.com/gem/1XeDkQ_5DB7eGocdD7e9L9cK38aprKE1Y?usp=sharing" target="_blank">
                <button class="btn">Probar Nenúfar v2.0</button>
            </a>
        </div>

        <img src="{{ asset('img/nenufar2.jpeg') }}">
    </div>


    {{-- ===================== --}}
    {{-- 🔥 LISTA DE AGENTES --}}
    {{-- ===================== --}}
    <div style="margin-top:30px; display:grid; gap:20px;">

        @foreach($agents as $agent)

            {{-- CARD --}}
            <div class="card" style="grid-template-columns:1fr;">

                <div class="card-text">
                    <h2>{{ $agent->name }}</h2>
                    <p>{{ $agent->link }}</p>

                    <a href="{{ $agent->link }}" target="_blank" class="btn">
                        Usar Agente
                    </a>

                    {{-- ===================== --}}
                    {{-- 🔴 PANEL ADMIN --}}
                    {{-- ===================== --}}
                    @auth
                        @if(auth()->user()->role === 'admin')

                            <div style="margin-top:15px; padding:10px; border-top:1px solid #444;">
                                <small style="color:#ff6b6b;">Panel admin</small>

                                <div style="display:flex; gap:10px; margin-top:8px;">

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

                        @endif
                    @endauth

                </div>

            </div>

        @endforeach

    </div>

</div>

@endsection