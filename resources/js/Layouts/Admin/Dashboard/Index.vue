<script setup>
import Sidebar from './Sidebar.vue';
import Topbar from './Topbar.vue';
</script>

<template>
    <div class="w-full h-screen flex">
        <!-- Sidebar -->
        <Sidebar/>
        <div class="w-full h-full lg:w-[calc(100%-5rem)] trans relative">
            <!-- Topbar -->
            <Topbar/>
            <!-- Main content -->
            <main class="w-full h-full max-h-[calc(100%-3.5rem)] lg:max-h-[calc(100%-5rem)] trans px-4 pt-4 md:px-8 lg:px-16">
                <slot/>
            </main>
        </div>
    </div>
</template>
