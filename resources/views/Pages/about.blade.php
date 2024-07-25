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
        <img src="images/pexels-no-name-14543-66997.jpg" class="absolute top-0 left-0 min-h-full ob" alt="">
        <div class="relative z-20 max-w-screen-lg mx-auto grid grid-cols-12 h-full items-center">
            <div class="col-span-6">
                <h1 class="text-white font-extrabold text-5xl mb-8">{{__('home.About-title')}}</h1>
                <p class="text-stone-100 text-base">
                    {{__('home.Banner-text')}}
                </p>
            </div>
        </div>
    </div>

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
                </div>
            </div>
        </div>
    </div>

    {{-- Curriculo --}}
    <section>
        <div class="grid grid-cols-2 max-w-screen-lg mx-auto">
            <div class="bg-blue-300 w-96 h-96 m-8 static rounded-lg ">
                <div class="bg-sky-950 w-96 h-96 m-0 hover:-m-2 absolute rounded-lg shadow-lg hover:shadow-2xl transition-all duration-150 ease-out hover:ease-in ">
                    <h1 class="m-4 text-2xl font-bold">Sobre mim</h1>
                    <hr class="m-4 rounded-2xl border-t-2">
                    <p class="m-4 text-sm">Formado em Sistemas de Informação pela Universidade Federal do Paraná (UTFPR). Atualmente desempenho atividades no campo do desenvolvimento de sistemas web, empregando o framework Laravel e realizando integrações com chatbots e outras plataformas. Minha trajetória acadêmica e experiência no mercado de trabalho convergiram para o aprimoramento das minhas competências em diversas tecnologias e ferramentas. Para além do meu engajamento presente, mantenho uma motivação intrínseca para explorar e dominar novas tecnologias, visando um contínuo crescimento profissional.</p>
                </div>
            </div>
            <div class="bg-green-300 w-96 h-96 m-8 static rounded-lg ">
                <div class="bg-sky-950 w-96 h-96 m-0 hover:-m-2 absolute rounded-lg shadow-lg hover:shadow-2xl transition-all duration-150 ease-out hover:ease-in ">
                    <h1 class="m-4 text-2xl font-bold">Conhecimentos</h1>
                    <hr class="m-4 rounded-2xl border-t-2">
                    <p class="m-4 text-sm">
                        - Conhecimento em linguagens de programação como C, C++, JAVA, JavaScript e Python.<br>
                        - Especialidade em PHP/Laravel.<br>
                        - Experiência em Banco de Dados MySQL e PostgreSQL.<br>
                        - Experiência em API RESTful.<br>
                        - Experiência em documentação Swagger.<br>
                        - Experiência em testes utilizando PHPUnit.<br>
                        - Experiência em Docker.<br>
                        - Experiência em front-end com HTML, CSS, framework Tailwind e Vue.js.<br>
                        - Experiência em métodos ágeis como Scrum.
                    </p>
                </div>
            </div>
            <div class="bg-red-300 w-96 h-96 m-8 static rounded-lg ">
                <div class="bg-sky-950 w-96 h-96 m-0 hover:-m-2 absolute rounded-lg shadow-lg hover:shadow-2xl transition-all duration-150 ease-out hover:ease-in ">
                    <h1 class="m-4 text-2xl font-bold">Carreira</h1>
                    <hr class="m-4 rounded-2xl border-t-2">
                    <p class="m-4 text-sm"><strong>Desenvolvedor Laravel | PHP</strong> <br>
                        <strong>Mobou</strong> <br>
                        <span class="text-gray-400 whitespace-nowrap text-sm">Desde junho de 2020</span> <br>
                        Responsável por desenvolver e administrar sistemas web baseados em Laravel, com integrações de chatbots, além de interagir com clientes e equipes de desenvolvimento.
                        <br>
                        <strong>HIPE Innovation Center</strong> <br>
                        <span class="text-gray-400 whitespace-nowrap text-sm">Desde setembro de 2023</span> <br>
                        Responsável por desenvolver, junto com a equipe, um sistema em Laravel, criando novos módulos e refatorando módulos antigos do sistema legado em Java</p>
                </div>
            </div>
            <div class="bg-sky-300 w-96 h-96 m-8 static rounded-lg ">
                <div class="bg-sky-950 w-96 h-96 m-0 hover:-m-2 absolute rounded-lg shadow-lg hover:shadow-2xl transition-all duration-150 ease-out hover:ease-in ">
                    <h1 class="m-4 text-2xl font-bold">Estudos</h1>
                    <hr class="m-4 rounded-2xl border-t-2">
                    <p class="m-4 text-sm text-gray-100">
                        Universidade Tecnológica Federal do Paraná | Bacharelado em Sistemas de informação
                        <span class="text-gray-400 whitespace-nowrap text-sm">Março de 2018 - Junho de 2023</span> <br>
                        <strong> TCC: "CASE STUDY: APPLICATION EXAMPLE OF ANONYMIZATION IN A PUBLIC ENTERPRISE BASED ON LGPD. </strong>"
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Experiencias e Trabalhos --}}
    <section class="text-gray-200 body-font border-t border-gray-500">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:pl-12 text-center">
                <div class="flex flex-col mb-10 items-center">
                    <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5">
                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M24 21h-3l1-3h1l1 3zm-12.976-4.543l8.976-4.575v6.118c-1.007 2.041-5.607 3-8.5 3-3.175 0-7.389-.994-8.5-3v-6.614l8.024 5.071zm11.976.543h-1v-7.26l-10.923 5.568-11.077-7 12-5.308 11 6.231v7.769z"/></svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-300 text-lg title-font font-medium mb-1">{{__('home.Experiences-title-1')}}</h2>
                        <p class="text-sm text-gray-400 mb-2">2018 - 2023</p>
                        <p class="leading-relaxed text-base mb-1">{{__('home.Experiences-text-1')}}</p>
                        <p class="text-sm text-gray-400 mb-1">{{__('home.Experiences-sub-title-tcc')}}</p>
                        <p class="leading-relaxed text-base">{{__('home.Experiences-text-tcc')}}:  <strong>"{{__('home.Experiences-title-tcc')}}"</strong>.</p>
                    </div>
                    <div class="flex mt-1">
                        <div class="flex flex-col">
                            <div class="h-full mt-auto overflow-hidden relative">
                                <img alt="python" src="https://img.shields.io/badge/Python-3776AB?style=for-the-badge&logo=python&logoColor=white"/>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="h-full mt-auto overflow-hidden relative">
                                <img alt="opencv" src="https://img.shields.io/badge/OpenCV-27338e?style=for-the-badge&logo=OpenCV&logoColor=white"/>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="h-full mt-auto overflow-hidden relative">
                                <img alt="C" src="https://img.shields.io/badge/C-00599C?style=for-the-badge&logo=c&logoColor=white"/>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="h-full mt-auto overflow-hidden relative">
                                <img alt="C++" src="https://img.shields.io/badge/C%2B%2B-00599C?style=for-the-badge&logo=c%2B%2B&logoColor=white"/>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="h-full mt-auto overflow-hidden relative">
                                <img alt="Java" src="https://img.shields.io/badge/Java-ED8B00?style=for-the-badge&logo=java&logoColor=white"/>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="h-full mt-auto overflow-hidden relative">
                                <img alt="HTML" src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white"/>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="h-full mt-auto overflow-hidden relative">
                                <img alt="CSS" src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col mb-10 items-center">
                    <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5">
                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M22.5 7c.828 0 1.5.672 1.5 1.5v14c0 .826-.671 1.5-1.5 1.5h-7c-.829 0-1.5-.675-1.5-1.5v-14c0-.827.673-1.5 1.5-1.5h7zm-8.907 17h-9.593l2.599-3h6.401v1.804c0 .579.336 1.09.593 1.196zm5.407-1c-.553 0-1-.448-1-1s.447-1 1-1c.552 0 .999.448.999 1s-.447 1-.999 1zm4-3v-10.024h-8v10.024h8zm-1-14h-2v-4h-18v15h11v2h-13v-19h22v6zm-2.5 3c.275 0 .5-.224.5-.5s-.225-.5-.5-.5h-1c-.276 0-.5.224-.5.5s.224.5.5.5h1z"/></svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-300 text-lg title-font font-medium mb-1">Mobou</h2>
                        <p class="text-sm text-gray-400 mb-2">2020 - {{__('home.Atualmente')}}</p>
                        <p class="leading-relaxed text-base">{{__('home.Experiences-text-2')}}</p>
                    </div>
                    <div class="flex mt-1">
                        <div class="flex flex-col">
                            <div class="h-full mt-auto overflow-hidden relative">
                                <img alt="Laravel" src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white"/>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="h-full mt-auto overflow-hidden relative">
                                <img alt="Tailwind" src="https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white"/>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="h-full mt-auto overflow-hidden relative">
                                <img alt="php" src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"/>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="h-full mt-auto overflow-hidden relative">
                                <img alt="python" src="https://img.shields.io/badge/Python-3776AB?style=for-the-badge&logo=python&logoColor=white"/>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="h-full mt-auto overflow-hidden relative">
                                <img alt="Docker" src="https://img.shields.io/badge/Docker-2496ED?style=for-the-badge&logo=docker&logoColor=white"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col mb-10 items-center">
                    <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8.566 17.842c-.945 2.462-3.678 4.012-6.563 4.161.139-2.772 1.684-5.608 4.209-6.563l.51.521c-1.534 1.523-2.061 2.765-2.144 3.461.704-.085 2.006-.608 3.483-2.096l.505.516zm-1.136-11.342c-1.778-.01-4.062.911-5.766 2.614-.65.649-1.222 1.408-1.664 2.258 1.538-1.163 3.228-1.485 5.147-.408.566-1.494 1.32-3.014 2.283-4.464zm5.204 17.5c.852-.44 1.61-1.013 2.261-1.664 1.708-1.706 2.622-4.001 2.604-5.782-1.575 1.03-3.125 1.772-4.466 2.296 1.077 1.92.764 3.614-.399 5.15zm11.312-23.956c-.428-.03-.848-.044-1.261-.044-9.338 0-14.465 7.426-16.101 13.009l4.428 4.428c5.78-1.855 12.988-6.777 12.988-15.993v-.059c-.002-.437-.019-.884-.054-1.341zm-5.946 7.956c-1.105 0-2-.895-2-2s.895-2 2-2 2 .895 2 2-.895 2-2 2z"/></svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-300 text-lg title-font font-medium mb-1">Hipe Innovation Center</h2>
                        <p class="text-sm text-gray-400 mb-2">2023 - {{__('home.Atualmente')}}</p>
                        <p class="leading-relaxed text-base">{{__('home.Experiences-text-3')}}</p>
                        {{-- <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                        </a> --}}
                    </div>
                    <div class="flex mt-1">
                        <div class="flex flex-col">
                            <div class="h-full mt-auto overflow-hidden relative">
                                <img alt="Laravel" src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white"/>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="h-full mt-auto overflow-hidden relative">
                                <img alt="Tailwind" src="https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white"/>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="h-full mt-auto overflow-hidden relative">
                                <img alt="php" src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"/>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="h-full mt-auto overflow-hidden relative">
                                <img alt="Docker" src="https://img.shields.io/badge/Docker-2496ED?style=for-the-badge&logo=docker&logoColor=white"/>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="h-full mt-auto overflow-hidden relative">
                                <img alt="vue.js" src="https://img.shields.io/badge/Vue.js-35495E?style=for-the-badge&logo=vuedotjs&logoColor=4FC08D"/>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="h-full mt-auto overflow-hidden relative">
                                <img alt="vue.js" src="https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white"/>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="h-full mt-auto overflow-hidden relative">
                                <img alt="vue.js" src="https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white"/>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="h-full mt-auto overflow-hidden relative">
                                <img alt="vue.js" src="https://img.shields.io/badge/Git-F05032?style=for-the-badge&logo=git&logoColor=white"/>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="h-full mt-auto overflow-hidden relative">
                                <img alt="vue.js" src="https://img.shields.io/badge/Postman-FF6C37?style=for-the-badge&logo=Postman&logoColor=white"/>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="h-full mt-auto overflow-hidden relative">
                                <img alt="pgl" src="https://img.shields.io/badge/PostgreSQL-316192?style=for-the-badge&logo=postgresql&logoColor=white"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
