@extends('layout.App')

@section('content')

<div class="content">
    <div class="card">
        
        <div class="card-text">
            <h1>Crear Usuario</h1>

            <form method="POST" action="{{ route('admin.store') }}">
                @csrf

                <label>Nombre</label>
                <input type="text" name="name" required>
                @error('name')
                <p style="color: red;">{{ $message }}</p>

                @enderror

                <label>Email</label>
                <input type="email" name="email" required>
                @error('email')
                <p style="color: red;">{{ $message }}</p>

                @enderror

                <label>Password</label>
                <input type="password" name="password" required>
                @error('password')
                <p style="color: red;">{{ $message }}</p>

                @enderror

                <label>Rol</label>
                <select name="role">
                    <option value="usuario">Usuario</option>
                    <option value="admin">Admin</option>
                </select>

                <button class="btn">Crear</button><br><br>
            </form>

            <a href="{{ route('admin.index') }}" class="btn">Volver</a><br><br>
        </div>

        <div class="card-image-wrapper">
            <img src="{{ asset('img/nenufar.jpeg') }}" class="hero-image">
        </div>

    </div>
</div>

@endsection