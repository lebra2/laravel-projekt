<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>


<template>
    <nav class="bg-white border-gray-200 dark:bg-slate-900">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
            <a href="#" class="flex items-center">
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Brace</span>
            </a>
            
            <div class="flex items-center gap-4">
                <a href="#" class="mr-6 text-sm font-medium text-gray-500 dark:text-white hover:underline">EE</a>
                <Link href="#" class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">Log in</Link>
                <Link href="#" class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">Register</Link>
            </div>
        </div>
    </nav>
</template>