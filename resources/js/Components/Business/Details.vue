<script setup>
import currency from 'currency.js';
import Galleria from 'primevue/galleria';
import { ref } from 'vue';

import Table from '../../Components/Table.vue';

const formatCurrency = (value) => {
    return currency(value, {separator: ',', symbol: '₦', precision: 0}).format();
}

const showLargeGallery = ref(false);
const showSmallGallery = ref(false);

const responsiveOptions = ref([
    {
        breakpoint: '1500px',
        numVisible: 5,
        showThumbnails: false
    },
    {
        breakpoint: '1024px',
        numVisible: 3
    },
    {
        breakpoint: '768px',
        numVisible: 2
    },
    {
        breakpoint: '560px',
        numVisible: 9,
        containerStyle: 'max-width: 80%'
    }
]);
</script>

<template>
    <section class="items-center justify-between hidden w-full py-6 border-b wrapper md:flex">
        <div>
            <p class="text-lg text-neutral-700">About business</p>
        </div>
        <div class="flex items-center gap-6">
            <template v-if="$page.props.business?.transaction_type.toLowerCase() == 'auction'">
                <p class="text-sm font-medium text-neutral-700">Current bid: <span class="font-light tracking-wide">{{ $page.props.business?.bid > 0 ? formatCurrency($page.props.business?.bid) : formatCurrency($page.props.business?.price) }}</span></p>
                <p class="text-sm font-medium text-neutral-700">Starting bid: <span class="font-light tracking-wide">{{ formatCurrency($page.props.business?.price) }}</span></p>
            </template>
            <template v-else>
                <p class="text-sm font-medium text-neutral-700">Asking price: <span class="font-light tracking-wide">{{ formatCurrency($page.props.business?.price) }}</span></p>
            </template>
            <p class="text-sm font-medium text-neutral-700">Views: <span class="font-light">{{ $page.props.business?.views }}</span></p>
            <p class="text-sm font-medium text-neutral-700">Watchers: <span class="font-light">{{ $page.props.business?.watchers?.length }}</span></p>
        </div>
    </section>
    <section class="grid w-full grid-cols-12 py-4 my-4 gap-y-8 wrapper font-body lg:gap-16">
        <!-- Left -->
        <div class="w-full col-span-12 md:col-span-7 lg:col-span-8 xl:col-span-9 min-h-[7rem] space-y-6">
            <small class="text-sm text-neutral-600">{{ $page.props.business?.category?.category_name }}</small>
            <h3 class="text-xl font-semibold font-body md:text-2xl lg:text-3xl">
                {{ $page.props.business?.business_name }}
            </h3>

            <!-- Tags -->
            <div class="flex items-center w-full gap-4">
                <span class="flex items-center justify-center px-3 py-1 text-sm border rounded-full text-neutral-600">
                    On {{$page.props.business?.transaction_type}}
                </span>
            </div>

            <!-- Basic properties -->
            <div class="flex w-full gap-x-8">
                <div class="text-left">
                    <small class="text-xs text-neutral-500">
                        Type
                    </small>
                    <p class="font-medium capitalize text-neutral-700">
                        {{ $page.props.business?.business_type }}
                    </p>
                </div>
                <div class="text-left">
                    <small class="text-xs text-neutral-500">
                        Category
                    </small>
                    <p class="font-medium text-neutral-700">
                        {{ $page.props.business?.category?.category_name }}
                    </p>
                </div>
                <!-- <div class="text-left">
                    <small class="text-xs text-neutral-500">
                       Avg. monthly profit
                    </small>
                    <p class="font-medium text-neutral-700">
                        {{ formatCurrency($page.props.business?.profit) }}
                    </p>
                </div> -->
            </div>

            <!-- Revenue -->
            <div class="flex items-center w-full gap-x-2">
                <p class="text-sm text-neutral-600">Registration number:</p> <span class="">{{ $page.props.business?.business_number }}</span>
            </div>

            <!-- Images large- carousel -->
            <Galleria v-model:visible="showLargeGallery" :value="$page.props.business?.images" :responsiveOptions="responsiveOptions" :numVisible="9" containerStyle="max-width: 70%" :circular="true" :fullScreen="true" :showItemNavigators="true">
                <template #item="slotProps">
                    <img :src="slotProps.item.url" alt="image" style="width: 100%; display: block" />
                </template>
                <template #thumbnail="slotProps">
                    <img :src="slotProps.item.url" alt="image" style="display: block" />
                </template>
            </Galleria>
            <!-- Images small- carousel -->
            <Galleria v-model:visible="showSmallGallery" :value="$page.props.business?.images" :responsiveOptions="responsiveOptions" :numVisible="9" containerStyle="max-width: 85%" :circular="true" :fullScreen="true"  :showThumbnails="true">
                <template #item="slotProps">
                    <img :src="slotProps.item.url" alt="image" style="width: 100%; display: block" />
                </template>
                <template #thumbnail="slotProps">
                    <img :src="slotProps.item.url" alt="image" style="display: block" />
                </template>
            </Galleria>
            <div class="w-full border rounded-lg md:hidden">
                <!-- Image container -->
                <div class="relative w-full">
                    <img class="object-contain w-full rounded-t-lg" :src="$page.props.business?.images[0]?.url" alt="image"/>
                    <button @click="showSmallGallery = true" class="absolute flex items-center gap-1 px-3 py-2 rounded-full bg-primary-100 right-2 bottom-2">
                        <i class="bx bxs-image text-neutral-600"></i>
                        <span class="text-xs">Show all</span>
                    </button>
                </div>

                <!-- Content -->
                <div class="w-full p-2 divide-y">
                    <div class="w-full py-4">
                        <span v-if="$page.props.business?.transaction_type.toLowerCase() == 'auction'" class="text-sm text-neutral-700">Asking price</span>
                        <span v-else class="text-sm text-neutral-700">Asking price</span>
                        <p class="text-lg font-semibold tracking-wide text-neutral-700">{{ formatCurrency($page.props.business?.price) }}</p>
                    </div>
                    <div class="w-full py-4 space-y-4">
                        <button v-if="$page.props.business?.transaction_type.toLowerCase() == 'auction'" class="w-full btn primary">
                            Place bid
                        </button>
                        <button v-else class="w-full btn primary">
                            Register interest
                        </button>
                        <button class="w-full btn stroke">
                            <i class="mr-1 text-lg bx bx-show"></i>
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
                <div class="flex items-stretch w-full border-b last:border-none">
                    <div class="flex items-center justify-center w-8 text-white md:w-10 lg:w-20 bg-primary-400 shrink-0">
                        <i class="bx bx-info-circle"></i>
                    </div>
                    <div class="p-4">
                        <p class="font-semibold text-neutral-700">Description</p>
                        <small class="text-neutral-600">
                            {{ $page.props.business?.description }}
                        </small>
                    </div>
                </div>
                <div class="flex items-stretch w-full border-b last:border-none">
                    <div class="flex items-center justify-center w-8 text-white md:w-10 lg:w-20 bg-primary-400 shrink-0">
                        <i class="bx bx-hash"></i>
                    </div>
                    <div class="p-4">
                        <p class="font-semibold text-neutral-700">Age</p>
                        <small class="text-neutral-600">
                            {{ $page.props.business?.age }} {{ $page.props.business?.age > 1 ? 'years' : 'year' }}
                        </small>
                    </div>
                </div>
                <div class="flex items-stretch w-full border-b last:border-none">
                    <div class="flex items-center justify-center w-8 text-white md:w-10 lg:w-20 bg-primary-400 shrink-0">
                        <i class="bx bx-map"></i>
                    </div>
                    <div class="p-4">
                        <p class="font-semibold text-neutral-700">Location</p>
                        <small class="text-neutral-600">
                            {{ $page.props.business?.address }}
                        </small>
                    </div>
                </div>
                <div class="flex items-stretch w-full border-b last:border-none">
                    <div class="flex items-center justify-center w-8 text-white md:w-10 lg:w-20 bg-primary-400 shrink-0">
                        <i class="bx bx-buildings"></i>
                    </div>
                    <div class="p-4">
                        <p class="font-semibold text-neutral-700">Property</p>
                        <small class="text-neutral-600">
                            {{ $page.props.business?.property_type }}
                        </small>
                    </div>
                </div>
                <div class="flex items-stretch w-full border-b last:border-none">
                    <div class="flex items-center justify-center w-8 text-white md:w-10 lg:w-20 bg-primary-400 shrink-0">
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="p-4">
                        <p class="font-semibold text-neutral-700">Staffs</p>
                        <small class="text-neutral-600">
                            {{ $page.props.business?.staffs }}
                        </small>
                    </div>
                </div>
                <div class="flex items-stretch w-full border-b last:border-none">
                    <div class="flex items-center justify-center w-8 text-white md:w-10 lg:w-20 bg-primary-400 shrink-0">
                        <i class="bx bx-dollar"></i>
                    </div>
                    <div class="p-4">
                        <p class="font-semibold text-neutral-700">Profit margin</p>
                        <small class="text-neutral-600">
                            {{ $page.props.business?.profit_margin }}%
                        </small>
                    </div>
                </div>
            </div>

            <div v-if="$page.props.business?.transaction_type.toLowerCase() == 'auction'" class="w-full">
                <p class="mb-2 text-lg font-semibold text-neutral-700">Bid history</p>
                <Table :record="{}">
                    <template #head>
                        <tr>
                            <th>User</th>
                            <th>Bid amount</th>
                            <th>Initial bid</th>
                            <th>Time</th>
                        </tr>
                    </template>
                    <template #body>
                        <tr v-for="(user,index) in []" :key="index">
                            <td>
                                <div class="flex items-center gap-2">
                                    <button @click="populateData(user)" class="btn-small primary dark:bg-primary-dark">
                                        <i class="text-lg text-white bx bx-file"></i>
                                    </button>
                                    <button @click="selectedUser = user; confirmation.show = true" :disabled="processing" class="bg-red-500 btn-small">
                                        <i class="text-lg text-white bx bx-dislike"></i>
                                    </button>
                                    <button @click="selectedUser = user; manualPoints.show = true" class="btn-small bg-[var(--success)] dark:bg-success-dark">
                                        <i class="text-lg text-white bx bxs-bolt"></i>
                                    </button>
                                    <button @click="selectedUser = user; form.batch_id = user?.batch_id; batch.show = true" class="btn-small bg-slate-600 dark:bg-black/40">
                                        <i class="text-lg text-white bx bx-grid"></i>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="w-11 h-11">
                                    <img class="object-cover w-full rounded-lg" :src="user?.avatar" alt="avatar">
                                </div>
                            </td>
                            <td>{{ user?.fullname }}</td>
                            <!-- <td>
                                <span class="w-6 h-6 bg-[var(--primary)] dark:bg-primary-dark font-semibold text-xs flex justify-center items-center rounded-lg text-white">{{ user?.course_count }}</span>
                            </td> -->
                            <td>
                                <span class="w-6 h-6 bg-[var(--success)] dark:bg-success-dark font-semibold text-xs flex justify-center items-center rounded-lg text-white">{{ user?.course_point }}</span>
                            </td>
                            <td>
                                <span :class="user.status !== 'active' ? 'bg-red-400' : 'bg-[var(--success)] dark:bg-success-dark'" class="flex justify-center w-16 px-2 py-1 text-xs text-white rounded-lg">{{ user.status }}</span>
                            </td>
                            <td>{{ user?.email }} </td>
                            <td>{{ user?.batch ? user?.batch?.uid : 'N/A' }} </td>
                            <td>{{ formatDate(user?.created_at) }}</td>
                        </tr>
                    </template>
                </Table>
            </div>
        </div>

        <!-- Right -->
        <div class="w-full min-h-[7rem] col-span-12 md:col-span-5 lg:col-span-4 xl:col-span-3 space-y-6">

            <!-- Info one -->
            <div class="hidden w-full border rounded-lg md:block">
                <!-- Image container -->
                <div class="relative w-full">
                    <img class="object-contain w-full rounded-t-lg" :src="$page.props.business?.images[0]?.url" alt="image"/>
                    <button @click="showLargeGallery = true" class="absolute flex items-center gap-1 px-3 py-2 rounded-full bg-primary-100 right-2 bottom-2">
                        <i class="bx bxs-image text-neutral-600"></i>
                        <span class="text-xs">Show all</span>
                    </button>
                </div>

                <!-- Content -->
                <div class="w-full px-5 py-3 divide-y">
                    <div class="w-full py-4">
                        <template v-if="$page.props.business?.transaction_type.toLowerCase() == 'auction'">
                            <span class="text-sm text-neutral-700">Current bid</span>
                            <p class="text-lg font-semibold tracking-wide text-neutral-700">{{ $page.props.business?.bid > 0 ? formatCurrency($page.props.business?.bid) : formatCurrency($page.props.business?.price) }}</p>
                        </template>
                        <template v-else>
                            <span class="text-sm text-neutral-700">Asking price</span>
                            <p class="text-lg font-semibold tracking-wide text-neutral-700">{{ formatCurrency($page.props.business?.price) }}</p>
                        </template>
                    </div>
                    <div class="w-full py-4 space-y-4">
                        <button v-if="$page.props.business?.transaction_type.toLowerCase() == 'auction'" class="w-full btn primary">
                            Place bid
                        </button>
                        <button v-else class="w-full btn primary">
                            Register interest
                        </button>
                        <button class="w-full btn stroke">
                            <i class="mr-1 text-lg bx bx-show"></i>
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
            <div class="w-full p-5 space-y-4 border rounded-lg">
                <p class="text-lg font-semibold tracking-wide text-neutral-800">About the owner</p>
                <div class="flex items-center w-full gap-2">
                    <div class="w-12 h-12 shrink-0">
                        <img class="object-contain w-full rounded-full" :src="$page.props.business?.owner?.avatar" alt="avatar"/>
                    </div>
                    <div class="w-[calc(100%-3rem)]">
                        <p class="flex items-center gap-1">
                            <span class="font-semibold text-neutral-800">{{ $page.props.business?.owner?.fullname }}</span>
                            <i class='text-blue-500 bx bxs-badge-check'></i>
                        </p>
                        <p class="flex items-center" v-if="$page.props.business?.owner?.state && $page.props.business?.owner?.lga">
                            <i class='bx bx-map text-neutral-700'></i>
                            <span class="text-xs text-neutral-800">
                                {{ $page.props.business?.owner?.lga }}, {{ $page.props.business?.owner?.state }}
                            </span>
                        </p>
                    </div>
                </div>
                <div class="w-full text-sm text-neutral-800">
                    {{ $page.props.business?.owner?.bio }}
                </div>
            </div>

            <!-- Info three -->
            <!-- <div class="w-full p-5 space-y-4 border rounded-lg">
                <p class="text-lg font-semibold tracking-wide text-neutral-800">Verification complete</p>
                <div class="w-full space-y-4">
                    <div class="flex items-center w-full gap-2">
                        <i class='text-lg bx bx-check-circle text-primary-500'></i>
                        <p class="text-sm text-neutral-700">Email address</p>
                    </div>
                    <div class="flex items-center w-full gap-2">
                        <i class='text-lg bx bx-check-circle text-primary-500'></i>
                        <p class="text-sm text-neutral-700">Phone number</p>
                    </div>
                    <div class="flex items-center w-full gap-2">
                        <i class='text-lg bx bx-check-circle text-primary-500'></i>
                        <p class="text-sm text-neutral-700">Government issued ID</p>
                    </div>
                </div>
            </div> -->

        </div>
    </section>
</template>
