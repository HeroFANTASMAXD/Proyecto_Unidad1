@extends('layout.App')

@section('content')

<div class="content">
    <div class="card">

        <div class="card-text">
            <h1>Editar Usuario</h1>

            <form method="POST" action="{{ route('admin.update', $user->id ) }}">
                @method('PUT')
                @csrf

                <label>Nombre</label>
                <input type="text" name="name" value="{{ $user->name }}" required>

                <label>Email</label>
                <input type="email" name="email" value="{{ $user->email }}" required>

                <label>Rol</label>
                <select name="role">
                    <option value="usuario" {{ $user->role == 'usuario' ? 'selected' : '' }}>Usuario</option>
                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                </select>

                <button class="btn">Actualizar</button>
            </form>

            <a href="{{ route('admin.index') }}" class="btn">Volver</a>
        </div>

        <div class="card-image-wrapper">
            <img src="{{ asset('img/nenufar.jpeg') }}" class="hero-image">
        </div>

    </div>
</div>

@endsection