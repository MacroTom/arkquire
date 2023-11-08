<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <!-- Topbar -->
    <nav class="w-full py-5 wrapper border-t-8 border-primary-400 font-body flex items-center justify-between">
        <div class="w-24 md:w-32">
            <img class="w-full" src="/images/logo.svg" alt="logo">
        </div>

        <ul class="w-full bg-white/80 backdrop-blur-md md:backdrop-blur-none md:w-fit gap-x-8 flex items-center justify-around text-xs md:text-sm fixed bottom-0 left-0 z-30 py-4 px-3 md:static">
            <li>
                <Link class="inline-block border-b-4 border-black pb-2" href="#">Home</Link>
            </li>
            <li>
                <Link class="inline-block border-b-4 border-transparent pb-2 text-neutral-400" href="#">Businesses</Link>
            </li>
            <li>
                <Link class="inline-block border-b-4 border-transparent pb-2 text-neutral-400" href="#">Sell business</Link>
            </li>
            <li>
                <Link class="inline-block border-b-4 border-transparent pb-2 text-neutral-400" href="#">About</Link>
            </li>
        </ul>

        <div class="flex items-center gap-4">
            <button class="btn text-primary-500 font-semibold">Login</button>
            <button class="btn bg-primary-500 text-primary-200 font-semibold">Register</button>
        </div>
    </nav>
</template>
