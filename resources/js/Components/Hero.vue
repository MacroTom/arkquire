<script setup></script>

<template>
    <section class="w-full wrapper pb-8 pt-4 md:py-24 flex xl:gap-x-16">
        <!-- left -->
        <div class="w-full md:w-11/12 lg:w-8/12 space-y-10">
            <h1 class="text-neutral-800">
                #1 marketplace to buy and sell
                <span class="text-primary-400">Online businesses</span>
            </h1>
            <p class="w-full md:w-9/12 text-sm md:text-lg text-neutral-500">
                Buy an online business, become an acquisition entrepreneur, and invest in digital real estate.
            </p>
            <div class="w-full md:w-8/12 space-y-4">
                <div class="w-full md:w-fit overflow-auto flex gap-2 scrollbar-hide">
                    <span class="px-4 py-2 text-sm border border-black rounded-full flex justify-center items-center shrink-0">For sale</span>
                    <span class="px-4 py-2 text-sm rounded-full flex justify-center items-center text-neutral-400 shrink-0">Auction</span>
                    <span class="px-4 py-2 text-sm rounded-full flex justify-center items-center text-neutral-400 shrink-0">For lease</span>
                    <span class="px-4 py-2 text-sm rounded-full flex justify-center items-center text-neutral-400 shrink-0">Invest</span>
                </div>
                <div class="w-full flex gap-x-3 px-3 py-2 rounded-full border hover:border-primary-400 hover:ring-4 ring-primary-200">
                    <select class="outline-none flex-grow">
                        <option value="">Location</option>
                        <option value="Nigeria">Nigeria</option>
                    </select>

                    <input class="w-20 md:flex-grow outline-none border-l pl-2" type="text" placeholder="Search">

                    <button class="btn text-neutral-400 md:bg-primary-500 md:text-primary-200 font-semibold">
                        <span class="hidden md:block">Search</span>
                        <i class="bx bx-search md:hidden"></i>
                    </button>
                </div>
                <div class="w-full flex justify-end">
                    <button class="text-xs hover:text-primary-500">Advanced search</button>
                </div>
            </div>
        </div>

        <!-- right -->
        <div class="w-full lg:w-4/12 xl:w-6/12 hidden lg:flex items-center justify-end">
            <div class="w-full xl:w-9/12 rotate-[20deg] relative -top-10 xl:-top-20 -left-4 z-[2]">
                <img class="w-full object-contain pointer-events-none" src="/images/heroImage.png" alt="image">
            </div>
        </div>
    </section>
</template>
