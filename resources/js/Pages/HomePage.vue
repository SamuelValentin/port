<template>
    <div class="page">
        <!-- <Navbar /> -->
        <Banner title="Welcome to Our Website!" image="/images/pexels-bri-schneiter-28802-346529.jpg"/>
        <PageContent />
        <Cards />
    </div>
  </template>

  <script>
  import Navbar from '@/components/Navbar.vue';
  import PageContent from '@/components/PageContent.vue';
  import Banner from '@/components/Banner.vue';
  import Cards from '@/components/Cards.vue';

  export default {
    components: {
      Navbar,
      PageContent,
      Banner,
      Cards,
    },
  };
  </script>

<style>
    .page{
        margin-bottom: 15px;
    }
</style>
