@extends('layouts.main')
@section('content')


    <div class="w-screen h-screen overflow-hidden relative before:block before:absolute before:bg-black before:h-full before:w-full before:top-0 before:left-0 before:z-10 before:opacity-30">
        <img src="images/pexels-bri-schneiter-28802-346529.jpg" class="absolute top-0 left-0 min-h-full ob block dark:hidden" alt="Light Mode Image">
        <img src="https://picsum.photos/seed/picsum/1900/850" class="absolute top-0 left-0 min-h-full ob hidden dark:block" alt="Dark Mode Image">
        {{-- <img src="images/pexels-no-name-14543-66997.jpg" class="absolute top-0 left-0 min-h-full ob hidden dark:block" alt="Dark Mode Image"> --}}
        <div class="relative z-20 max-w-screen-lg mx-auto grid sm:grid-cols-12 h-full items-center">
            <div class="sm:col-span-6 flex flex-col items-center sm:items-start">
                <span class="uppercase text-white text-xs font-bold mb-2 block">Samuel Valentin</span>
                <h1 class="text-white font-extrabold text-5xl mb-8 text-center sm:text-left">{{__('home.About-title')}}</h1>
                <p class="text-stone-100 text-base text-center sm:text-left">
                    {{__('home.Banner-text')}}
                </p>
                {{-- <a href="{{ route('login') }}" class="mt-8 text-white uppercase py-4 text-base font-light px-10 border border-white hover:bg-white hover:bg-opacity-10 text-center sm:text-left">Get started</a> --}}
            </div>
        </div>

    </div>

    {{-- Goal
    @include('components.page-itens.goal-page')

    {{-- Curriculo 
    @include('components.page-itens.resume') --}}

    {{-- Experiencias e Trabalhos --}}
    {{-- @include('components.page-itens.trajectory') --}}

    <div class="flex flex-col items-center mb-5">
        <p class="text-lg text-center my-8 sm:text-2xl lg:text-4xl xl:text-5xl">
            <strong>Encontre-nos</strong>
        </p>
        <!-- Endereços -->
        <div class="flex flex-col lg:flex-row justify-center items-stretch gap-8 w-full max-w-7xl">
            {{-- Side-bar --}}
            <div class="w-full lg:w-64 bg-white shadow-md p-6 flex flex-col flex-1 basis-1/4 items-center">
                <h2 class="text-xl font-bold mb-6 text-center">Unidades IBB</h2>
                <ul class="flex flex-row lg:flex-col gap-4 w-full justify-center">
                    <li>
                        <button
                            onclick="selectMap('bacacheri')"
                            class="map-selector w-full text-center p-2 bg-white hover:bg-gray-100">
                            IBB Bacacheri
                        </button>
                    </li>
                    <li>
                        <button
                            onclick="selectMap('uberaba')"
                            class="map-selector w-full text-center p-2 bg-white hover:bg-gray-100">
                            IBB Uberaba
                        </button>
                    </li>
                    <li>
                        <button
                            onclick="selectMap('pinhais')"
                            class="map-selector w-full text-center p-2 bg-white hover:bg-gray-100">
                            IBB Pinhais
                        </button>
                    </li>
                </ul>
            </div>
            {{-- Mapa --}}
            <div class="flex-2 justify-center items-center flex-3 basis-3/4">
                <div id="map-container" class="bg-white p-8 rounded-lg shadow-lg w-full max-w-screen-lg">
                    <div id="map-bacacheri" class="map-content hidden">
                        <h3 class="font-bold text-xl mb-4">IBB Bacacheri</h3>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.7528074456636!2d-49.22473948473332!3d-25.41308373844893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce5ea9801985b%3A0x3814fdd41f182bfa!2sR.%20Amazonas%20de%20Souza%20Azevedo%2C%20134%20-%20Bacacheri%2C%20Curitiba%20-%20PR%2C%2082520-620!5e0!3m2!1spt-BR!2sbr!4v1649551253443!5m2!1spt-BR!2sbr"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div id="map-uberaba" class="map-content hidden">
                        <h3 class="font-bold text-xl mb-4">IBB Uberaba</h3>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3601.4336629268687!2d-49.21717988473164!3d-25.490579741531384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dcfa97daefb2a9%3A0xca6832a315c1e65a!2sR.%20Augusto%20Zibarth%2C%20695%20-%20Uberaba%2C%20Curitiba%20-%20PR%2C%2081560-360!5e0!3m2!1spt-BR!2sbr!4v1649551138164!5m2!1spt-BR!2sbr"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div id="map-pinhais" class="map-content hidden">
                        <h3 class="font-bold text-xl mb-4">IBB Pinhais</h3>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.604239777381!2d-49.18324118473256!3d-25.45149153997544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dcefdd0f331687%3A0x33ceca7662903341!2sR.%20Rio%20Solim%C3%B5es%2C%20140%20-%20Weiss%C3%B3polis%2C%20Pinhais%20-%20PR%2C%2083322-150!5e0!3m2!1spt-BR!2sbr!4v1678012892549!5m2!1spt-BR!2sbr"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    
    <script>
        function selectMap(mapName) {
            document.querySelectorAll('.map-content').forEach(map => {
                map.classList.add('hidden');
            });
            document.getElementById(`map-${mapName}`).classList.remove('hidden');
        
            document.querySelectorAll('.map-selector').forEach(btn => {
                btn.classList.remove('bg-blue-100');
            });
            event.target.classList.add('bg-blue-100');
        }
        
        // Inicialmente mostra Bacacheri
        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('map-bacacheri').classList.remove('hidden');
            document.querySelector('[data-map="bacacheri"]').classList.add('bg-blue-100');
        });
    </script>
@endsection