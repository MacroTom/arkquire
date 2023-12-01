<script setup>
import InputText from 'primevue/inputtext';
import Avatar from 'primevue/avatar';
</script>

<template>
    <!-- Large screens -->
    <nav class="w-full h-20 hidden lg:flex items-center justify-between trans md:px-8 lg:px-16 sticky top-0 z-30 border-b backdrop-blur">
        <!-- Left -->
        <div>
            <InputText type="text" placeholder="Search" size="small"/>
        </div>

        <!-- Right -->
        <div class="flex items-center gap-4">
            <button v-badge class="w-10 h-10 flex items-center justify-center rounded-lg border p-overlay-badge">
                <i class="bx bx-bell bx-tada text-xl"></i>
            </button>
            <div class="h-10 border-l"></div>
            <div class="h-10 flex items-center gap-3">
                <Avatar image="https://lh3.googleusercontent.com/a/AAcHTtfIvf1qRzOu-ASk1cacucU75-lt4S1V6MMD2Iw-DvlKlgY=s96-c"
                  shape="circle" />
                <div class="flex flex-col items-start">
                    <p class="text-neutral-800 text-sm font-semibold">Esieba Okeoghene</p>
                    <small class="text-neutral-800 text-xs">okeesieba@gmail.com</small>
                </div>
            </div>
        </div>
    </nav>

    <!-- Small & Medium screens -->
    <nav class="w-full h-14 lg:hidden trans px-4 bg-white sticky top-0">

    </nav>
</template>
