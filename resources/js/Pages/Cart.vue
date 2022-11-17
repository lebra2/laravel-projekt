<script setup>
import Layout from '@/Layouts/Layout.vue';

const props = defineProps({
    cart:{
        type: Object, 
        default: null
    }
})

console.log(props.cart)
</script>


<template>
<Layout>
    <div class="w-full flex flex-col gap-12 py-12 justify-center items-center">
        <div v-for="(product, index) in props.cart" :key="index" class="bg-gray-200 p-2 flex flex-col gap-6 w-2/3 rounded">
            <div>
                <p class="font-bold text-xl">{{ product.name }}</p>
                <p>{{ product.description }}</p>
            </div>
            <div class="flex justify-between">
                <div class="flex gap-2">
                    <p>Quantity:</p><input v-model="product.qty" class="rounded w-12 text-center">
                </div>
                <p>{{ product.total.formatted }}</p>
            </div>
        </div>
    </div>
</Layout>
</template>