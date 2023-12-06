<script setup></script>

<template>
    <section class="items-center justify-between hidden w-full py-6 border-b wrapper md:flex">
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

            <!-- TODO: Images - carousel -->
            <div class="w-full rounded-lg border md:hidden">
                <!-- Image container -->
                <div class="w-full relative">
                    <img class="w-full object-contain rounded-t-lg" src="/images/rectangle.png" alt="image"/>
                    <button class="px-3 py-2 rounded-full flex items-center gap-1 bg-primary-100 absolute right-2 bottom-2">
                        <i class="bx bxs-image text-neutral-600"></i>
                        <span class="text-xs">Show all</span>
                    </button>
                </div>

                <!-- Content -->
                <div class="w-full p-2 divide-y">
                    <div class="w-full py-4">
                        <span class="text-neutral-700 text-sm">Asking price</span>
                        <p class="text-neutral-700 text-lg font-semibold tracking-wide">₦7,500,000</p>
                    </div>
                    <div class="w-full py-4 space-y-4">
                        <button class="btn primary w-full">
                            Register interest
                        </button>
                        <button class="btn stroke w-full">
                            <i class="bx bx-show text-lg mr-1"></i>
                            <span>Watch</span>
                        </button>
                    </div>
                    <div class="w-full py-4">
                        <button class="btn w-full bg-[#EEF3FF] rounded-full text-[#2B56C7] text-xs">
                            Have a similar business? Get a free valuation
                        </button>
                    </div>
                </div>
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
        <div class="w-full min-h-[7rem] col-span-12 md:col-span-5 lg:col-span-4 xl:col-span-3 space-y-6">

            <!-- Info one -->
            <div class="w-full rounded-lg border hidden md:block">
                <!-- Image container -->
                <div class="w-full relative">
                    <img class="w-full object-contain rounded-t-lg" src="/images/rectangle.png" alt="image"/>
                    <button class="px-3 py-2 rounded-full flex items-center gap-1 bg-primary-100 absolute right-2 bottom-2">
                        <i class="bx bxs-image text-neutral-600"></i>
                        <span class="text-xs">Show all</span>
                    </button>
                </div>

                <!-- Content -->
                <div class="w-full px-5 py-3 divide-y">
                    <div class="w-full py-4">
                        <span class="text-neutral-700 text-sm">Asking price</span>
                        <p class="text-neutral-700 text-lg font-semibold tracking-wide">₦7,500,000</p>
                    </div>
                    <div class="w-full py-4 space-y-4">
                        <button class="btn primary w-full">
                            Register interest
                        </button>
                        <button class="btn stroke w-full">
                            <i class="bx bx-show text-lg mr-1"></i>
                            <span>Watch</span>
                        </button>
                    </div>
                    <div class="w-full py-4">
                        <button class="btn w-full bg-[#EEF3FF] rounded-full text-[#2B56C7] text-xs">
                            Have a similar business? Get a free valuation
                        </button>
                    </div>
                </div>
            </div>

            <!-- Info two -->
            <div class="w-full rounded-lg border p-5 space-y-4">
                <p class="text-neutral-800 text-lg font-semibold tracking-wide">About the seller</p>
                <div class="w-full flex items-center gap-2">
                    <div class="w-12 h-12 shrink-0">
                        <img class="w-full object-contain rounded-full" :src="$page.props.auth?.user?.avatar" alt="avatar"/>
                    </div>
                    <div class="w-[calc(100%-3rem)]">
                        <p class="flex items-center gap-1">
                            <span class="font-semibold text-neutral-800">Olokor Tina</span>
                            <i class='bx bxs-badge-check text-blue-500'></i>
                        </p>
                        <p class="flex items-center">
                            <i class='bx bx-map text-neutral-700'></i>
                            <span class="text-xs text-neutral-800">Asaba, Nigeria</span>
                        </p>
                    </div>
                </div>
                <div class="w-full text-sm text-neutral-800">
                    Looking for new opportunities to invest in.
                </div>
            </div>

            <!-- Info three -->
            <div class="w-full rounded-lg border p-5 space-y-4">
                <p class="text-neutral-800 text-lg font-semibold tracking-wide">Verification complete</p>
                <div class="w-full space-y-4">
                    <div class="w-full flex items-center gap-2">
                        <i class='bx bx-check-circle text-lg text-primary-500'></i>
                        <p class="text-neutral-700 text-sm">Email address</p>
                    </div>
                    <div class="w-full flex items-center gap-2">
                        <i class='bx bx-check-circle text-lg text-primary-500'></i>
                        <p class="text-neutral-700 text-sm">Phone number</p>
                    </div>
                    <div class="w-full flex items-center gap-2">
                        <i class='bx bx-check-circle text-lg text-primary-500'></i>
                        <p class="text-neutral-700 text-sm">Government issued ID</p>
                    </div>
                </div>
            </div>

            <div></div>
        </div>
    </section>
</template>
