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
    <div class="w-full flex justify-center items-center">
        <div class="bg-gray-200 p-2 flex flex-col gap-6 w-2/3">
            <div>
                <p class="font-bold text-xl">{{ props.cart.name }}</p>
                <p>{{ props.cart.description }}</p>
            </div>
            <div class="flex justify-between">
                <p>Quantity: {{ props.cart.qty }}</p>
                <p>${{ props.cart.price }}</p>
            </div>
        </div>
    </div>
</Layout>
</template>