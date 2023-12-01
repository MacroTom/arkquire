<script setup>
import { Head } from '@inertiajs/vue3';
import Navbar from '../Components/Navbar.vue';
import Hero from '../Components/Hero.vue';
import Slider from '../Components/Slider.vue';
import Category from '../Components/Category.vue';
import Trustees from '../Components/Trustees.vue';
import Info from '../Components/Info.vue';
import Services from '../Components/Services.vue';
import Testimonies from '../Components/Testimonies.vue';
import Footer from '../Components/Footer.vue';

import Foreground from '../Layouts/Services.vue';
defineOptions({ layout: Foreground });
</script>

<template>
    <Head>
        <title>Home</title>
    </Head>
    <section class="w-full">
        <Navbar/>
        <Hero/>
        <Slider/>
        <Category/>
        <Trustees/>
        <Info/>
        <Services/>
        <Testimonies/>
        <Footer/>
    </section>
</template>
