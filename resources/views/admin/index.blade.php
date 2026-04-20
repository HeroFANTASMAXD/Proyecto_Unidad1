@extends('layout.app')

@section('content')

<div class="content">
    <div style="width:100%; max-width:1000px; margin:auto;">

        <h1 class="card-title">Usuarios 👥</h1><br>

        <a href="{{route('admin.create')}}" class="btn">
            + Crear Usuario
        </a>
        <a href="{{ route('agents.index') }}" class="btn">
             Ver Agentes IA</a>

        <!-- MENSAJES -->
        @if(session('success'))
            <div style="margin-top:15px; padding:10px; background:#22c55e; color:white; border-radius:10px;">
                {{ session('success') }}
            </div>
        @endif

        @if(session('danger'))
            <div style="margin-top:15px; padding:10px; background:#e11d48; color:white; border-radius:10px;">
                {{ session('danger') }}
            </div>
        @endif

        <div style="margin-top:25px; display:grid; gap:20px;">

            @foreach($users as $user)
                <div class="card" style="grid-template-columns: 1fr;">

                    <div class="card-text">

                        <h2 style="margin-bottom:10px;">
                            {{ $user->name }}
                        </h2>

                        <p><b>Email:</b> {{ $user->email }}</p>

                        <p>
                            <b>Rol:</b> 
                            <span style="
                                padding:5px 10px;
                                border-radius:10px;
                                background: {{ $user->role == 'admin' ? '#7c3aed' : '#999' }};
                                color:white;
                                font-size:12px;">
                                {{ $user->role }}
                            </span>
                        </p>

                        <div style="display:flex; gap:10px; margin-top:15px;">

                            <!-- EDITAR -->
                            <a href="{{ route('admin.edit', $user->id ) }}" class="btn">
                                Editar
                            </a>

                            <!-- ELIMINAR -->
                            <form method="POST" action="{{route('admin.delete', $user->id) }}"
                                  onsubmit="return confirm('¿Eliminar usuario?')">
                                @csrf
                                @method('DELETE')

                                <button class="btn" style="background:#e11d48;">
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