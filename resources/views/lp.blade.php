<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Adicione um estilo básico para esconder elementos -->
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    <title>{{ config('app.name', 'soulroom - sua inteligência devocional') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Merriweather:wght@300;400;700;900&display=swap"
        rel="stylesheet">

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-white  text-soul-dark">
        <!-- Header -->
        <header class="fixed w-full z-50 bg-[#F4EAF5] ">
            <div class="container mx-auto px-4 py-4 flex justify-between items-center">
                <h1 class="text-2xl">
                    <img src="{{ asset('images/logo-soulroom.png') }}" alt="SoulRoom Logo" class="w-48">
                </h1>
                <nav x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="md:hidden block text-primary-color">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                    <ul :class="open ? 'block' : 'hidden'"
                        class="absolute right-0 bg-[#F4EAF5] rounded-md shadow-md md:rounded-none md:shadow-none md:flex md:space-x-4 md:static">
                        <li><a href="#about" class="text-black hover:text-slate-600 hover:text-accent-color px-2 py-2 block">sobre</a></li>
                        <li><a href="#features" class="text-black hover:text-slate-600 hover:text-accent-color px-2 py-2 block">funcionalidades</a></li>
                        <li><a href="#plans" class="text-black hover:text-slate-600 hover:text-accent-color px-2 py-2 block">planos</a></li>
                        <li><a href="#contact" class="text-black hover:text-slate-600 hover:text-accent-color px-2 py-2 block">contato</a>
                        </li>
                        <li><a href="#plans"
                            class=" bg-gray-500 sm:bg-soul-purple text-soul-purple sm:text-white px-4 py-2 rounded-md inline-block text-md font-semibold hover:bg-gray-700 transition-colors duration-300">
                            Entre na Lista de Espera
                        </a></li>
                        {{-- <li><a href="/login"
                                class="text-black font-bold hover:text-accent-color md:ml-12 px-4 py-2 block">login</a>
                        </li>
                        <li><a href="/register"
                                class="text-black font-bold hover:text-accent-color px-4 py-2 block">registrar</a></li> --}}
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <!-- Hero Section -->
            <section class="relative w-full h-screen overflow-hidden">
                <div class="absolute inset-0 w-screen h-screen bg-cover bg-center z-0"
                    style="background-image: url('{{ asset('images/bg-lp.png') }}');">
                </div>

                <div class="relative z-10 container mx-auto h-full px-4 flex flex-col justify-end pb-32">
                    <div class="max-w-3xl ml-auto"> <!-- Adicionado ml-auto aqui -->
                        <div class="text-right"> <!-- Adicionado div com text-right -->
                            <h2 class="text-2xl md:text-5xl font-semibold md:font-bold text-gray-800">todo dia um
                                sussurro divino</h2>
                            <p class="text-sm md:text-2xl text-gray-700 mb-8">explore devocionais feitas só para você
                            </p>
                            {{-- <div> <!-- Wrapper para o botão -->
                                <a href="#plans"
                                    class="bg-gray-800 text-white px-6 py-3 rounded-md inline-block text-lg font-semibold hover:bg-gray-700 transition-colors duration-300">
                                    Entre na Lista de Espera
                                </a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </section>

            <!-- About Section -->
            <section id="about" class="py-12 min-h-screen bg-gradient-to-b from-[#f4f1ea] to-white"
                style="padding-top: calc(3.5rem + 1rem);">
                <div class="container mx-auto max-w-7xl">
                    <h2 class="text-2xl md:text-4xl font-bold text-gray-800 mb-12  px-4 md:px-0">soulroom</h2>

                    <div class="space-y-8 text-gray-700 max-w-lg px-4 md:px-0">
                        <div>
                            <p class="text-md md:text-lg">
                                Na SoulRoom, entendemos que <span class="font-semibold">você é um ser único</span>, com
                                seus próprios desafios e momentos.
                                Em um mundo onde as <span class="font-semibold">conexões são efêmeras</span> e a
                                espiritualidade se torna um refúgio vital, nós
                                oferecemos mais que uma plataforma: <span class="font-semibold">criamos um ambiente para
                                    a cura, a reflexão e a
                                    transformação interior</span>.
                            </p>
                        </div>

                        <div>
                            <p class="text-md md:text-lg">
                                Aqui, <span class="font-semibold">cada passo da sua jornada espiritual</span> é
                                cuidadosamente moldado para que a Palavra
                                de Deus ecoe com clareza em sua vida. Nas
                                dúvidas, <span class="font-semibold">trazemos esperança</span>; no silêncio, a
                                <span class="font-semibold">promessa divina</span>.
                            </p>
                        </div>

                        <div>
                            <p class="text-md md:text-lg">
                                Nosso propósito é: trazer ordem ao caos, luz aos
                                dias sombrios e <span class="font-semibold">criar um espaço para sua fé
                                    florescer, refletindo quem você realmente é</span>.
                            </p>
                        </div>

                        <div>
                            <p class="text-md md:text-lg">
                                <span class="font-semibold">Para você que não se satisfaz com o superficial
                                    e busca profundidade</span>: SoulRoom é sua pausa,
                                seu respiro, seu caminho com propósito.
                            </p>
                        </div>

                        <div>
                            <p class="text-md md:text-lg font-semibold">
                                SoulRoom: a sua inteligência devocional.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <div id="features" class="bg-[#F5F3EC] py-12">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h2 class="text-3xl text-gray-900 mb-12">devocionais <strong>soulroom</strong></h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-28 px-8 md:px-24">
                        <div class="bg-[#F9F6ED] shadow-md rounded-3xl p-6 border border-purple-200">
                            <div class="text-gray-600 text-6xl mt-4 mb-4">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <h3 class="text-xl text-gray-800 mb-4">devocional <strong>do dia</strong></h3>
                            <p class="text-gray-600 text-lg">Mensagem diária inspirada para guiar seu dia.</p>
                        </div>
                        <div class="bg-[#F9F6ED] shadow-md rounded-3xl p-6 border border-purple-200">
                            <div class="text-gray-600 text-6xl mt-4 mb-4">
                                <i class="fas fa-user-circle"></i>
                            </div>
                            <h3 class="text-xl text-gray-800 mb-4"><strong>sua</strong> devocional</strong></h3>
                            <p class="text-gray-600 text-lg">Devocionais personalizadas ao momento.</p>
                        </div>
                        <div class="bg-[#F9F6ED] shadow-md rounded-3xl p-6 border border-purple-200">
                            <div class="text-gray-600 text-6xl mt-4 mb-4">
                                <i class="fas fa-book"></i>
                            </div>
                            <h3 class="text-xl text-gray-800 mb-4"><strong>estudo</strong> devocional</strong></h3>
                            <p class="text-gray-600 text-lg">Aprofunde-se na Palavra com estudos detalhados.</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <!-- Testimonials Section -->
            <section id="testimonials" class="py-12 bg-background-color">
                <h3 class="text-2xl font-semibold text-text-color mb-6 text-center">O que nossos usuários dizem?</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-card-background shadow rounded-md p-6">
                        <p class="text-secondary-color italic">"O SoulRoom transformou minha rotina de devocionais. É
                            incrível como o conteúdo é relevante e inspirador!"</p>
                        <p class="text-text-color font-semibold mt-4">- Ana Oliveira</p>
                    </div>
                    <div class="bg-card-background shadow rounded-md p-6">
                        <p class="text-secondary-color italic">"Adoro como posso personalizar minhas devocionais com
                            base no meu humor e necessidades espirituais."</p>
                        <p class="text-text-color font-semibold mt-4">- João Santos</p>
                    </div>
                </div>
            </section> --}}

            <!-- Plans Section -->
            <section id="plans" class="py-12 px-4 sm:px12 bg-[#f4flea]">
                <h3 class="text-3xl text-text-color mb-12 text-center">escolha o plano <strong>ideal para você</strong></h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:px-48">
                    {{-- <div class="bg-card-background shadow-lg rounded-md p-6 text-center bg-gradient-to-b from-[#d4a373]/10 to-[#d4a373]/20 flex flex-col justify-between">
                        <div class="flex-grow">
                            <h4 class="text-xl font-bold text-text-color mb-8">trial</h4>
                            <p class="text-secondary-color text-sm mb-4">Experimente 21 dias gratuitos do Plano Essencial e comece sua transformação de vida com devocionais diárias.</p>
                            <p class="text-text-color text-sm font-semibold mb-6">Perfeito para iniciantes em devocionais que buscam estabelecer uma rotina espiritual enriquecedora.</p>
                            <p class="text-text-color text-xs mb-6">Acesso total ao Plano Essencial por 21 dias de modo gratuito.</p>
                            <p class="text-text-color text-xs mb-6">até 1 consulta por dia</p>
                        </div>
                        <p class="bg-[#a8bfb2] text-white px-6 py-3 rounded-md inline-block text-lg font-semibold hover:bg-gray-700 transition-colors duration-300">GRATUITO</p>
                    </div> --}}
                    <div class="bg-card-background shadow-lg rounded-3xl p-6 text-center bg-gradient-to-b from-[#d4a373]/10 to-[#d4a373]/20 flex flex-col justify-between border-purple-100 border">
                        <div class="flex-grow text-left">
                            <h4 class="text-lg font-medium text-soul-card_dark/50 mb-4">essencial</h4>
                            <p class="text-soul-dark text-4xl font-semibold">Trial</p>
                            <p class="text-soul-card_dark/50 text-xs mb-6">depois de 21 dias, R$ 19,90 mensal</p>
                            {{-- <p class="bg-[#a8bfb2] text-white px-6 py-3 rounded-md inline-block text-lg font-semibold hover:bg-gray-700 transition-colors duration-300">R$ 19,90 mensal</p> --}}
                            <p class="text-secondary-color text-sm mb-4">Acesse diariamente textos devocionais cuidadosamente selecionadas para enriquecer seu dia com a Palavra.</p>
                            {{-- <p class="text-text-color text-sm font-semibold mb-6">Ideal para quem busca inspiração constante e apoio bíblico no dia a dia.</p> --}}
                            {{-- <p class="text-text-color text-xs mb-6">Uma nova devocional inspiradora disponibilizada todos os dias.</p> --}}

                        </div>
                        <p class="text-soul-card_dark/50 text-xs mb-6 text-left">até 1 consulta por dia</p>
                        {{-- <p class="bg-[#a8bfb2] text-white px-6 py-3 rounded-md inline-block text-lg font-semibold hover:bg-gray-700 transition-colors duration-300">Assinar</p> --}}
                        <p class=" bg-slate-400 text-white px-6 py-3 rounded-md inline-block text-lg font-semibold">Em breve</p>
                    </div>
                    <div class="bg-card-background shadow-lg rounded-3xl p-6 text-center bg-gradient-to-b from-[#d4a373]/10 to-[#d4a373]/20 flex flex-col justify-between border-purple-100 border">
                        <div class="flex-grow text-left">
                            <h4 class="text-lg font-medium text-soul-card_dark/50 mb-4">vital</h4>
                            <p class="text-soul-dark text-4xl font-semibold">R$ 29,90</p>
                            <p class="text-soul-card_dark/50 text-xs mb-6">mensal</p>
                            {{-- <p class="bg-[#a8bfb2] text-white px-6 py-3 rounded-md inline-block text-lg font-semibold hover:bg-gray-700 transition-colors duration-300">R$ 19,90 mensal</p> --}}
                            <p class="text-secondary-color text-sm mb-4">Devocionais que se adaptam ao seu estado emocional e espiritual, refletindo a sua jornada pessoal.</p>
                            {{-- <p class="text-text-color text-sm font-semibold mb-6">Ideal para quem busca inspiração constante e apoio bíblico no dia a dia.</p> --}}
                            {{-- <p class="text-text-color text-xs mb-6">Uma nova devocional inspiradora disponibilizada todos os dias.</p> --}}

                        </div>
                        <p class="text-soul-card_dark/50 text-xs mb-6 text-left">até 5 consultas por dia</p>
                        {{-- <p class="bg-[#a8bfb2] text-white px-6 py-3 rounded-md inline-block text-lg font-semibold hover:bg-gray-700 transition-colors duration-300">Assinar</p> --}}
                        <p class=" bg-slate-400 text-white px-6 py-3 rounded-md inline-block text-lg font-semibold">Em breve</p>
                    </div>
                    <div class="bg-card-background shadow-lg rounded-3xl p-6 text-center bg-gradient-to-b from-[#d4a373]/10 to-[#d4a373]/20 flex flex-col justify-between border-purple-100 border">
                        <div class="flex-grow text-left">
                            <h4 class="text-lg font-medium text-soul-card_dark/50 mb-4">pleno</h4>
                            <p class="text-soul-dark text-4xl font-semibold">R$ 39,90</p>
                            <p class="text-soul-card_dark/50 text-xs mb-6">mensal</p>
                            {{-- <p class="bg-[#a8bfb2] text-white px-6 py-3 rounded-md inline-block text-lg font-semibold hover:bg-gray-700 transition-colors duration-300">R$ 19,90 mensal</p> --}}
                            <p class="text-secondary-color text-sm mb-4">Uma experiência completa com inspiração diária, personalização detalhada e estudos aprofundados da Palavra.</p>
                            {{-- <p class="text-text-color text-sm font-semibold mb-6">Ideal para quem busca inspiração constante e apoio bíblico no dia a dia.</p> --}}
                            {{-- <p class="text-text-color text-xs mb-6">Uma nova devocional inspiradora disponibilizada todos os dias.</p> --}}

                        </div>
                        <p class="text-soul-card_dark/50 text-xs mb-6 text-left">até 10 consultas por dia</p>
                        {{-- <p class="bg-[#a8bfb2] text-white px-6 py-3 rounded-md inline-block text-lg font-semibold hover:bg-gray-700 transition-colors duration-300">Assinar</p> --}}
                        <p class=" bg-slate-400 text-white px-6 py-3 rounded-md inline-block text-lg font-semibold">Em breve</p>
                    </div>
                    {{-- <div class="bg-card-background shadow-lg rounded-md p-6 text-center bg-gradient-to-b from-[#d4a373]/10 to-[#d4a373]/20 flex flex-col justify-between">
                        <div class="flex-grow">
                            <h4 class="text-xl font-bold text-text-color mb-8">vital</h4>
                            <p class="text-secondary-color text-sm mb-4">Devocionais que se adaptam ao seu estado emocional e espiritual, refletindo a sua jornada pessoal.</p>
                            <p class="text-text-color text-sm font-semibold mb-6">Indicado para aqueles que procuram uma devocional personalizada que se adapta a cada momento da vida.</p>
                            <p class="text-text-color text-xs mb-6">Acesso ao Plano Essencial + devocionais personalizadas para o seu momento.</p>
                            <p class="text-text-color text-xs mb-6">até 5 consultas por dia</p>
                        </div>
                        <p class="bg-[#a8bfb2] text-white px-6 py-3 rounded-md inline-block text-lg font-semibold hover:bg-gray-700 transition-colors duration-300">R$ 29,90 mensal</p>
                    </div>
                    <div class="bg-card-background shadow-lg rounded-md p-6 text-center bg-gradient-to-b from-[#d4a373]/10 to-[#d4a373]/20 flex flex-col justify-between">
                        <div class="flex-grow">
                            <h4 class="text-xl font-bold text-text-color mb-8">pleno</h4>
                            <p class="text-secondary-color text-sm mb-4">Uma experiência completa com inspiração diária, personalização detalhada e estudos aprofundados da Palavra.</p>
                            <p class="text-text-color text-sm font-semibold mb-6">Feito para quem deseja mergulhar profundamente nos mistérios da fé e da escritura.</p>
                            <p class="text-text-color text-xs mb-6">Inclui todos os benefícios do Plano Vital + estudos bíblicos detalhados.</p>
                            <p class="text-text-color text-xs mb-6">até 10 consultas por dia</p>
                        </div>
                        <p class="bg-[#a8bfb2] text-white px-6 py-3 rounded-md inline-block text-lg font-semibold hover:bg-gray-700 transition-colors duration-300">R$ 39,90 mensal</p>
                    </div> --}}
                    {{-- <div class="bg-card-background shadow-lg rounded-md p-6 text-center bg-gradient-to-b from-[#d4a373]/10 to-[#d4a373]/20 flex flex-col justify-between">
                        <div class="flex-grow">
                            <h4 class="text-xl font-bold text-text-color mb-8">ilimitado</h4>
                            <p class="text-secondary-color text-sm mb-4">Acesso ilimitado a todas as funcionalidades da SoulRoom, para uma imersão sem fronteiras no estudo e na prática devocional.</p>
                            <p class="text-text-color text-sm font-semibold mb-6">Para quem busca explorar ao máximo o conhecimento e a sabedoria das escrituras, sem limites.</p>
                            <p class="text-text-color text-xs mb-6">Desfrute de acesso irrestrito a todos os planos e funcionalidades da plataforma.</p>
                            <p class="text-text-color text-xs mb-6">Ilimitado</p>
                        </div>
                        <p class="bg-[#a8bfb2] text-white px-6 py-3 rounded-md inline-block text-lg font-semibold hover:bg-gray-700 transition-colors duration-300">R$ 89,90 mensal</p>
                    </div> --}}
                </div>
            </section>

            <!-- FAQs Section -->
            <section id="faqs" class="py-12 bg-background-color">
                <h3 class="text-2xl font-semibold text-text-color mb-6 text-center">Perguntas Frequentes</h3>
                <div class="max-w-2xl mx-auto space-y-4 px-2 sm:px-0">
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <button class="w-full flex justify-between items-center px-6 py-4 text-lg font-bold text-text-color bg-gray-100 hover:bg-gray-200" onclick="toggleFAQ(1)">
                            Como funciona o SoulRoom?
                            <span id="icon-1" class="text-2xl transition-transform duration-300">+</span>
                        </button>
                        <div id="faq-1" class="hidden px-6 py-4 text-secondary-color">
                            O SoulRoom utiliza inteligência artificial e curadoria humana para criar devocionais personalizadas com base nas suas preferências e estado emocional.
                        </div>
                    </div>
            
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <button class="w-full flex justify-between items-center px-6 py-4 text-lg font-bold text-text-color bg-gray-100 hover:bg-gray-200" onclick="toggleFAQ(2)">
                            Posso experimentar gratuitamente?
                            <span id="icon-2" class="text-2xl transition-transform duration-300">+</span>
                        </button>
                        <div id="faq-2" class="hidden px-6 py-4 text-secondary-color">
                            Sim! Oferecemos um plano básico gratuito para você começar a explorar nossos recursos.
                        </div>
                    </div>
            
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <button class="w-full flex justify-between items-center px-6 py-4 text-lg font-bold text-text-color bg-gray-100 hover:bg-gray-200" onclick="toggleFAQ(3)">
                            O SoulRoom está disponível para quais dispositivos?
                            <span id="icon-3" class="text-2xl transition-transform duration-300">+</span>
                        </button>
                        <div id="faq-3" class="hidden px-6 py-4 text-secondary-color">
                            O SoulRoom pode ser acessado via navegador.
                        </div>
                    </div>
            
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <button class="w-full flex justify-between items-center px-6 py-4 text-lg font-bold text-text-color bg-gray-100 hover:bg-gray-200" onclick="toggleFAQ(4)">
                            Como posso cancelar minha assinatura?
                            <span id="icon-4" class="text-2xl transition-transform duration-300">+</span>
                        </button>
                        <div id="faq-4" class="hidden px-6 py-4 text-secondary-color">
                            Você pode cancelar sua assinatura a qualquer momento nas configurações da sua conta.
                        </div>
                    </div>
            
                </div>
            </section>      

            <!-- Contact Section -->
            <section id="contact" class="py-12 px-4">
                <h3 class="text-2xl font-semibold mb-6 text-center">Fale Conosco</h3>
                <div class="max-w-lg mx-auto bg-gray-100 shadow-md rounded-md p-6 border-purple-100 overflow-hidden border">
                    <form>
                        <div class="mb-4">
                            <label for="name" class="block font-semibold">Nome</label>
                            <input type="text" id="name" name="name"
                                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-accent-color">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block font-semibold">Email</label>
                            <input type="email" id="email" name="email"
                                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-accent-color">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block font-semibold">Mensagem</label>
                            <textarea id="message" name="message" rows="4"
                                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-accent-color"></textarea>
                        </div>
                        <button type="submit"
                            class="bg-white text-card-background px-6 py-3 rounded-md font-semibold shadow hover:bg-blue-500">Enviar</button>
                    </form>
                </div>
            </section>
        </main>

        <footer class="bg-primary-color py-6 bg-cyan-800">
            <div class="container mx-auto text-center text-card-background text-white">
                <p>&copy; 2025 soulroom. Todos os direitos reservados.</p>
            </div>
        </footer>
    </div>
</body>
<script>
    function toggleFAQ(id) {
        const content = document.getElementById(`faq-${id}`);
        const icon = document.getElementById(`icon-${id}`);
    
        if (content.classList.contains("hidden")) {
            content.classList.remove("hidden");
            icon.innerText = "−";
        } else {
            content.classList.add("hidden");
            icon.innerText = "+";
        }
    }
</script>
</html>
