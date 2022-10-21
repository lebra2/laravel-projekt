<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <div class="flex flex-col min-h-screen">
        <nav class="h-20 w-full bg-gray-100" >test</nav>
        <main class="flex-1">
            <slot />
        </main>
        <footer class="h-20 w-full bg-gray-100">test</footer>
    </div>
</template>
