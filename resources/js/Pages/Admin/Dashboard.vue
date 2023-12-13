<script setup>
import { defineOptions } from 'vue';
import { Head } from '@inertiajs/vue3';
import layout from '../../Layouts/Admin/Dashboard/Index.vue';
import Paginate from '../../Components/Paginate.vue';

import moment from 'moment';

defineOptions({
    layout
});

const formatDate = (value) => {
    return moment(value).format('HH:mma DD/MM/yy');
};
</script>

<style scoped>
.tbl{
    @apply w-full
}
.tbl thead{
    @apply border-b
}
.tbl thead th{
    @apply p-3 text-left text-sm font-medium text-slate-600
}
.tbl tbody tr{
    @apply odd:bg-slate-100
}
.tbl tbody td{
    @apply p-3 text-sm md:text-xs text-slate-600 text-left whitespace-nowrap font-body
}
.tbl tbody td span.badge{
    @apply px-2 py-1 rounded-lg text-xs text-white tracking-wide
}
</style>

<template>
    <Head>
        <title>Dashboard</title>
    </Head>
    <div>
        <div class="col-span-12 md:max-h-[30rem] overflow-auto scrollbar-hide lg:scrollbar-default rounded-lg border dark:border-border-dark">
            <table class="tbl">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>Avatar</th>
                        <th>Fullname</th>
                        <!-- <th>Courses</th> -->
                        <th>Points</th>
                        <th>Status</th>
                        <th>Email</th>
                        <th>Batch</th>
                        <th>Registered</th>
                    </tr>
                </thead>
                <tbody>
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
                </tbody>
            </table>
        </div>

        <div v-show="users?.data?.length === 0" class="card col-span-12 min-h-[4rem] flex justify-center items-center">
            <p class="text-sm text-center text-slate-600 dark:text-dark">
                No users yet...
            </p>
        </div>

        <div v-show="users?.data?.length > 0" class="flex col-span-12 overflow-auto scrollbar-hide md:scrollbar-default md:justify-end">
            <Paginate :links="users?.links"/>
        </div>
    </div>
</template>
