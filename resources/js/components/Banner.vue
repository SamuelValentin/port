<template>
    <div class="banner" :style="{ backgroundImage: `url(${image})` }">
      <div class="banner-overlay"></div>
      <h1 class="banner-title">{{ title }}</h1>
    </div>
  </template>

  <script>
  export default {
    name: 'Banner',
    props: {
      title: {
        type: String,
        default: 'Your Banner Title'
      },
      image: {
        type: String,
        required: true
      }
    }
  }
  </script>

  <style scoped>
  .banner {
    position: relative;
    height: 256px; /* Altura do banner */
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
  }

  .banner-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: black;
    opacity: 0.2; /* Transparência da sobreposição */
    z-index: 1;
  }

  .banner-title {
    position: relative;
    font-size: 2.5rem; /* Tamanho do título */
    font-weight: bold;
    z-index: 2;
  }
  </style>
