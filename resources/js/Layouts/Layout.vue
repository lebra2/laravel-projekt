<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/inertia-vue3';
import PageHeader from '@/Components/PageHeader.vue';
import Content from '@/Components/Content.vue';
import PageFooter from '@/Components/PageFooter.vue';

</script>

<template>
    <Head>
        <title>E-pood</title>
    </Head>
    <div class="flex flex-col min-h-screen">
        <PageHeader />
        <Content />
        <PageFooter />
    </div>



</template>
