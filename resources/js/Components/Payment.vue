<script setup>

const submit = () => {
    axios.post(route('stripe.post'), {
        preserveScroll: true,
        preserveState: false,
    })
}
</script>

<template>

    <button @click="submit">test</button>

</template> 