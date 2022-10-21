<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>


<template>
    <nav class="w-full h-20 bg-gray-100">
        <div class="max-w-screen-lg h-full items-center flex flex-1 gap-4 mx-auto w-full" >
            <div class="flex gap-4 w-full justify-start text-yellow-900 text-xl cursor-pointer">
                <Link class="hover:text-red-500" href="#"><p>Contact</p></Link>
                <Link class="hover:text-red-500" href="#"><p>Products</p></Link>
                <Link class="hover:text-red-500" href="#"><p>Stuff</p></Link>
            </div>

            <div class="flex gap-4 w-full justify-end text-yellow-900 text-xl cursor-pointer">
                <Link class="hover:text-red-500" href="#"><p>Log in</p></Link>
                <Link class="hover:text-red-500" href="#"><p>Register</p></Link>
            </div>
        </div>

    </nav>
</template>