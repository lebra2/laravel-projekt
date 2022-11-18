<script setup>
import { Inertia } from '@inertiajs/inertia';
import { Link } from '@inertiajs/inertia-vue3';

import { ref, watch } from 'vue';

const props = defineProps({
    product:{
        type: Object, 
        default: null
    }
})

const qty = ref(props.product.qty);
watch(() => qty.value, newValue => {
    Inertia.post(route('cart.update', props.product.id), {qty: newValue})
});
</script>

<template>
    <div class="bg-gray-200 p-2 flex flex-col gap-6 w-2/3 rounded">
        <div>
            <div class="flex justify-between">
                <p class="font-bold text-xl">{{ product.name }}</p>
                <Link :href="route('cart.delete', product.id)" method="delete" as="button" type="button">x</Link>
            </div>
            <p>{{ product.description }}</p>
        </div>
        <div class="flex justify-between">
            <div class="flex gap-2">
                <p>Quantity:</p><input v-model="qty" class="rounded w-12 text-center">
            </div>
            <p>{{ product.total.formatted }}</p>
        </div>
    </div>
</template>