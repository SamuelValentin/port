<nav class="top-0 left-0 right-0 mx-auto w-full max-w-4xl bg-transparent p-4 z-20">
    <div class="container flex items-center justify-center p-6 mx-auto text-gray-600 capitalize dark:text-gray-300">
        <a href="{{ route('index') }}" class="text-gray-800 dark:text-gray-200 border-b-2 border-blue-500 mx-1.5 sm:mx-6">home</a>

        <a href="{{ route('about') }}" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">{{__('home.Sobre')}}</a>

        <a href="{{ route('projects') }}" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">{{__('home.Habilidades')}}</a>

        <a href="{{ route('contact') }}" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">{{__('home.Contato')}}</a>

        <!-- Exemplo de uso dos links para troca de idioma -->
        {{-- <a href="{{ route('login') }}" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">English</a> --}}
        {{-- <a href="{{ route('change-language', ['locale' => 'pt-br']) }}" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">Português</a> --}}

        <div class="flex justify-between left-0">
            <a href="{{ route('login') }}" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">Login</a>
            <a href="{{ route('register') }}" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">Register</a>
        </div>
    </div>
</nav>
