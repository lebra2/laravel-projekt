<script setup>
import Layout from '@/Layouts/Layout.vue';
import { Head } from '@inertiajs/inertia-vue3';
import Product from '../Components/Product.vue';
</script>

<template>
    <Layout>
        <section class="bg-white py-8 ">

            <div class=" mx-auto flex items-center flex-wrap max-w-screen p-12  ">
                <Product />
                <Product />
                <Product />
                <Product />
                <Product />
                <Product />
            </div>
    
        </section>
    </Layout>
</template>
