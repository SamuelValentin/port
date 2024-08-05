@extends('layouts.main')

@section('content')
    <div class='flex items-center justify-center min-h-screen from-blue-200 via-sky-200 to-blue-50 dark:from-gray-900 dark:via-sky-950 dark:to-blue-950 bg-gradient-to-br'>
        <div class="container mx-auto px-4 mt-10 ">
            <div class="relative flex flex-col min-w-0 break-words w-full bg-white dark:bg-gray-900 bg-opacity-90 mb-6 shadow-xl rounded-lg">
                <div class="px-6">
                    <div class="text-center mt-12">
                        <h3 class="text-5xl font-semibold leading-normal text-gray-700 dark:text-gray-100 mb-2">
                            {{$project->name}}
                        </h3>
                        <div class="text-md leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
                            <button class="rounded-2xl bg-sky-200 dark:bg-sky-900 px-3 py-1 text-gray-600 dark:text-gray-200 font-semibold">{{$project->category->name}}</button>
                        </div>
                        <div class="mb-2 text-gray-600 dark:text-gray-400 mt-4">
                            última atualização
                        </div>
                        <div class="mb-2 text-gray-600 dark:text-gray-400">
                            {{$project->updated_at}}
                        </div>
                    </div>
                    <div class="mt-10 py-10 border-t border-gray-200 dark:border-gray-700 text-center">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-9/12 px-4">
                                <p class="mb-4 text-lg leading-relaxed text-gray-700 dark:text-gray-100">
                                    {{$project->description}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
