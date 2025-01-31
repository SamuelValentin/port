<template>
    <nav class="navbar">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </template>

  <script>
  export default {
    name: 'Navbar',
  }
  </script>

  <style scoped>
  /* Removendo margem e preenchimento da página inteira */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  html, body {
    width: 100%;
    height: 100%;
    overflow-x: hidden;
  }

  /* A navbar ocupa a largura total da página */
  .navbar {
    background-color: #333;
    padding: 1rem;
    width: 100%;
  }

  .navbar ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
  }

  .navbar li {
    margin-right: 1.5rem;
  }

  .navbar a {
    color: white;
    text-decoration: none;
  }
  </style>
