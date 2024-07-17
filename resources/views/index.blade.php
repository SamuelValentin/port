@extends('layout.main')
@section('content')
    <div class="w-screen h-screen overflow-hidden relative before:block before:absolute before:bg-black before:h-full before:w-full before:top-0 before:left-0 before:z-10 before:opacity-30">
        <img src="images/pexels-rpnickson-2647990.jpg" class="absolute top-0 left-0 min-h-full ob" alt="">
        <div class="relative z-20 max-w-screen-lg mx-auto grid grid-cols-12 h-full items-center">
            <div class="col-span-6">
                {{-- <span class="uppercase text-white text-xs font-bold mb-2 block">Samuel Valentin</span> --}}
                <h1 class="text-white font-extrabold text-5xl mb-8">Criando Ideias</h1>
                <p class="text-stone-100 text-base">
                    Construindo o futuro da web, uma linha de código por vez, mantendo-se atualizado com as tendências e inovações do mercado
                </p>
                <button class="mt-8 text-white uppercase py-4 text-base font-light px-10 border border-white hover:bg-white hover:bg-opacity-10">Get started</button>
            </div>
        </div>
    </div>

    <div class="bg-slate-10 py-20">
        <div class="max-w-screen-lg mx-auto flex justify-between items-center">
            <div class="max-w-xl">
                <h2 class="font-black text-sky-50 text-3xl mb-4">Qual o objetivo desta página</h2>
                <p class="text-base text-sky-50">Com as constantes mudanças do mercado de trabalho, é importante estar sempre atualizado e por dentro nas novas tecnologias. Sendo assim, como um meio de demonstrar as minhas capacidades e também praticar, tive a ideia de criar esta pagina. Assim, fica claro o que eu posso fazer</p>
            </div>
            <div class="w-full flex flex-col items-end pr-16">
                <div class="h-full mt-auto overflow-hidden relative">
                    <img src="https://picsum.photos/800/600" class="h-full w-full object-contain" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-lg mx-auto my-10 bg-white rounded-lg shadow-md p-5">
        <img class="w-32 h-32 rounded-full mx-auto" src="images/profiler.jpg" alt="Profile picture">
        <h2 class="text-center text-2xl font-semibold mt-3">Samuel Valentin</h2>
        <p class="text-center text-gray-600 mt-1">Desenvolvedor Web Fullstack</p>
        <div class="flex justify-center mt-5">
            <a href="#" class="text-blue-500 hover:text-blue-700 mx-3">Twitter</a>
            <a href="#" class="text-blue-500 hover:text-blue-700 mx-3">LinkedIn</a>
            <a href="#" class="text-blue-500 hover:text-blue-700 mx-3">GitHub</a>
        </div>
        <div class="mt-5">
            <h3 class="text-xl font-semibold">Bio</h3>
            <p class="text-gray-600 mt-2">Samuel é um desenvolvedor de sistemas web, full-stack, formas em sistemas de informação pela UTFPR, 25 anos e casado.</p>
        </div>
    </div>

    <div class="py-12 relative overflow-hidden bg-gray-900">
        <div class="grid grid-cols-2 max-w-screen-lg mx-auto">
            <div class="w-full flex flex-col items-end pr-16">
                <h2 class="text-[#64618C] font-bold text-2xl max-w-xs text-right mb-12 mt-10">Whether you need Assistance</h2>
                <div class="h-full mt-auto overflow-hidden relative">
                    <img src="https://picsum.photos/800/600" class="h-full w-full object-contain" alt="">
                </div>
            </div>

            <div class="py-20 bg-slate-100 relative before:absolute before:h-full before:w-screen before:bg-sky-950 before:top-0 before:left-0">
                <div class="relative z-20 pl-12">
                    <h2 class="text-[#f7d0b6] font-black text-5xl leading-snug mb-10">Entre em contato</h2>
                    <p class="text-white text-sm">
                    Purus in massa tempor nec. Magna etiam tempor orci eu lobortis elementum nibh tellus molestie. Faucibus ornare suspendisse sed nisi lacus sed viverra. Diam in arcu cursus euismod quis viverra nibh cras pulvinar.
                    </p>
                <button class="mt-8 text-white uppercase py-3 text-sm px-10 border border-white hover:bg-white hover:bg-opacity-10">Talk with expert</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Experiencias e Trabalhos --}}
    <section class="text-gray-200 body-font border-t border-gray-500">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:pl-12 text-center">
                <div class="flex flex-col mb-10 items-center">
                    <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5">
                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M24 21h-3l1-3h1l1 3zm-12.976-4.543l8.976-4.575v6.118c-1.007 2.041-5.607 3-8.5 3-3.175 0-7.389-.994-8.5-3v-6.614l8.024 5.071zm11.976.543h-1v-7.26l-10.923 5.568-11.077-7 12-5.308 11 6.231v7.769z"/></svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-300 text-lg title-font font-medium mb-1">Trajetória Acadêmica - UTFPR</h2>
                        <p class="text-sm text-gray-400 mb-2">2018 - 2023</p>
                        <p class="leading-relaxed text-base mb-1">Durante minha graduação pude aprender os conceitos da programação praticamente do zero. Neste periodo lidei com programação basico, Orientação a Objetos, Banco de Dados, Analise de algoritmos, processamento de imagens, sistemas distribuidos, gestão de projetos, comportamento humano, Linguagem C, C++, Java, Python e php</p>
                        <p class="text-sm text-gray-400 mb-1">Meu TCC</p>
                        <p class="leading-relaxed text-base">Durante a escolha de temas para realizar meu tcc, algo que sempre me chamou a atenção foi na segurança de dados, e um tema muito atual ali no ano de 2022 era a LGPD. Assim, foram alguns meses de pesquisa no tema até chegar no recorte final resumido no titulo:  <strong>"Estudo de caso: exemplo de aplicação da anonimização em uma empresa pública baseado na LGPD"</strong>.</p>
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
                        <p class="text-sm text-gray-400 mb-2">2020 - atualmente</p>
                        <p class="leading-relaxed text-base">Durante a pandemia no ano de 2020, começamos este projeto com o objetivo de construir plataformas que integrassem chatbots com web. Aqui trabalhamos com o Laravel para construir a plataforma, mas utilizamos tecnlogias com dialog flow, typebo e outros para integras agentes inteligentes que pudessem ser integrados em nossas plataformas. Assim, conseguimos automatizar e auxiliar nossos cliente no mundo digital.</p>
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
                        <p class="text-sm text-gray-400 mb-2">2023 - atualmente</p>
                        <p class="leading-relaxed text-base">No segundo semestre de 2023, entrei nessa empresa como desenvolvedor Web e pude auxiliar em projetos com meus conhecimentos de programação usando Laravel. Aqui pude desenvolver ainda mais meus conhecimentos em Php, PhpUnit, Docker, Blade e javascript, além de aprender coisas novas como criação de macro para etiquetas CPCL e ZPL, gerenciamento de E-mails no laravel e Vue.js.</p>
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

    {{-- contato --------------------}}
    <session class="my-6">
        <div class="grid sm:grid-cols-2 items-center mb-8 gap-16 p-8 mx-auto max-w-4xl bg-gray-800 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] rounded-md text-gray-100 font-[sans-serif]">
            <div>
                <h1 class="text-3xl font-extrabold">Entre em contato</h1>
                <p class="text-sm text-gray-400 mt-3">Envie suas informações ou entre em contato e retornaremos assim que possivel.</p>
                <div class="mt-12">
                    <h2 class="text-lg font-extrabold">Email</h2>
                    <ul class="mt-3">
                        <li class="flex items-center">
                            <div class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M22.288 21h-20.576c-.945 0-1.712-.767-1.712-1.712v-13.576c0-.945.767-1.712 1.712-1.712h20.576c.945 0 1.712.767 1.712 1.712v13.576c0 .945-.767 1.712-1.712 1.712zm-10.288-6.086l-9.342-6.483-.02 11.569h18.684v-11.569l-9.322 6.483zm8.869-9.914h-17.789l8.92 6.229s6.252-4.406 8.869-6.229z"/></svg>
                            </div>
                            <a target="blank" href="#" class="text-gray-400 text-sm ml-3">
                                <small class="block">Mail</small>
                                <strong>https://gmail.com</strong>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="mt-12">
                    <h2 class="text-lg font-extrabold">Socials</h2>
                    <ul class="flex mt-3 space-x-4">
                        <li class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                            <a href="javascript:void(0)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </a>
                        </li>
                        <li class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                            <a href="javascript:void(0)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M14.829 6.302c-.738-.034-.96-.04-2.829-.04s-2.09.007-2.828.04c-1.899.087-2.783.986-2.87 2.87-.033.738-.041.959-.041 2.828s.008 2.09.041 2.829c.087 1.879.967 2.783 2.87 2.87.737.033.959.041 2.828.041 1.87 0 2.091-.007 2.829-.041 1.899-.086 2.782-.988 2.87-2.87.033-.738.04-.96.04-2.829s-.007-2.09-.04-2.828c-.088-1.883-.973-2.783-2.87-2.87zm-2.829 9.293c-1.985 0-3.595-1.609-3.595-3.595 0-1.985 1.61-3.594 3.595-3.594s3.595 1.609 3.595 3.594c0 1.985-1.61 3.595-3.595 3.595zm3.737-6.491c-.464 0-.84-.376-.84-.84 0-.464.376-.84.84-.84.464 0 .84.376.84.84 0 .463-.376.84-.84.84zm-1.404 2.896c0 1.289-1.045 2.333-2.333 2.333s-2.333-1.044-2.333-2.333c0-1.289 1.045-2.333 2.333-2.333s2.333 1.044 2.333 2.333zm-2.333-12c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.958 14.886c-.115 2.545-1.532 3.955-4.071 4.072-.747.034-.986.042-2.887.042s-2.139-.008-2.886-.042c-2.544-.117-3.955-1.529-4.072-4.072-.034-.746-.042-.985-.042-2.886 0-1.901.008-2.139.042-2.886.117-2.544 1.529-3.955 4.072-4.071.747-.035.985-.043 2.886-.043s2.14.008 2.887.043c2.545.117 3.957 1.532 4.071 4.071.034.747.042.985.042 2.886 0 1.901-.008 2.14-.042 2.886z"/></svg>
                            </a>
                        </li>
                        <li class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                            <a href="javascript:void(0)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <form class="ml-auo space-y-4">
                <input type='text' placeholder='Nome'
                    class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#007bff]" />
                <input type='email' placeholder='E-mail'
                    class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#007bff]" />
                <textarea placeholder='Assunto' rows="6"
                    class="w-full rounded-md px-4 border text-sm pt-2.5 outline-[#007bff]"></textarea>
                <button type='button'
                    class="text-white bg-[#007bff] hover:bg-blue-600 font-semibold rounded-md text-sm px-4 py-2.5 w-full">Enviar</button>
            </form>
        </div>
    </session>

@endsection
