<script setup></script>

<template>
    <section class="w-full min-h-[30vh] md:min-h-[20vh] lg:min-h-[30vh] wrapper flex flex-col items-center justify-center">
        <h3 class="w-full md:w-9/12 lg:w-8/12 font-head text-4xl font-semibold md:text-5xl text-neutral-800 text-center mb-6">
            #1 marketplace to buy and sell
            <span class="text-primary-400">Online businesses</span>
        </h3>
        <div class="w-full md:w-6/12 flex gap-x-3 px-3 py-2 rounded-full border hover:border-primary-400 hover:ring-4 ring-primary-200 mb-2">
            <select class="outline-none flex-grow">
                <option value="">All locations</option>
                <option value="Nigeria">Nigeria</option>
            </select>

            <input class="w-20 md:flex-grow outline-none border-l pl-2" type="text" placeholder="Find business">

            <button class="btn text-neutral-400 md:bg-primary-500 md:text-primary-200 font-semibold">
                <span class="hidden md:block">Search</span>
                <i class="bx bx-search md:hidden"></i>
            </button>
        </div>
        <div class="w-full md:w-6/12 flex justify-end mb-2">
            <button class="text-xs hover:text-primary-500">Advanced search</button>
        </div>
    </section>
</template>
