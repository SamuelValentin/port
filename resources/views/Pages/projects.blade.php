
@extends('layouts.main')
@section('content')

    @foreach ($projects as $item)
        <!-- Container principal -->
        <div class="flex items-center justify-center mb-10">
            <!-- Cartão -->
            <div class="rounded-xl border p-5 shadow-md w-9/12 bg-white dark:bg-gray-800 dark:border-stone-600">
                <div class="flex w-full items-center justify-between border-b pb-3">
                    <div class="flex items-center space-x-3">
                        <div class="text-lg font-bold text-slate-700 dark:text-white">{{$item->name}}</div>
                    </div>
                    <div class="flex items-center space-x-8">
                        <button class="rounded-2xl bg-sky-200 dark:bg-sky-900 px-3 py-1 text-sm text-gray-600 dark:text-gray-200 font-semibold">{{$item->category->name}}</button>
                        <div class="text-xs text-neutral-500 dark:text-white">{{$item->updated_at}}</div>
                    </div>
                </div>
                <div class="mt-4 mb-6">
                    {{-- <div class="mb-3 text-xl font-bold">Nulla sed leo tempus, feugiat velit vel, rhoncus neque?</div> --}}
                    <div class="text-sm text-neutral-600 dark:text-white">
                        {!! $item->medium_description !!}
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between text-slate-500 dark:text-white">
                        <div class="flex space-x-4 md:space-x-4">
                            <a href="{{ route('project.details', $item->id) }}">
                                <button class="linear rounded-[20px] bg-lightPrimary px-4 text-base font-medium text-brand-500 transition duration-200 bg-slate-100 hover:bg-gray-200 active:bg-gray-300 dark:bg-gray-700 dark:text-white dark:hover:bg-white/5 dark:active:bg-white/20">
                                    See all
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- component -->
    {{-- <div class="p-24 flex flex-wrap items-center justify-center">

        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs shadow-lg">
        <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
            <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
            <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
        </svg>
        <div class="relative pt-10 px-10 flex items-center justify-center">
            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
            <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png" alt="">
        </div>
        <div class="relative text-white px-6 pb-6 mt-6">
            <span class="block opacity-75 -mb-1">Indoor</span>
            <div class="flex justify-between">
            <span class="block font-semibold text-xl">Peace Lily</span>
            <span class="bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$36.00</span>
            </div>
        </div>
        </div>
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-teal-500 rounded-lg max-w-xs shadow-lg">
        <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
            <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
            <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
        </svg>
        <div class="relative pt-10 px-10 flex items-center justify-center">
            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
            <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069998-305de300-cc9a-11e9-8ae7-5a0fe00299f2.png" alt="">
        </div>
        <div class="relative text-white px-6 pb-6 mt-6">
            <span class="block opacity-75 -mb-1">Outdoor</span>
            <div class="flex justify-between">
            <span class="block font-semibold text-xl">Monstera</span>
            <span class="bg-white rounded-full text-teal-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$45.00</span>
            </div>
        </div>
        </div>
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-purple-500 rounded-lg max-w-xs shadow-lg">
        <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
            <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
            <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
        </svg>
        <div class="relative pt-10 px-10 flex items-center justify-center">
            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
            <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png" alt="">
        </div>
        <div class="relative text-white px-6 pb-6 mt-6">
            <span class="block opacity-75 -mb-1">Outdoor</span>
            <div class="flex justify-between">
            <span class="block font-semibold text-xl">Oak Tree</span>
            <span class="bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$68.50</span>
            </div>
        </div>
        </div>

    </div> --}}
@endsection
