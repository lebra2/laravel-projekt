<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import { ShoppingCartIcon } from '@heroicons/vue/24/solid'
</script>


<template>
    <nav class="bg-white border-gray-200 dark:bg-neutral-800">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
            <a href="#" class="flex items-center">
                <Link class="text-white self-center text-xl font-semibold whitespace-nowrap dark:text-white hover:underline" href="/">Brace</Link>
            </a>
            <div class="flex items-center gap-4">
                <a href="#" class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline hover:text-white">Login</a>
                <a href="#" class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline hover:text-white">Register</a>
                <Link class="text-white" href="/cart">  <ShoppingCartIcon class="h-6 w-6 text-white hover:opacity-50 duration-200"/> </Link>
            </div>
        </div>
    </nav>
    <div class="bg-neutral-900 max-w-screen h-36 flex justify-center items-center">
        <div>
            <Link class="text-white self-center text-4xl font-semibold whitespace-nowrap dark:text-white" href="/">Brace</Link>
        </div>

    </div>





    <nav class="bg-gray-50 dark:bg-neutral-800">
        <div class="py-3 px-4 mx-auto max-w-screen-xl md:px-6">
            <div class="flex items-center justify-center">
                <ul class="flex flex-row mt-0 mr-6 space-x-8 text-sm font-medium">
                    <li>
                        <Link class="text-white hover:underline" href="/">Bracelets</Link>
                    </li>
                    <li>
                        <Link class="text-white hover:underline" href="/contact">Contact</Link>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:underline">New</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:underline">Features</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>