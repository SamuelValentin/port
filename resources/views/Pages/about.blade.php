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

    <div class="py-12 relative overflow-hidden bg-gray-900">
        <div class="grid grid-cols-2 max-w-screen-lg mx-auto">
            <div class="w-full flex flex-col items-end pr-16">
                <div class="max-w-lg mx-auto my-10 bg-sky-950 rounded-lg shadow-md p-5 pr-10">
                    <img class="w-32 h-32 rounded-full mx-auto" src="images/profile3.png" alt="Profile picture">
                    <h2 class="text-center text-2xl font-semibold mt-3">Samuel Valentin</h2>
                    <p class="text-center text-gray-200 mt-1">{{__('home.Personal-cargo')}}</p>
                    <div class="mt-5 text-center">
                        <h3 class="text-xl font-semibold">Bio</h3>
                        <p class="text-gray-200 mt-2">{{__('home.Personal-bio')}}</p>
                    </div>
                </div>
            </div>
            <div class="py-20 bg-slate-100 relative before:absolute before:h-full before:w-screen before:bg-sky-950 before:top-0 before:left-0">
                <div class="relative z-20 pl-12">
                    <h2 class="text-[#f7d0b6] font-black text-4xl leading-snug mb-10">{{__('home.Goal-title')}}</h2>
                    <p class="text-white text-md">
                        {{__('home.Goal-text')}}
                    </p>
                {{-- <button class="mt-8 text-white uppercase py-3 text-sm px-10 border border-white hover:bg-white hover:bg-opacity-10">Talk with expert</button> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
