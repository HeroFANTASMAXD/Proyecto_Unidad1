<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<x-guest-layout>

<div class="login-container">

    <div class="login-card">

        <h2>Iniciar Sesión</h2>

        <x-auth-session-status :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="login-form-group">
                <x-input-label for="email" :value="__('Email')" />
                
                <x-text-input 
                    id="email" 
                    class="login-input"
                    type="email" 
                    name="email" 
                    :value="old('email')" 
                    required autofocus />

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

            <!-- Remember -->
            <div class="login-remember">
                <label>
                    <input type="checkbox" name="remember">
                    Recordarme
                </label>
            </div>

            <!-- Botón -->
            <button type="submit" class="btn login-btn">
                Iniciar sesión
            </button>

            <!-- Links -->
            <div class="login-links">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        ¿Olvidaste tu contraseña?
                    </a>
                @endif
                <br>
                <a href="{{ route('register') }}">
                    Crear cuenta
                </a>
            </div>

        </form>

    </div>

</div>

</x-guest-layout>