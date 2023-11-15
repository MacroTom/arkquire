<script setup>
import { onMounted } from 'vue';
import { Head } from '@inertiajs/vue3';
import Navbar from '../Components/Navbar.vue';
import Footer from '../Components/Footer.vue';
import Header from '../Components/Header.vue';
import Auction from '../Components/Business/Auction.vue';
import Categories from '../Components/Business/Categories.vue';
import Sale from '../Components/Business/Sale.vue';
import Toast from 'primevue/toast';
</script>

<template>
    <Head>
        <title>Businesses</title>
    </Head>
    <Toast/>
    <section class="w-full">
        <Navbar/>
        <Header/>
        <Auction/>
        <Sale/>
        <Categories/>
        <Footer/>
    </section>
</template>
