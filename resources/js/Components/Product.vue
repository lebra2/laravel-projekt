<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import { useForm } from '@inertiajs/inertia-vue3'

const props = defineProps({
    product:{
        type: Object, 
        default: null
    }
})

const form = useForm({
    product: props.product,
    qty: 1,

})

const submit = () => {
    form.post(route('card.add'), {
        preserveScroll: true,
        preserveState: false,
    })
}

</script>

<template>
    <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col ">
        <a href="#">
            <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1555982105-d25af4182e4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
            <div class="pt-3 flex items-center justify-between">
                <p class="">{{ product.name }}</p>
            </div>
            <p class="pt-1 text-gray-900">{{ product.price.formatted }}</p>
        </a>
            <form @submit.prevent="submit">
                <div>
                    <input 
                    id=""
                    v-model="form.qty"
                    >
                </div>

                <div>
                    <button class="bg-green-300 rounded p-2">
                        Add to Cart
                    </button>
                </div>
            </form>
    </div>
</template>