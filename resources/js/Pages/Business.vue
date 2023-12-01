<script setup>
import { onMounted, defineOptions } from 'vue';
import { Head } from '@inertiajs/vue3';
import Navbar from '../Components/Navbar.vue';
import Footer from '../Components/Footer.vue';
import Header from '../Components/Header.vue';
import Categories from '../Components/Business/Categories.vue';
import Details from '../Components/Business/Details.vue';

import Services from '../Layouts/Services.vue';
defineOptions({ layout: Services });
</script>

<template>
    <Head>
        <title>Businesses</title>
    </Head>
    <section class="w-full">
        <Navbar/>
        <Details/>
        <Categories/>
        <Footer/>
    </section>
</template>
