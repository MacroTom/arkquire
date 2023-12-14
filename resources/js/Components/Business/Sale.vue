<script setup>
import { Link } from '@inertiajs/vue3';
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
            <Link href="#" class="w-full group" v-for="index in 6" :key="index">
                <div class="w-full">
                    <img class="w-full object-contain object-center rounded-t-lg" src="/images/meeting.jpeg" alt="image">
                </div>
                <div class="w-full rounded-b-lg border-x border-b p-3">
                    <p class="text-neutral-700 font-medium text-sm group-hover:text-primary-400">Business name</p>
                    <div class="flex gap-x-4 justify-between mb-2">
                        <div>
                            <small class="text-neutral-600 text-[0.7rem]">Category</small>
                            <p class="text-neutral-800 text-sm font-medium">FinTech</p>
                        </div>
                        <div>
                            <small class="text-neutral-600 text-[0.7rem]">Age</small>
                            <p class="text-neutral-800 text-sm font-medium">3 years</p>
                        </div>
                        <div>
                            <small class="text-neutral-600 text-[0.7rem]">Staffs</small>
                            <p class="text-neutral-800 text-sm font-medium">200</p>
                        </div>
                    </div>
                    <p class="text-neutral-700 flex items-center justify-between">
                        <span class="text-xs">Selling price</span>
                        <span class="text-sm font-semibold">₦750,000,000</span>
                    </p>
                </div>
            </Link>
        </div>
    </section>
</template>
