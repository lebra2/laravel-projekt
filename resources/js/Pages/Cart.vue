<script setup>
import Layout from '@/Layouts/Layout.vue';
import CartCard from '@/Components/CartCard.vue'
import { ref } from 'vue';
import Payment from '@/Components/Payment.vue'

const props = defineProps({
    cart:{
        type: Object, 
        default: null
    }
})

console.log(props.cart)
const qty = ref()
</script>


<template>
<Layout>
    <div class="w-full flex flex-col gap-12 py-12 justify-center items-center">
        <CartCard v-for="(product, index) in props.cart" :key="index" :product="product"  />
    </div>
    <div>
        <Payment />
    </div>
</Layout>
</template>