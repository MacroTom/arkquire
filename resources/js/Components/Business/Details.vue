<script setup></script>

<template>
    <section class="items-center justify-between hidden w-full py-6 border-b wrapper md:flex border-primary-100">
        <div>
            <p class="text-lg text-neutral-700">About business</p>
        </div>
        <div class="flex items-center gap-6">
            <p class="text-sm font-medium text-neutral-700">Asking price: <span class="font-light tracking-wide">₦1,200,000</span></p>
            <p class="text-sm font-medium text-neutral-700">Views: <span class="font-light">5677</span></p>
            <p class="text-sm font-medium text-neutral-700">Watchers: <span class="font-light">155</span></p>
        </div>
    </section>
    <section class="w-full grid grid-cols-12 gap-y-8 py-4 my-4 wrapper font-body lg:gap-16">
        <!-- Left -->
        <div class="w-full col-span-12 md:col-span-7 lg:col-span-8 xl:col-span-9 min-h-[7rem] space-y-5">
            <small class="text-neutral-600 text-sm">E-commerce</small>
            <h3 class="font-body font-semibold text-xl md:text-2xl lg:text-3xl">
                BrightKen Apartment Stores
            </h3>

            <!-- Tags -->
            <div class="w-full flex items-center gap-4">
                <span class="flex items-center justify-center px-3 py-1 rounded-full border text-sm text-neutral-600">
                    Stores
                </span>
            </div>

            <!-- Basic properties -->
            <div class="w-full grid grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-x-4 divide-x">
                <div class="text-center first:text-left">
                    <small class="text-neutral-500 text-xs">
                        Type
                    </small>
                    <p class="text-neutral-700 font-medium">
                        Saas
                    </p>
                </div>
                <div class="text-center first:text-left">
                    <small class="text-neutral-500 text-xs">
                        Industry
                    </small>
                    <p class="text-neutral-700 font-medium">
                        Fintech
                    </p>
                </div>
            </div>

            <!-- Revenue -->
            <div class="w-full flex items-center gap-x-2">
                <p class="font-medium text-neutral-700">Revenue:</p> <span class="font-medium text-lg tracking-wider">₦7,500,000</span>
            </div>

            <!-- Properties -->
            <div class="w-full space-y-4">
                <div class="w-full flex items-stretch border-b last:border-none">
                    <div class="w-8 md:w-10 lg:w-20 flex items-center justify-center bg-primary-400 text-white shrink-0">
                        <i class="bx bx-map"></i>
                    </div>
                    <div class="p-4">
                        <p class="text-neutral-700 font-semibold">Location</p>
                        <small class="text-neutral-600">
                            Asaba, Nigeria
                        </small>
                    </div>
                </div>
                <div class="w-full flex items-stretch border-b last:border-none">
                    <div class="w-8 md:w-10 lg:w-20 flex items-center justify-center bg-primary-400 text-white shrink-0">
                        <i class="bx bxs-bank"></i>
                    </div>
                    <div class="p-4">
                        <p class="text-neutral-700 font-semibold">Description</p>
                        <small class="text-neutral-600">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti dolor unde autem minima, hic aut repellendus nihil labore, dolore iste commodi nisi. Minima sit ipsam voluptatem quidem voluptate, aliquam laborum?
                        </small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right -->
        <div class="w-full min-h-[7rem] border rounded col-span-12 md:col-span-5 lg:col-span-4 xl:col-span-3">

        </div>
    </section>
</template>
