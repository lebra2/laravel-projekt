<script setup>
import Layout from '@/Layouts/Layout.vue';
import { Head } from '@inertiajs/inertia-vue3';
import Product from '../Components/Product.vue';

const props = defineProps({
    products:{
        type: Object, 
        default: null
    }
})

console.log(props.products);
</script>

<template>
    <Layout>
        <section class="bg-white py-8 ">

            <div class=" mx-auto flex items-center flex-wrap max-w-screen p-12  ">
                <Product 
                v-for="product in products.data"
                :key="product"
                :product="product"
                />
            </div>
        </section>
    </Layout>
</template>
