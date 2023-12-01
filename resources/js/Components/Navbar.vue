<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import Button from 'primevue/button';
import { useToast } from 'primevue/usetoast';
import Avatar from 'primevue/avatar';
import Menu from 'primevue/menu';
import Login from './Auth/Login.vue';
import Register from './Auth/Register.vue';

const loginVisible = ref(false);
const registerVisible = ref(false);
const toast = useToast();

const menu = ref();
const items = ref([
    {
        label: 'Menu',
        items: [
            {
                label: 'Profile',
                icon: 'pi pi-user'
            },
            {
                label: 'Export',
                icon: 'pi pi-upload'
            },
            {
                separator: true
            },
            {
                label: 'Logout',
                icon: 'pi pi-sign-out',
                route: '/logout',
                method: 'post'
            },
        ]
    }
]);

const toggle = (event) => {
    menu.value.toggle(event);
};

const showMessage = () => {
    toast.add({ severity: 'success', summary: 'Success Message', detail: 'Message Content', life: 3000 });
}
</script>

<template>
    <!-- Topbar -->
    <nav class="w-full py-5 wrapper border-t-8 border-primary-400 font-body flex items-center justify-between">
        <div class="w-24 md:w-32">
            <img class="w-full" src="/images/logo.svg" alt="logo">
        </div>

        <ul class="w-full bg-white/80 backdrop-blur-md md:backdrop-blur-none md:w-fit gap-x-8 flex items-center justify-around text-xs md:text-sm fixed bottom-0 left-0 z-30 py-4 px-3 md:static">
            <li>
                <Link :class="$page.url === '/' ? 'border-black' : 'border-transparent text-neutral-400'" class="inline-block border-b-4 pb-2" href="/">Home</Link>
            </li>
            <li>
                <Link :class="$page.url === '/businesses' || $page.url === '/auctions' ? 'border-black' : 'border-transparent text-neutral-400'" class="inline-block border-b-4 pb-2" href="/businesses">Businesses</Link>
            </li>
            <li>
                <Link :class="$page.url === '/about' ? 'border-black' : 'border-transparent text-neutral-400'" class="inline-block border-b-4 pb-2" href="/about">About</Link>
            </li>
            <li>
                <Link :class="$page.url === '/postbusiness' ? 'border-black' : 'border-transparent text-neutral-400'" class="inline-block border-b-4 pb-2" href="/postbusiness">Post business</Link>
            </li>
        </ul>

        <section class="flex items-center">
            <button v-if="$page.props.auth?.user" v-ripple class="flex p-ripple items-center gap-2 outline-none hover:bg-primary-100 p-2 rounded-lg">
                <i v-badge class="bx bx-bell p-overlay-badge text-2xl"></i>
            </button>

            <div v-if="$page.props.auth?.user" class="w-0 h-6 border-l mx-4"></div>

            <div v-if="!$page.props.auth?.user" class="flex items-center gap-4">
                <button @click="loginVisible = true" class="btn text-primary-500 font-semibold">Login</button>
                <button @click="registerVisible = true" class="btn bg-primary-500 text-primary-200 font-semibold">Register</button>
            </div>
            <button v-else v-ripple class="flex p-ripple items-center gap-2 outline-none hover:bg-primary-100 p-1 md:p-2 rounded-lg" @click="toggle">
                <Avatar :image="$page.props.auth?.user?.avatar" shape="circle"/>
                <!-- <Avatar label="T" shape="circle"/> -->
                <p class="hidden lg:block font-medium text-sm">{{ $page.props.auth?.user?.fullname }}</p>
            </button>
            <Menu ref="menu" id="overlay_menu" :model="items" class="text-sm lg:text-xs" :popup="true">
                <template #item="{ item, props }">
                    <Link v-if="item.route" :href="item.route" v-bind="props.action" :method="item.method" as="button" custom>
                        <span :class="item.icon" />
                        <span class="ml-2">{{ item.label }}</span>
                    </Link>
                    <a v-else v-ripple :href="item.url" :target="item.target" v-bind="props.action">
                        <span :class="item.icon" />
                        <span class="ml-2">{{ item.label }}</span>
                    </a>
                </template>
            </Menu>
        </section>
    </nav>
    <Login v-model:visible="loginVisible"/>
    <Register v-model:visible="registerVisible"/>
</template>
