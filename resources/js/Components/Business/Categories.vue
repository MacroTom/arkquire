<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <section class="w-full wrapper py-8 md:py-16 my-16 bg-primary-100">
        <p class="text-neutral-800 font-semibold text-lg mb-4">
            Popular Business Categories
        </p>
        <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-4 gap-3 lg:gap-4 xl:gap-6">
            <Link href="#" class="w-full relative" v-for="index in 8" :key="index">
                <img class="w-full rounded-lg" src="/images/category.png" alt="image">
                <div class="absolute top-0 left-0 w-full h-full bg-black/80 rounded-lg flex flex-col items-center justify-center">
                    <p class="text-white text-lg tracking-wider">Websites</p>
                    <small class="text-[0.55rem] text-white uppercase tracking-widest"># Businesses</small>
                </div>
            </Link>
        </div>
    </section>
</template>
