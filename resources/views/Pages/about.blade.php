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
                {{-- <span class="uppercase text-white text-xs font-bold mb-2 block">Samuel Valentin</span> --}}
                <h1 class="text-white font-extrabold text-5xl mb-8">{{__('home.About-title')}}</h1>
                <p class="text-stone-100 text-base">
                    {{__('home.Banner-text')}}
                </p>
                <button href="{{ route('login') }}" class="mt-8 text-white uppercase py-4 text-base font-light px-10 border border-white hover:bg-white hover:bg-opacity-10">Get started</button>
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

    <div>
        <div class="grid grid-cols-2 max-w-screen-lg mx-auto">
            <div class="max-w-md py-4 px-8 bg-sky-950 shadow-lg rounded-lg my-20 flex flex-col">
                <div>
                    <h2 class="text-gray-100 text-3xl font-semibold">Sobre mim</h2>
                    <p class="mt-2 text-gray-100">Formado em Sistemas de Informação pela Universidade Federal do Paraná (UTFPR). Atualmente desempenho atividades no campo do desenvolvimento de sistemas web, empregando o framework Laravel e realizando integrações com chatbots e outras plataformas. Minha trajetória acadêmica e experiência no mercado de trabalho convergiram para o aprimoramento das minhas competências em diversas tecnologias e ferramentas. Para além do meu engajamento presente, mantenho uma motivação intrínseca para explorar e dominar novas tecnologias, visando um contínuo crescimento profissional.</p>
                </div>
            </div>
            <div class="max-w-md py-4 px-8 bg-sky-950 shadow-lg rounded-lg my-20 flex flex-col">
                <h2 class="text-gray-100 text-3xl font-semibold">Conhecimentos</h2>
                <div class="mt-2 text-gray-100">
                    <ul>
                        <li>Conhecimento em linguagens de programação como C, C++, JAVA, JavaScript e Python.</li>
                        <li>Especialidade em PHP/Laravel.</li>
                        <li>Experiência em Banco de Dados MySQL e PostgreSQL.</li>
                        <li>Experiência em API RESTful.</li>
                        <li>Experiência em documentação Swagger.</li>
                        <li>Experiência em testes utilizando PHPUnit.</li>
                        <li>Experiência em Docker.</li>
                        <li>Experiência em front-end com HTML, CSS, framework Tailwind e Vue.js.</li>
                        <li>Experiência em métodos ágeis como Scrum.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 max-w-screen-lg mx-auto">
            <div class="max-w-md py-4 px-8 bg-sky-950 shadow-lg rounded-lg my-20 flex flex-col">
                <h2 class="text-gray-100 text-3xl font-semibold">Carreira</h2>
                <div class="mt-2 text-gray-100">
                    <strong>Desenvolvedor Laravel | PHP</strong> <br>
                    <strong>Mobou</strong> <br>
                    <span class="text-gray-400 whitespace-nowrap text-sm">Desde junho de 2020</span> <br>
                    Responsável por desenvolver e administrar sistemas web baseados em Laravel, com integrações de chatbots, além de interagir com clientes e equipes de desenvolvimento.
                    <br>
                    <strong>HIPE Innovation Center</strong> <br>
                    <span class="text-gray-400 whitespace-nowrap text-sm">Desde setembro de 2023</span> <br>
                    Responsável por desenvolver, junto com a equipe, um sistema em Laravel, criando novos módulos e refatorando módulos antigos do sistema legado em Java
                </div>
            </div>
            <div class="max-w-md py-4 px-8 bg-sky-950 shadow-lg rounded-lg my-20 flex flex-col">
                <h2 class="text-gray-100 text-3xl font-semibold">Estudos</h2>
                <p class="mt-2 text-gray-100 text-lg">Universidade Tecnológica Federal do Paraná | Bacharelado em Sistemas de informação </p>
                <span class="text-gray-400 whitespace-nowrap text-sm">Março de 2018 - Junho de 2023</span>
                <p><strong> TCC: "CASE STUDY: APPLICATION EXAMPLE OF ANONYMIZATION IN A PUBLIC ENTERPRISE BASED ON LGPD. </strong>"</p>
            </div>
        </div>
    </div>
@endsection
