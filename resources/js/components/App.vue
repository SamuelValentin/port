<template>
    <div class="container">
        <h1 class="title">Hello, Vue 3 without Tailwind! ------</h1>
        <p class="text">This is a component using custom CSS.</p>
    </div>
</template>

<script>
    export default {
        name: 'MyComponent',
    };
</script>

<style scoped>
    .container {
        padding: 1.5rem;
        max-width: 24rem;
        margin: 0 auto;
        background-color: rgb(106, 176, 223);
        border-radius: 0.75rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #1a202c; /* Gray-900 */
    }

    .text {
        color: #718096; /* Gray-600 */
    }
</style>
