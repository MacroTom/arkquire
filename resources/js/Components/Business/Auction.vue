<script setup>
import { defineProps } from 'vue';
import { Link } from '@inertiajs/vue3';
import { Carousel, Slide } from 'vue3-carousel';
import 'vue3-carousel/dist/carousel.css';
import currency from 'currency.js';

const props = defineProps({
    businesses: Array
});

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

const formatCurrency = (value) => {
    return currency(value, {separator: ',', symbol: '₦', precision: 0}).format();
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
    <section class="w-full wrapper my-10">
        <header class="w-full flex items-start justify-between mb-4">
            <div>
                <p class="text-neutral-700 font-semibold text-lg">Auctions</p>
                <small>
                    These are the list of businesses on auction
                </small>
            </div>
            <Link href="/auctions" class="inline-flex items-center gap-2 text-sm md:text-base text-primary-500 hover:text-primary-600">
                <span class="text-xs">View all</span>
                <span class="relative transition-all duration-300 ease-in-out group-hover:translate-x-3">→</span>
            </Link>
        </header>

        <!-- Cards -->
        <Carousel class="w-full" :itemsToShow="1" :autoplay="3000" :breakpoints="breakpoints" wrapAround>
            <slide class="w-full" v-for="(business,index) in businesses" :key="index">
                <Link class="w-full block group pr-2" :href="`/business/${business?.listing_id}`">
                    <div class="w-full relative">
                        <img class="w-full grayscale group-hover:grayscale-0 transition-all duration-300 ease-in-out h-32 border border-neutral-100 rounded-t-lg group-hover:border-primary-400 object-cover object-center relative" :src="business?.images[0]?.url" alt="image">
                    </div>
                    <div class="text-left border-x border-b p-2 rounded-b-lg space-y-1">
                        <p class="text-sm font-semibold group-hover:text-primary-400 flex items-center justify-between gap-x-4">
                            <span class="overflow-hidden overflow-ellipsis whitespace-nowrap">{{ business?.business_name }}</span>
                            <span class="font-normal text-xs text-primary-400 shrink-0">{{ business?.bid }} {{ business?.bid > 1 ? 'bids' : 'bid' }}</span>
                        </p>
                        <p class="text-neutral-700 flex items-center justify-between">
                            <span class="text-xs">Starting bid</span>
                            <span class="text-sm font-semibold">{{ formatCurrency(business?.price) }}</span>
                        </p>
                        <p class="text-xs flex items-center justify-between">
                            <span>Time left</span>
                            <span class="font-normal text-xs text-red-400 shrink-0">3hrs 57mins</span>
                        </p>
                    </div>
                </Link>
            </slide>
        </Carousel>
    </section>
</template>
