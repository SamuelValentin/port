@extends('layouts.main')
@section('content')
    {{-- <div class="bg-slate-10 py-20">
        <div class="max-w-screen-lg mx-auto flex justify-between items-center">
            <div class="max-w-xl">
                <h2 class="font-black text-sky-50 text-3xl mb-4">Qual o objetivo desta página</h2>
                <p class="text-base text-sky-50">Com as constantes mudanças do mercado de trabalho, é importante estar sempre atualizado e por dentro nas novas tecnologias. Sendo assim, como um meio de demonstrar as minhas capacidades e também praticar, tive a ideia de criar esta pagina. Assim, fica claro o que eu posso fazer de acordo com minhas habilidades.</p>
            </div>
            <div class="w-full flex flex-col items-end pr-16">
                <div class="h-full mt-auto overflow-hidden relative">
                    <img src="https://picsum.photos/800/600" class="h-full w-full object-contain" alt="">
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="max-w-lg mx-auto my-10 bg-sky-950 rounded-lg shadow-md p-5 pr-10">
        <img class="w-32 h-32 rounded-full mx-auto" src="images/profile3.png" alt="Profile picture">
        <h2 class="text-center text-2xl font-semibold mt-3">Samuel Valentin</h2>
        <p class="text-center text-gray-200 mt-1">{{__('home.Personal-cargo')}}</p>
        <div class="mt-5 text-center">
            <h3 class="text-xl font-semibold">Bio</h3>
            <p class="text-gray-200 mt-2">{{__('home.Personal-bio')}}</p>
        </div>
    </div> --}}

    <div class="w-screen h-screen overflow-hidden relative before:block before:absolute before:bg-black before:h-full before:w-full before:top-0 before:left-0 before:z-10 before:opacity-30">
        <img src="images/pexels-bri-schneiter-28802-346529.jpg" class="absolute top-0 left-0 min-h-full ob block dark:hidden" alt="Light Mode Image">
        <img src="images/pexels-no-name-14543-66997.jpg" class="absolute top-0 left-0 min-h-full ob hidden dark:block" alt="Dark Mode Image">
        <div class="relative z-20 max-w-screen-lg mx-auto grid grid-cols-12 h-full items-center">
            <div class="col-span-6">
                <h1 class="text-white font-extrabold text-5xl mb-8">{{__('home.About-title')}}</h1>
                <p class="text-stone-100 text-base">
                    {{__('home.Banner-text')}}
                </p>
            </div>
        </div>
    </div>

    {{-- Goal --}}
    @include('components.page-itens.goal-page')

    {{-- Curriculo --}}
    @include('components.page-itens.resume')

    {{-- Experiencias e Trabalhos --}}
    @include('components.page-itens.trajectory')
@endsection
