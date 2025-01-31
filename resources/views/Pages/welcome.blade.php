
<!DOCTYPE html>
<html lang="pt-BR">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Mobou - Inteligência para inteligência</title>
   @vite(['resources/css/app.css', 'resources/js/app.js'])
   <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100">
    <header class="flex justify-between items-center p-4 bg-white dark:bg-gray-800 shadow-sm fixed top-0 left-0 right-0 z-10">
        <div class="logo">
            <svg class="h-12" viewBox="0 0 345 110" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g stroke-width="0.00" fill="none" stroke-linecap="butt">
                <path stroke="#801919" vector-effect="non-scaling-stroke" d="
                      M 49.21 63.07
                      Q 51.06 59.82 50.99 55.70
                      Q 50.88 48.21 51.06 40.77
                      C 51.13 38.25 53.13 37.66 55.16 37.50
                      C 59.28 37.17 58.94 30.85 54.20 31.04
                      C 46.28 31.35 44.18 36.28 44.35 43.40
                      Q 44.53 50.39 44.33 56.81
                      C 44.17 62.22 37.69 58.32 37.32 63.29
                      C 36.91 68.65 44.16 64.79 44.32 70.04
                      Q 44.52 76.67 44.36 83.79
                      C 44.20 91.13 46.60 95.94 54.75 95.97
                      C 57.09 95.97 58.43 93.93 57.87 91.73
                      C 56.91 87.96 51.20 90.83 51.06 86.39
                      Q 50.86 80.24 51.01 72.74
                      Q 51.12 66.87 49.24 63.94
                      Q 48.96 63.51 49.21 63.07" />
                <path stroke="#808080" vector-effect="non-scaling-stroke" d="
                      M 171.31 50.49
                      L 171.32 34.46
                      Q 171.33 31.96 168.96 31.16
                      Q 168.40 30.98 167.83 31.04
                      Q 164.72 31.39 164.73 34.52
                      Q 164.78 46.64 164.66 61.96
                      C 164.59 71.46 169.46 79.10 179.15 80.98
                      C 185.30 82.18 192.05 79.90 196.04 74.95
                      Q 201.28 68.45 199.62 59.38
                      C 197.14 45.83 181.50 41.32 171.91 50.74
                      Q 171.31 51.32 171.31 50.49" />
                <path stroke="#801919" vector-effect="non-scaling-stroke" d="
                      M 297.61 63.89
                      Q 295.63 67.23 295.75 71.73
                      Q 295.95 78.93 295.76 85.42
                      C 295.66 88.65 294.28 89.24 291.37 89.56
                      C 287.85 89.94 287.89 95.57 291.49 95.89
                      C 298.10 96.48 302.28 92.65 302.33 85.85
                      Q 302.38 77.96 302.40 70.28
                      C 302.40 67.47 304.35 66.96 306.65 66.68
                      C 310.49 66.22 310.26 60.64 306.63 60.36
                      C 304.62 60.20 302.55 59.53 302.47 57.12
                      Q 302.23 50.81 302.40 44.18
                      C 302.60 36.49 300.87 31.15 292.02 31.04
                      C 289.47 31.01 288.14 33.49 289.05 35.74
                      C 290.35 38.96 295.66 36.13 295.74 40.87
                      Q 295.87 48.37 295.76 55.27
                      Q 295.69 59.83 297.61 63.22
                      A 0.69 0.67 45.8 0 1 297.61 63.89" />
                <path stroke="#808080" vector-effect="non-scaling-stroke" d="
                      M 79.45 48.56
                      Q 78.17 45.05 74.72 46.45
                      A 2.76 2.75 -11.1 0 0 73.00 49.00
                      L 73.00 77.63
                      Q 73.00 80.79 76.15 81.03
                      Q 76.54 81.06 76.91 80.98
                      Q 79.54 80.45 79.55 77.77
                      Q 79.59 69.09 79.55 60.10
                      C 79.51 49.28 94.40 48.51 94.32 59.26
                      Q 94.25 69.02 94.34 77.61
                      Q 94.37 80.86 97.61 81.02
                      Q 98.45 81.06 99.29 80.74
                      A 2.52 2.51 -10.1 0 0 100.91 78.42
                      Q 100.99 70.37 100.93 60.10
                      C 100.86 49.48 115.51 48.23 115.58 59.37
                      Q 115.64 69.12 115.64 77.74
                      Q 115.64 81.08 118.98 81.01
                      L 119.28 81.01
                      Q 122.16 80.95 122.21 78.07
                      Q 122.39 67.41 122.14 57.95
                      C 121.81 45.06 106.90 42.01 99.09 50.14
                      Q 98.65 50.60 98.23 50.12
                      Q 92.38 43.50 83.27 46.70
                      Q 81.48 47.33 80.14 48.70
                      Q 79.68 49.17 79.45 48.56" />
                <path stroke="#808080" vector-effect="non-scaling-stroke" d="
                      M 160.98 63.51
                      A 17.89 17.89 0.0 0 0 143.09 45.62
                      A 17.89 17.89 0.0 0 0 125.20 63.51
                      A 17.89 17.89 0.0 0 0 143.09 81.40
                      A 17.89 17.89 0.0 0 0 160.98 63.51" />
                <path stroke="#808080" vector-effect="non-scaling-stroke" d="
                      M 237.98 63.51
                      A 17.89 17.89 0.0 0 0 220.09 45.62
                      A 17.89 17.89 0.0 0 0 202.20 63.51
                      A 17.89 17.89 0.0 0 0 220.09 81.40
                      A 17.89 17.89 0.0 0 0 237.98 63.51" />
                <path stroke="#808080" vector-effect="non-scaling-stroke" d="
                      M 267.17 77.73
                      C 267.01 82.13 273.69 82.08 273.69 77.66
                      Q 273.71 63.84 273.70 49.47
                      Q 273.69 46.19 270.42 45.94
                      Q 270.01 45.91 269.62 46.02
                      Q 267.13 46.71 267.10 49.29
                      Q 267.00 57.58 267.13 66.31
                      C 267.31 78.44 247.67 78.50 247.48 66.19
                      Q 247.35 57.51 247.40 49.56
                      Q 247.43 46.22 244.10 45.93
                      Q 243.72 45.90 243.36 46.00
                      Q 240.85 46.70 240.79 49.30
                      Q 240.62 58.05 240.86 66.53
                      C 241.26 80.56 256.79 85.58 266.68 77.49
                      A 0.30 0.30 0.0 0 1 267.17 77.73" />
                <path stroke="#808080" vector-effect="non-scaling-stroke" d="
                      M 182.3491 75.5000
                      A 12.00 11.36 90.1 0 0 193.7300 63.5198
                      A 12.00 11.36 90.1 0 0 182.3909 51.5000
                      A 12.00 11.36 90.1 0 0 171.0100 63.4802
                      A 12.00 11.36 90.1 0 0 182.3491 75.5000" />
                <path stroke="#808080" vector-effect="non-scaling-stroke" d="
                      M 143.1000 75.5600
                      A 12.05 11.41 90.0 0 0 154.5100 63.5100
                      A 12.05 11.41 90.0 0 0 143.1000 51.4600
                      A 12.05 11.41 90.0 0 0 131.6900 63.5100
                      A 12.05 11.41 90.0 0 0 143.1000 75.5600" />
                <path stroke="#808080" vector-effect="non-scaling-stroke" d="
                      M 220.1000 75.5600
                      A 12.05 11.41 90.0 0 0 231.5100 63.5100
                      A 12.05 11.41 90.0 0 0 220.1000 51.4600
                      A 12.05 11.41 90.0 0 0 208.6900 63.5100
                      A 12.05 11.41 90.0 0 0 220.1000 75.5600" />
            </g>

            <path fill="#ff3131" d="
                      M 49.24 63.94
                      Q 51.12 66.87 51.01 72.74
                      Q 50.86 80.24 51.06 86.39
                      C 51.20 90.83 56.91 87.96 57.87 91.73
                      C 58.43 93.93 57.09 95.97 54.75 95.97
                      C 46.60 95.94 44.20 91.13 44.36 83.79
                      Q 44.52 76.67 44.32 70.04
                      C 44.16 64.79 36.91 68.65 37.32 63.29
                      C 37.69 58.32 44.17 62.22 44.33 56.81
                      Q 44.53 50.39 44.35 43.40
                      C 44.18 36.28 46.28 31.35 54.20 31.04
                      C 58.94 30.85 59.28 37.17 55.16 37.50
                      C 53.13 37.66 51.13 38.25 51.06 40.77
                      Q 50.88 48.21 50.99 55.70
                      Q 51.06 59.82 49.21 63.07
                      Q 48.96 63.51 49.24 63.94
                      Z" />
            <path fill="#000000" d="
                      M 171.91 50.74
                      C 181.50 41.32 197.14 45.83 199.62 59.38
                      Q 201.28 68.45 196.04 74.95
                      C 192.05 79.90 185.30 82.18 179.15 80.98
                      C 169.46 79.10 164.59 71.46 164.66 61.96
                      Q 164.78 46.64 164.73 34.52
                      Q 164.72 31.39 167.83 31.04
                      Q 168.40 30.98 168.96 31.16
                      Q 171.33 31.96 171.32 34.46
                      L 171.31 50.49
                      Q 171.31 51.32 171.91 50.74
                      Z
                      M 182.3491 75.5000
                      A 12.00 11.36 90.1 0 0 193.7300 63.5198
                      A 12.00 11.36 90.1 0 0 182.3909 51.5000
                      A 12.00 11.36 90.1 0 0 171.0100 63.4802
                      A 12.00 11.36 90.1 0 0 182.3491 75.5000
                      Z" />
            <path fill="#ff3131" d="
                      M 297.61 63.22
                      Q 295.69 59.83 295.76 55.27
                      Q 295.87 48.37 295.74 40.87
                      C 295.66 36.13 290.35 38.96 289.05 35.74
                      C 288.14 33.49 289.47 31.01 292.02 31.04
                      C 300.87 31.15 302.60 36.49 302.40 44.18
                      Q 302.23 50.81 302.47 57.12
                      C 302.55 59.53 304.62 60.20 306.63 60.36
                      C 310.26 60.64 310.49 66.22 306.65 66.68
                      C 304.35 66.96 302.40 67.47 302.40 70.28
                      Q 302.38 77.96 302.33 85.85
                      C 302.28 92.65 298.10 96.48 291.49 95.89
                      C 287.89 95.57 287.85 89.94 291.37 89.56
                      C 294.28 89.24 295.66 88.65 295.76 85.42
                      Q 295.95 78.93 295.75 71.73
                      Q 295.63 67.23 297.61 63.89
                      A 0.69 0.67 45.8 0 0 297.61 63.22
                      Z" />
            <path fill="#000000" d="
                      M 80.14 48.70
                      Q 81.48 47.33 83.27 46.70
                      Q 92.38 43.50 98.23 50.12
                      Q 98.65 50.60 99.09 50.14
                      C 106.90 42.01 121.81 45.06 122.14 57.95
                      Q 122.39 67.41 122.21 78.07
                      Q 122.16 80.95 119.28 81.01
                      L 118.98 81.01
                      Q 115.64 81.08 115.64 77.74
                      Q 115.64 69.12 115.58 59.37
                      C 115.51 48.23 100.86 49.48 100.93 60.10
                      Q 100.99 70.37 100.91 78.42
                      A 2.52 2.51 -10.1 0 1 99.29 80.74
                      Q 98.45 81.06 97.61 81.02
                      Q 94.37 80.86 94.34 77.61
                      Q 94.25 69.02 94.32 59.26
                      C 94.40 48.51 79.51 49.28 79.55 60.10
                      Q 79.59 69.09 79.55 77.77
                      Q 79.54 80.45 76.91 80.98
                      Q 76.54 81.06 76.15 81.03
                      Q 73.00 80.79 73.00 77.63
                      L 73.00 49.00
                      A 2.76 2.75 -11.1 0 1 74.72 46.45
                      Q 78.17 45.05 79.45 48.56
                      Q 79.68 49.17 80.14 48.70
                      Z" />
            <path fill="#000000" d="
                      M 160.98 63.51
                      A 17.89 17.89 0.0 0 1 143.09 81.40
                      A 17.89 17.89 0.0 0 1 125.20 63.51
                      A 17.89 17.89 0.0 0 1 143.09 45.62
                      A 17.89 17.89 0.0 0 1 160.98 63.51
                      Z
                      M 143.1000 75.5600
                      A 12.05 11.41 90.0 0 0 154.5100 63.5100
                      A 12.05 11.41 90.0 0 0 143.1000 51.4600
                      A 12.05 11.41 90.0 0 0 131.6900 63.5100
                      A 12.05 11.41 90.0 0 0 143.1000 75.5600
                      Z" />
            <path fill="#000000" d="
                      M 237.98 63.51
                      A 17.89 17.89 0.0 0 1 220.09 81.40
                      A 17.89 17.89 0.0 0 1 202.20 63.51
                      A 17.89 17.89 0.0 0 1 220.09 45.62
                      A 17.89 17.89 0.0 0 1 237.98 63.51
                      Z
                      M 220.1000 75.5600
                      A 12.05 11.41 90.0 0 0 231.5100 63.5100
                      A 12.05 11.41 90.0 0 0 220.1000 51.4600
                      A 12.05 11.41 90.0 0 0 208.6900 63.5100
                      A 12.05 11.41 90.0 0 0 220.1000 75.5600
                      Z" />
            <path fill="#000000" d="
                      M 267.17 77.73
                      A 0.30 0.30 0.0 0 0 266.68 77.49
                      C 256.79 85.58 241.26 80.56 240.86 66.53
                      Q 240.62 58.05 240.79 49.30
                      Q 240.85 46.70 243.36 46.00
                      Q 243.72 45.90 244.10 45.93
                      Q 247.43 46.22 247.40 49.56
                      Q 247.35 57.51 247.48 66.19
                      C 247.67 78.50 267.31 78.44 267.13 66.31
                      Q 267.00 57.58 267.10 49.29
                      Q 267.13 46.71 269.62 46.02
                      Q 270.01 45.91 270.42 45.94
                      Q 273.69 46.19 273.70 49.47
                      Q 273.71 63.84 273.69 77.66
                      C 273.69 82.08 267.01 82.13 267.17 77.73
                      Z" />
            </svg>
        </div>
        <nav class="space-x-6 text-sm font-medium text-gray-700 dark:text-gray-300">
            <button id="theme-toggle" class="hover:text-blue-600 dark:hover:text-blue-400">Theme</button>
            <a href="#" class="hover:text-blue-600 dark:hover:text-blue-400">AGENTES MOBOU</a>
            <a href="#" class="hover:text-blue-600 dark:hover:text-blue-400">NOSSO JEITO DE PENSAR</a>
            <a href="#" class="hover:text-blue-600 dark:hover:text-blue-400">NEWSLETTER</a>
        </nav>
   </header>

    <main>
        <section class="p-8 mt-8 py-20 relative w-full bg-cover bg-center items-center" 
            style="background-image: url('https://images.unsplash.com/photo-1737223300170-bf53e8963dc4?q=80&w=2056&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
            <div class="relative max-w-screen-lg mx-auto h-full items-center">
                <div x-data="{ 
                    currentIndex: 0,
                    cards: [
                        'Inteligência para inteligência não é apenas um slogan; é a essência do que somos.',
                        'Na Mobou, aplicamos inteligência estratégica para dar alma à inteligência artificial. Transformamos dados em decisões, tecnologia em soluções, complexidade em simplicidade.',
                        'Nosso propósito é claro: conectar mentes humanas e digitais para potencializar capacidades, economizar tempo e criar impacto real.',
                        'Cada ferramenta que desenvolvemos carrega o compromisso de humanizar a tecnologia, tornando-a parceira, não substituta.',
                        'Se você acredita que o futuro é a união entre estratégia e inovação, bem-vindo à Mobou.',
                        'Juntos, moldamos um amanhã mais inteligente.'
                    ]
                }" 
                x-init="setInterval(() => currentIndex = (currentIndex + 1) % cards.length, 5000)"
                class="relative mt-15 w-full h-48 bg-blue-100 dark:bg-gray-700 overflow-hidden rounded-lg shadow-lg">
                    <div class="absolute inset-0 flex items-center justify-center p-14 mx-14">
                        <p x-text="cards[currentIndex]" class="text-2xl font-medium text-center leading-relaxed text-gray-800 dark:text-gray-100"></p>
                    </div>
                    
                    <button @click="currentIndex = (currentIndex - 1 + cards.length) % cards.length"
                        class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/80 dark:bg-gray-600/80 p-3 rounded-full shadow-md hover:bg-white dark:hover:bg-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-700 dark:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    
                    <button @click="currentIndex = (currentIndex + 1) % cards.length"
                        class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/80 dark:bg-gray-600/80 p-3 rounded-full shadow-md hover:bg-white dark:hover:bg-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-700 dark:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                    
                    <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-3">
                        <template x-for="(card, index) in cards" :key="index">
                            <button @click="currentIndex = index"
                                :class="{'bg-blue-500': currentIndex === index, 'bg-gray-300 dark:bg-gray-600': currentIndex !== index}"
                                class="w-3 h-3 rounded-full transition-colors duration-300"></button>
                        </template>
                    </div>
                </div>
                <div class="bg-blue-400 dark:bg-[#003052] p-6 rounded-lg text-white my-5">
                    <div x-data="{ question: '' }" class="space-y-4">
                        <h2 class="text-xl font-medium">Descubra do que somos capazes:</h2>
                        {{-- <div class="space-y-2">
                            <div class="font-light">"Quais soluções a Mobou oferece?"</div>
                            <div class="font-light">"Como a Mobou pode ajudar meu negócio/igreja?"</div>  
                            <div class="font-light">"O que significa inteligência para inteligência?"</div>
                            <div class="font-light">"Vocês têm ferramentas de automação com inteligência artificial?"</div>
                            <div class="font-light">"Como posso começar a usar as soluções da Mobou?"</div>
                        </div> --}}
                        <form @submit.prevent="window.location.href = `/chat?q=${encodeURIComponent(question)}`" class="mt-6 flex gap-2">
                            <input type="text" x-model="question" placeholder="Digite sua pergunta..."
                                class="flex-1 p-3 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <button type="submit"
                                class="px-4 py-2 bg-blue-600 dark:bg-blue-800 text-white rounded-lg hover:bg-blue-600 dark:hover:bg-blue-700"
                                :disabled="!question.trim()">
                                Enviar
                            </button>
                        </form>
                    </div>
                </div>  
            </div>      
        </section>

        <section class="px-5 p-4 justify-center items-center text-center">
            <h2 class="text-2xl font-bold text-center text-gray-800 dark:text-gray-200">
                Inscreva-se na nossa Newsletter
            </h2>
            <div class="md:col-span-2 flex justify-center">
                <form class="m-4 flex w-full max-w-2xl">
                    <input class="w-full max-w-xl rounded-l-lg p-2 text-gray-800 dark:text-gray-200 border border-gray-200 dark:border-gray-600 bg-white dark:bg-gray-800" placeholder="your@mail.com"/>
                    <button class="text-xs px-8 rounded-r-lg bg-blue-500 dark:bg-blue-700 text-white font-bold p-2 uppercase border-blue-500 dark:border-blue-700 border hover:bg-blue-600 dark:hover:bg-blue-800 whitespace-nowrap">
                        Inscreva-se
                    </button>                    
                </form>
            </div>
        </section>            

        <section class="p-8 mt-8 py-20">
            <h2 class="text-2xl font-bold text-center text-gray-800 dark:text-gray-200 mb-5">FEED BLOG</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 justify-center place-items-center">
                @for ($i = 0; $i < 3; $i++)
                    <div class="relative flex flex-col rounded-xl bg-white dark:bg-gray-800 bg-clip-border text-gray-700 dark:text-gray-300 shadow-md w-full max-w-sm">
                        <div class="p-6">
                            <h5 class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-gray-900 dark:text-gray-100 antialiased">
                                Titulo Postagem
                            </h5>
                            <p class="block font-sans text-base font-light leading-relaxed text-gray-700 dark:text-gray-300 antialiased">
                                Uma vez Flamengo, Sempre Flamengo, Flamengo sempre eu hei de ser
                                É o meu maior prazer, Vê-lo brilhar, Seja na terra, Seja no mar
                                Vencer, vencer, vencer
                            </p>
                        </div>
                        <div class="p-6 pt-0">
                            <button class="select-none rounded-lg bg-blue-500 dark:bg-blue-700 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 dark:shadow-blue-700/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 dark:hover:shadow-blue-700/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                type="button" data-ripple-light="true">
                                Leia mais
                            </button>
                        </div>
                    </div>
                @endfor   
            </div>
        </section>        
    </main>
    <footer class="bg-gray-100 dark:bg-gray-800 mb-0">
        <div class="max-w-2xl mx-auto text-gray-600 dark:text-gray-300 py-3">
            <div class="mt-5 flex flex-col md:flex-row md:justify-between items-center text-sm">
                <div class="order-1 md:order-2 text-lg">
                    <a href="" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400"><span class="px-2">HOME</span></a>
                    <a href="" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400"><span class="px-2 border-l border-gray-300 dark:border-gray-600">AGENTES MOBOU</span></a>
                    <a href="" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400"><span class="px-2 border-l border-gray-300 dark:border-gray-600">NOSSO JEITO DE PENSAR</span></a>
                </div>
                <div>
                    <p class="order-2 md:order-1 mt-2 md:mt-2 text-gray-600 dark:text-gray-400"> &copy; Mobou, 2024. </p>
                </div>
            </div>
        </div>
    </footer>
</body>
<script>
    const toggleButton = document.getElementById('theme-toggle');
    const rootElement = document.documentElement;

    toggleButton.addEventListener('click', () => {
        if (rootElement.classList.contains('dark')) {
            rootElement.classList.remove('dark');
            localStorage.theme = 'light';
        } else {
            rootElement.classList.add('dark');
            localStorage.theme = 'dark';
        }
    });

    // Aplicar o tema baseado na preferência salva do usuário
    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        rootElement.classList.add('dark');
    } else {
        rootElement.classList.remove('dark');
    }
</script>
</html>




