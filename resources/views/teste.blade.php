@extends('layout.main')
@section('content')
    <div class="container mx-auto p-4">
        <header class="mb-8">
            <h1 class="text-4xl font-bold text-center">Samuel Valentin</h1>
        </header>

        <section id="about" class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Sobre Mim</h2>
            <p class="text-lg">Sou um programador, empreendedor, guitarrista, casado e brasileirinho</p>
        </section>

        <section id="projects" class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Projetos</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Projeto 1 -->
                <div class="bg-gray-600 p-4 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-2">Projeto 1</h3>
                    <p>Descrição do projeto 1.</p>
                </div>
                <!-- Projeto 2 -->
                <div class="bg-gray-600 p-4 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-2">Projeto 2</h3>
                    <p>Descrição do projeto 2.</p>
                </div>
                <!-- Adicione mais projetos conforme necessário -->
            </div>
        </section>

        <div id="app">
            <counter />
        </div>
    </div>
@endsection
