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

    <div class="p-5">
        <div class="max-w-md mx-auto">
            <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm dark:bg-gray-800 dark:border-gray-700">
                {{-- <a href="#">
                    <img class="rounded-t-lg" src="images/teste.jpg" alt="">
                </a> --}}
                <div class="mb-2 ">
                    @if ('$new->image_name' == '')
                        <svg class="h-40 w-40" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    @else
                        <img class=" rounded-t-lg overflow-hidden" src="images/teste.jpg"
                            class="" alt="..." />
                    @endif
                </div>
                <div class="p-5">
                    <a href="#">
                        <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2 dark:text-white">Lâmpada para os meus pés</h5>
                    </a>
                    <p class="font-normal text-gray-700 mb-3 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#" class="text-blue-700 hover:text-blue-800 focus:ring-4 font-medium text-md text-center inline-flex items-center dark:text-blue-600 dark:hover:text-blue-700">
                        Leia mais
                    </a>
                    <span class="rounded-lg py-2 px-2 uppercase bg-ibb-blue font-semibold text-xs text-gray-700 whitespace-nowrap bg-slate-100 float-right">Vida Ibb</span>
                </div>
            </div>
        </div>
    </div>

@endsection