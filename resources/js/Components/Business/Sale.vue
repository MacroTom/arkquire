<script setup>
import { defineProps } from 'vue';
import { Link } from '@inertiajs/vue3';
import currency from 'currency.js';

import Paginate from '../Paginate.vue';

const props = defineProps({
    businesses: Object
});

const formatCurrency = (value) => {
    return currency(value, {separator: ',', symbol: '₦', precision: 0}).format();
}


</script>

<template>
    <section class="w-full wrapper">
        <header class="w-full flex items-start justify-between mb-4">
            <div>
                <p class="text-neutral-700 font-semibold text-lg">Available for sale</p>
                <small>
                    These are the list of businesses available on sale
                </small>
            </div>
            <!-- <Link href="#" class="inline-flex items-center gap-2 text-sm md:text-base text-primary-500 hover:text-primary-600">
                <span class="text-sm">View all</span>
                <span class="relative transition-all duration-300 ease-in-out group-hover:translate-x-3">→</span>
            </Link> -->
        </header>

        <div class="w-full grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
            <Link :href="`/business/${business?.listing_id}`" class="w-full group" v-for="(business,index) in businesses?.data" :key="index">
                <div class="h-[8rem] lg:h-[10rem]">
                    <img class="w-full h-full object-cover object-center rounded-t-lg" :src="business?.images[0]?.url" alt="image">
                </div>
                <div class="rounded-b-lg border-x border-b p-3">
                    <p class="text-neutral-700 font-medium text-sm group-hover:text-primary-400 overflow-hidden overflow-ellipsis whitespace-nowrap">{{ business?.business_name }}</p>
                    <div class="flex gap-x-4 justify-between mb-2">
                        <div>
                            <small class="text-neutral-600 text-[0.7rem]">Category</small>
                            <p class="text-neutral-800 text-sm font-medium">{{ business?.category?.category_name }}</p>
                        </div>
                        <div>
                            <small class="text-neutral-600 text-[0.7rem]">Age</small>
                            <p class="text-neutral-800 text-sm font-medium">{{ business?.age }} {{ business?.age > 1 ? 'years' : 'year' }}</p>
                        </div>
                        <div>
                            <small class="text-neutral-600 text-[0.7rem]">Staffs</small>
                            <p class="text-neutral-800 text-sm font-medium">{{ business?.staffs }}</p>
                        </div>
                    </div>
                    <p class="text-neutral-700 flex items-center justify-between">
                        <span class="text-xs">Selling price</span>
                        <span class="text-sm font-semibold">{{ formatCurrency(business?.price) }}</span>
                    </p>
                </div>
            </Link>
        </div>

        <div v-show="businesses?.data?.length > 0" class="w-full mt-4 overflow-auto scrollbar-hide md:scrollbar-default col-span-12 flex md:justify-end">
            <Paginate :links="businesses?.links"/>
        </div>
    </section>
</template>
