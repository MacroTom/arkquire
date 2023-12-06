<script setup>
import Sidebar from './Sidebar.vue';
import Topbar from './Topbar.vue';
import Toast from 'primevue/toast';
</script>

<template>
    <Toast/>
    <div class="relative flex items-start w-full h-screen">
        <!-- Sidebar -->
        <Sidebar/>
        <div class="w-full h-full lg:w-[calc(100%-6rem)] trans relative">
            <!-- Topbar -->
            <Topbar/>
            <!-- Main content -->
            <main class="w-full h-full max-h-[calc(100%-4rem)] lg:max-h-[calc(100%-5rem)] overflow-auto trans px-4 pt-4 md:px-8 lg:px-16">
                <slot/>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam velit quasi vitae tempore dicta minima corporis modi, ipsum fugiat pariatur, sint, iusto labore at quas earum. Excepturi atque laborum facilis ipsum repellendus dignissimos asperiores minima officiis itaque. Labore, quis! Iure hic libero officiis voluptate reprehenderit nihil, quasi optio molestiae aliquam ipsam itaque dicta quae error excepturi? Harum aut labore recusandae facilis beatae. Quae reprehenderit, explicabo sit voluptatem ducimus minima laudantium id est fugiat quas molestiae totam corporis ea, nisi odio quaerat eum soluta suscipit amet sed distinctio eaque ut. Nihil veritatis, iure non mollitia officiis facere, blanditiis vitae sint excepturi, unde quis corporis odit nam aliquid atque soluta cum quos doloremque! Iure, repellendus facilis quasi laboriosam autem aperiam voluptates ducimus sunt vero nostrum, vitae cum dolor cumque cupiditate blanditiis eius doloremque. Hic autem tempore, eos vel earum accusantium voluptatibus. Soluta culpa doloribus laudantium minus excepturi reiciendis totam natus molestiae aspernatur! Ducimus deserunt eos iusto labore expedita, minima placeat laboriosam inventore error assumenda? Reiciendis hic possimus minus non adipisci magni harum nobis! Dolorem laboriosam ab corrupti quia sunt laudantium vitae atque deserunt, autem, amet repudiandae voluptatum reprehenderit cupiditate neque nisi similique sequi ullam! Sit optio veniam voluptas ex aperiam. Deleniti esse eligendi dolor facere ratione vel placeat quibusdam quasi aliquam eius earum tenetur laborum nulla similique et nobis, officia iusto quaerat, exercitationem error neque qui. Dolorem beatae voluptatem, similique omnis aliquam doloribus id non quia minima quis temporibus. Alias dolores modi beatae labore exercitationem ex impedit? Quam non ab quibusdam, saepe nemo ratione aspernatur architecto, ipsum alias accusantium ducimus earum nihil optio impedit quas quis tenetur quo corporis fugit atque, quos totam officia odit! Iusto nostrum eos, iure dignissimos minima perferendis vero commodi qui! Impedit repellendus temporibus voluptatibus autem dignissimos tempore in error et soluta unde? Earum animi explicabo voluptatum aspernatur!
            </main>
        </div>
    </div>
</template>
