<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

const props = defineProps({
    products:{
        type: Object, 
        default: null
    }
})
</script>

<template>
    <AuthenticatedLayout>
        <div v-for="(product, index) in products" :key="index" >
            Tere
        </div>
    </AuthenticatedLayout>
</template>