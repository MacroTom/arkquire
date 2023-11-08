<script setup>
import { Link } from '@inertiajs/vue3';
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel';
import 'vue3-carousel/dist/carousel.css';

const breakpoints = {
    // 768px and up
    768: {
        itemsToShow: 3,
        wrapAround: true
    },
    // 1024 and up
    1024: {
        itemsToShow: 5,
        wrapAround: true
    },
}
</script>

<style scoped>
.carousel__pagination{
    @apply absolute bottom-2 w-full
}
.carousel__track, .carousel__viewport {
    height: 100%;
}
</style>

<template>
    <section class="w-full wrapper pb-16">
        <p class="text-xs tracking-widest text-neutral-600 uppercase mb-3">
            New Businesses
        </p>
        <Carousel class="w-full overflow-hidden" :itemsToShow="1" :autoplay="2000" :breakpoints="breakpoints" wrapAround>
            <slide class="w-full" v-for="index in 5" :key="index">
                <Link class="w-full block pr-2 group" href="#">
                    <div class="w-full">
                        <img class="w-full grayscale group-hover:grayscale-0 transition-all duration-300 ease-in-out h-32 border border-neutral-100 rounded-lg group-hover:border-primary-400 object-cover object-center" src="/images/meeting.jpeg" alt="image">
                    </div>
                    <div class="text-left">
                        <p class="text-sm font-bold mt-3 group-hover:text-primary-400">
                            Gray and Co ltd
                        </p>
                        <p class="text-xs text-neutral-700 mt-1">
                            #750,000,000
                        </p>
                    </div>
                    <div class="flex justify-between items-center text-xs mt-2">
                        <span class="inline-block capitalize py-1 px-2 rounded-full text-neutral-400 border border-neutral-400">
                            Transportation
                        </span>
                        <span class="opacity-0 group-hover:opacity-100 text-primary-500 transition-opacity duration-300 ease-in">
                            <i class="bx bx-right-arrow-alt text-lg"></i>
                        </span>
                    </div>
                </Link>
            </slide>
        </Carousel>
    </section>
</template>
