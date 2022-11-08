<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/inertia-vue3';
import PageFooter from '@/Components/PageFooter.vue';
import PageHeader from '@/Components/PageHeader.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head>
        <title>E-pood</title>
    </Head>
    <div class="flex flex-col min-h-screen">
        <PageHeader />
        <main class="flex flex-1">
            <slot />
        </main>
        <PageFooter />
    </div>



</template>
