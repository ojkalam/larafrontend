<script setup>
import GuestLayout from '@/layouts/GuestLayout.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <GuestLayout>
        <Link :href="route('department.index')" class="bg-red-500">
            Go to Department page
        </Link>
        <p>Login page</p>
    </GuestLayout>
</template>
