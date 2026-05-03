<x-guest-layout>
    <!-- Encabezado personalizado -->
    <div class="text-center mb-8 mt-4">
        <h2 class="text-2xl font-bold text-gray-800">Crea tu cuenta 🚀</h2>
        <p class="text-sm text-gray-500 mt-2">Únete para gestionar tu biblioteca personal</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" value="{{ __('Nombre Completo') }}" />
            <x-text-input id="name" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-lg shadow-sm" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" value="{{ __('Correo Electrónico') }}" />
            <x-text-input id="email" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-lg shadow-sm" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" value="{{ __('Contraseña') }}" />
            <x-text-input id="password" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-lg shadow-sm"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" value="{{ __('Confirmar Contraseña') }}" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-lg shadow-sm"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Botones y Enlace a Login -->
        <div class="mt-8 flex flex-col space-y-4">
            <button type="submit" class="w-full justify-center items-center px-4 py-3 bg-indigo-600 border border-transparent rounded-lg font-bold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 shadow-md">
                {{ __('Registrarse') }}
            </button>

            <p class="text-center text-sm text-gray-600 mt-4">
                ¿Ya tienes una cuenta? 
                <a href="{{ route('login') }}" class="font-bold text-indigo-600 hover:text-indigo-900 transition-colors">
                    Inicia sesión aquí
                </a>
            </p>
        </div>
    </form>
</x-guest-layout>