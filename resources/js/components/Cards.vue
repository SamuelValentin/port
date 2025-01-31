<template>
    <div class="cards-wrapper">
        <div class="cards-container">
            <div class="card card-blue">
                <h2 class="card-title">Card 1</h2>
                <p class="card-content">This is a blue card.</p>
            </div>
            <div class="card card-lightblue">
                <h2 class="card-title">Card 2</h2>
                <p class="card-content">This is a light blue card.</p>
            </div>
            <div class="card card-darkblue">
                <h2 class="card-title">Card 3</h2>
                <p class="card-content">This is a dark blue card.</p>
            </div>
            <div class="card card-white">
                <h2 class="card-title">Card 4</h2>
                <p class="card-content">This is a white card.</p>
            </div>
        </div>
    </div>
</template>

  <script>
  export default {
    name: 'Cards'
  }
  </script>

  <style scoped>
  .cards-wrapper {
    padding: 0 2rem; /* Espaço lateral ao redor dos cartões */
  }

  .cards-container {
    display: flex;
    justify-content: center; /* Centraliza os cartões horizontalmente */
    gap: 1rem; /* Espaço entre os cartões */
  }

  .card {
    flex: 1; /* Faz com que os cartões tenham a mesma largura */
    max-width: 200px; /* Largura máxima do cartão */
    padding: 1rem;
    border-radius: 0.5rem; /* Cantos arredondados */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Sombra do cartão */
    text-align: center;
  }

  .card:hover {
    transform: translate(0, -10px);
  }

  .card-blue {
    background-color: #1e40af; /* Azul escuro */
    color: white;
  }

  .card-lightblue {
    background-color: #93c5fd; /* Azul claro */
    color: #1e3a8a; /* Azul escuro para texto */
  }

  .card-darkblue {
    background-color: #1e3a8a; /* Azul escuro */
    color: white;
  }

  .card-white {
    background-color: white;
    color: #1e40af; /* Azul escuro para texto */
  }
  </style>
