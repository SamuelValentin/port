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

    <div class="px-4">
        {{-- <p class="text-4xl text-center my-8 
                        lg:text-4xl
                        xl:text-5xl">
            <strong>Vida IBB</strong>
        </p> --}}

        <div class="">
            <div class="sm:mb-4 max-w-5xl mx-auto">
                <div>
                    @if ($news->image_name == '')
                        <svg class="h-40 w-40" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    @else
                        <img class=" rounded-2xl overflow-hidden" src="images/{{$news->image_name}}" class="" alt="..." />
                    @endif
                </div>
                <div class="sm:flex sm:justify-end">
                    <div class=" sm:w-3/4 ">
                        <h1 class="font-bold text-2xl lg:text-4xl mb-4 mt-4">{{ $news->title }}</h1>
                        <h2 class="font-semibold text-sm lg:text-lg mb-4 text-gray-400">{{ $news->category }} | publicado {{ $news->date_published }}</h2>
                        <div class="mb-10 lg:px-0">
                            <div name="content" class="content mb-4 space-y-4 text-left text-gray-800 text-sm lg:text-xl">
                                {!! $news->description !!}
                            </div>
                            @if ($news->video_embed_url_1)
                                <div class="mb-4 rounded-lg drop-shadow-lg overflow-hidden"><iframe class="w-full aspect-video "
                                    src="{{ $news->video_embed_url_1 }}" frameborder="0" allowfullscreen
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
                                </div>
                            @endif
                            {{-- @if ($news->video_embed_url_2)
                                <x-yt-embed url="{{ $news->video_embed_url_2 }}" />
                            @endif
                            @if ($news->video_embed_url_3)
                                <x-yt-embed url="{{ $news->video_embed_url_3 }}" />
                            @endif --}}
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <style>
        .content ul {    
            list-style: disc; 
            margin-left: 1.5em;
        }
        .content ol {    
            list-style: decimal;
            margin-left: 1.5em;
        }
        .content blockquote {
            border-left: 4px solid #ddd;
            padding: 0 1em;
            color: 	#505050;
            font-style: italic;
            font-size: .85em
        }
        .content a {
            text-decoration: underline;
        }
    </style>

@endsection