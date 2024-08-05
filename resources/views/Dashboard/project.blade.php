<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="flex-auto block py-8 pt-6 px-9">
                <div class="mb-5 flex items-center justify-between">
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        Projetos cadastrados
                    </h2>
                    <div class="flex space-x-3">
                        <a href="{{ route('projects.add') }}">
                            <button class="middle none center rounded-lg bg-[#6A64F1] dark:bg-[#463fc2] py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                Adicionar
                            </button>
                        </a>
                        @if (request()->routeIs('dashboard'))
                            <a href="{{ route('projects') }}">
                                <button class="linear rounded-[20px] bg-lightPrimary px-4 py-2 text-base font-medium text-brand-500 transition duration-200 hover:bg-gray-100 active:bg-gray-200 dark:bg-white/5 dark:text-white dark:hover:bg-white/10 dark:active:bg-white/20">
                                    See all
                                </button>
                            </a>
                        @endif
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full my-0 align-middle text-dark border-neutral-400 dark:text-white">
                        <thead class="align-bottom">
                            <tr class="font-semibold text-[0.95rem] text-secondary-dark">
                                <th class="pb-3 text-start min-w-[100px]">Name</th>
                                <th class="pb-3 text-start min-w-[175px]">Description</th>
                                <th class="pb-3 text-start min-w-[100px]">Category</th>
                                <th class="pb-3 text-end min-w-[50px]">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $item)
                                <tr class="border-b border-dashed last:border-b-0">
                                    <td class="p-3 pl-0">
                                        <div class="flex items-center">
                                            {{-- <div class="relative inline-block shrink-0 rounded-2xl me-3">
                                                <img src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/riva-dashboard-tailwind/img/img-40-new.jpg" class="w-[50px] h-[50px] inline-block shrink-0 rounded-2xl" alt="">
                                            </div> --}}
                                            <div class="flex flex-col justify-start">
                                                <a href="javascript:void(0)" class="mb-1 font-semibold transition-colors duration-200 ease-in-out text-lg/normal text-secondary-inverse hover:text-primary"> {{$item->name}} </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-3 pr-12 text-start">
                                        <span class="align-baseline inline-flex px-4 py-3 mr-auto font-semibold text-[.95rem] leading-none text-primary bg-primary-light rounded-lg">
                                            {{ $item->short_description }}
                                        </span>
                                    </td>
                                    <td class="p-3 pr-0 text-start">
                                        <span class="font-semibold text-light-inverse text-md/normal">{{$item->category->name}}</span>
                                    </td>
                                    <td class="p-3 pr-0 text-end">
                                        <a href="{{ route('projects.editar', $item->id) }}">
                                            <button class="ml-auto relative text-secondary-dark bg-light-dark hover:text-primary flex items-center h-[25px] w-[25px] text-base font-medium leading-normal text-center align-middle cursor-pointer rounded-2xl transition-colors duration-200 ease-in-out shadow-none border-0 justify-center">
                                                <span class="flex items-center justify-center p-0 m-0 leading-none shrink-0 ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                    </svg>
                                                </span>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
