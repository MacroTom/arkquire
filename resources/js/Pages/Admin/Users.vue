<script setup>
import { defineOptions } from 'vue';
import { Head } from '@inertiajs/vue3';
import layout from '../../Layouts/Admin/Dashboard/Index.vue';
import Table from '../../Components/Table.vue';
import InputText from 'primevue/inputtext';

defineOptions({
    layout
});
</script>

<template>
    <Head>
        <title>Users</title>
    </Head>
    <section class="w-full">
        <header class="w-full mb-8">
            <h3 class="text-2xl font-semibold md:text-3xl text-neutral-700">
                Users
            </h3>
        </header>
        <div class="flex items-start justify-end w-full mb-2">
            <span class="p-input-icon-right">
                <i class="pi pi-search" />
                <InputText v-model="value2" placeholder="Search" size="small"/>
            </span>
        </div>
        <div class="w-full">
            <Table :record="{}">
                <template #head></template>
                <template #body></template>
            </Table>
        </div>
    </section>
</template>
