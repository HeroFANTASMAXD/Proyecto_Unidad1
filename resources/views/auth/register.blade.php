<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<x-guest-layout>

<div class="login-container">

    <div class="login-card">

        <h2>Crear Cuenta</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Nombre -->
            <div class="login-form-group">
                <x-input-label for="name" :value="__('Nombre')" />
                
                <x-text-input 
                    id="name" 
                    class="login-input"
                    type="text" 
                    name="name" 
                    :value="old('name')" 
                    required autofocus />

                <x-input-error :messages="$errors->get('name')" />
            </div>

            <!-- Email -->
            <div class="login-form-group">
                <x-input-label for="email" :value="__('Email')" />
                
                <x-text-input 
                    id="email" 
                    class="login-input"
                    type="email" 
                    name="email" 
                    :value="old('email')" 
                    required />

                <x-input-error :messages="$errors->get('email')" />
            </div>

            <!-- Password -->
            <div class="login-form-group">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input 
                    id="password" 
                    class="login-input"
                    type="password"
                    name="password"
                    required />

                <x-input-error :messages="$errors->get('password')" />
            </div>

            <!-- Confirm Password -->
            <div class="login-form-group">
                <x-input-label for="password_confirmation" :value="__('Confirmar Password')" />

                <x-text-input 
                    id="password_confirmation" 
                    class="login-input"
                    type="password"
                    name="password_confirmation"
                    required />

                <x-input-error :messages="$errors->get('password_confirmation')" />
            </div>

            <!-- Botón -->
            <button type="submit" class="btn login-btn">
                Registrarse
            </button>

            <!-- Link login -->
            <div class="login-links">
                <a href="{{ route('login') }}">
                    ¿Ya tienes cuenta? Inicia sesión
                </a>
            </div>

        </form>

    </div>

</div>

</x-guest-layout>