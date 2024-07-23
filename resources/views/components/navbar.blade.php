<nav class="top-0 left-0 right-0 mx-auto w-full max-w-4xl bg-transparent p-4 z-20">
    <div class="hidden container sm:flex items-center justify-between mx-auto text-gray-600 capitalize dark:text-gray-300">
        <!-- Logo e Links -->
        <div class="container flex items-center justify-center mx-auto text-gray-600 capitalize dark:text-gray-300">
            <a href="{{ route('index') }}" class="{{ Request::is('/') ? 'text-gray-800 dark:text-gray-200 border-b-2 border-blue-500' : 'border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500' }} mx-1.5 sm:mx-6">home</a>
            <a href="{{ route('about') }}" class="{{ Request::is('about') ? 'text-gray-800 dark:text-gray-200 border-b-2 border-blue-500' : 'border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500' }} mx-1.5 sm:mx-6">{{__('home.Sobre')}}</a>
            <a href="{{ route('projects') }}" class="{{ Request::is('projects') ? 'text-gray-800 dark:text-gray-200 border-b-2 border-blue-500' : 'border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500' }} mx-1.5 sm:mx-6">{{__('home.Habilidades')}}</a>
            <a href="{{ route('contact') }}" class="{{ Request::is('contact') ? 'text-gray-800 dark:text-gray-200 border-b-2 border-blue-500' : 'border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500' }} mx-1.5 sm:mx-6">{{__('home.Contato')}}</a>
        </div>

        <!-- Dropdown Button -->
        <div class="relative ml-auto">
            <button id="dropdownButton" class="focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
            </button>

            <!-- Dropdown Menu -->
            <div id="dropdownMenu" class="hidden absolute right-0 mt-5 w-48 bg-white dark:bg-gray-800 rounded-md shadow-lg z-10">
                <a href="{{ route('login') }}" class="block px-4 py-2 text-gray-800 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Login</a>
                <a href="{{ route('register') }}" class="block px-4 py-2 text-gray-800 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Register</a>
            </div>
        </div>
    </div>

    <!-- Responsive Menu Button -->
    <button id="menuButton" class="sm:hidden focus:outline-none right-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5M3.75 12h16.5M3.75 18.75h16.5" />
        </svg>
    </button>

    <!-- Responsive Menu -->
    <div id="responsiveMenu" class="hidden sm:hidden flex-col mt-4 space-y-2">
        <a href="{{ route('index') }}" class="{{ Request::is('/') ? 'text-gray-800 dark:text-gray-200 border-b-2 border-blue-500' : 'border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500' }} block px-4 py-2">home</a>
        <a href="{{ route('about') }}" class="{{ Request::is('about') ? 'text-gray-800 dark:text-gray-200 border-b-2 border-blue-500' : 'border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500' }} block px-4 py-2">{{__('home.Sobre')}}</a>
        <a href="{{ route('projects') }}" class="{{ Request::is('projects') ? 'text-gray-800 dark:text-gray-200 border-b-2 border-blue-500' : 'border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500' }} block px-4 py-2">{{__('home.Habilidades')}}</a>
        <a href="{{ route('contact') }}" class="{{ Request::is('contact') ? 'text-gray-800 dark:text-gray-200 border-b-2 border-blue-500' : 'border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500' }} block px-4 py-2">{{__('home.Contato')}}</a>

        <a href="{{ route('login') }}" class="{{ Request::is('login') ? 'text-gray-800 dark:text-gray-200 border-b-2 border-blue-500' : 'border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500' }} block px-4 py-2">Login</a>
        <a href="{{ route('register') }}" class="{{ Request::is('register') ? 'text-gray-800 dark:text-gray-200 border-b-2 border-blue-500' : 'border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500' }} block px-4 py-2">Register</a>
    </div>
</nav>

<script>
    // Dropdown menu
    document.getElementById('dropdownButton').addEventListener('click', function() {
        var dropdownMenu = document.getElementById('dropdownMenu');
        dropdownMenu.classList.toggle('hidden');
    });

    // Menu responsivo
    document.getElementById('menuButton').addEventListener('click', function() {
        var responsiveMenu = document.getElementById('responsiveMenu');
        responsiveMenu.classList.toggle('hidden');
    });

    // Fechar menus ao clicar fora
    window.addEventListener('click', function(e) {
        var dropdownButton = document.getElementById('dropdownButton');
        var dropdownMenu = document.getElementById('dropdownMenu');
        var menuButton = document.getElementById('menuButton');
        var responsiveMenu = document.getElementById('responsiveMenu');

        if (!dropdownButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
            dropdownMenu.classList.add('hidden');
        }

        if (!menuButton.contains(e.target) && !responsiveMenu.contains(e.target)) {
            responsiveMenu.classList.add('hidden');
        }
    });
</script>
