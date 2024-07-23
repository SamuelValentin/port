<nav class="top-0 left-0 right-0 mx-auto w-full max-w-4xl bg-transparent p-4 z-20">
    <div class="container flex items-center justify-center p-6 mx-auto text-gray-600 capitalize dark:text-gray-300">
        <a href="{{ route('index') }}" class="{{ Request::is('/') ? 'text-gray-800 dark:text-gray-200 border-b-2 border-blue-500' : 'border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500' }} mx-1.5 sm:mx-6">home</a>

        <a href="{{ route('about') }}" class="{{ Request::is('about') ? 'text-gray-800 dark:text-gray-200 border-b-2 border-blue-500' : 'border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500' }} mx-1.5 sm:mx-6">{{__('home.Sobre')}}</a>

        <a href="{{ route('projects') }}" class="{{ Request::is('projects') ? 'text-gray-800 dark:text-gray-200 border-b-2 border-blue-500' : 'border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500' }} mx-1.5 sm:mx-6">{{__('home.Habilidades')}}</a>

        <a href="{{ route('contact') }}" class="{{ Request::is('contact') ? 'text-gray-800 dark:text-gray-200 border-b-2 border-blue-500' : 'border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500' }} mx-1.5 sm:mx-6">{{__('home.Contato')}}</a>

        <!-- Exemplo de uso dos links para troca de idioma -->
        {{-- <a href="{{ route('login') }}" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">English</a> --}}
        {{-- <a href="{{ route('change-language', ['locale' => 'pt-br']) }}" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">Português</a>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
        </svg>

        <div class="flex justify-between">
            <a href="{{ route('login') }}" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">Login</a>
            <a href="{{ route('register') }}" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">Register</a>
        </div> --}}

         <!-- Botão de dropdown -->
         <div class="flex justify-between">
            <button id="dropdownButton" class="focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdownMenu" class="hidden absolute mt-2 w-48 bg-white dark:bg-gray-800 rounded-md shadow-lg z-10">
                <a href="{{ route('login') }}" class="block px-4 py-2 text-gray-800 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Login</a>
                <a href="{{ route('register') }}" class="block px-4 py-2 text-gray-800 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Register</a>
            </div>
        </div>

        <!-- Botão do menu responsivo -->
        <button id="menuButton" class="sm:hidden focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5M3.75 12h16.5M3.75 18.75h16.5" />
            </svg>
        </button>
    </div>

</nav>

<script>
    document.getElementById('dropdownButton').addEventListener('click', function() {
        var dropdownMenu = document.getElementById('dropdownMenu');
        dropdownMenu.classList.toggle('hidden');
    });

    // Fechar o dropdown ao clicar fora dele
    window.addEventListener('click', function(e) {
        var dropdownButton = document.getElementById('dropdownButton');
        var dropdownMenu = document.getElementById('dropdownMenu');
        if (!dropdownButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
            dropdownMenu.classList.add('hidden');
        }
    });
</script>
