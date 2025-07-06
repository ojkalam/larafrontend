<script setup>
//setup used to composition api.
import GuestLayout from '@/layouts/GuestLayout.vue';
import { Link, Head } from '@inertiajs/vue3';

//this thing using option api and its old vue syntax now setup is used to replace tradiation export . component etc.
// export default {
//     components: {
//         GuestLayout,
//         Link,
//     },
// };

//using composition api in vue3 which is default
// import { ref } from 'vue';

// export default {
//   setup() {
//     const count = ref(0);
//     const increment = () => {
//       count.value++;
//     };
//     return { count, increment };
//   }
// };
</script>

<template>
    <GuestLayout>
        <Head :title="'Department title' + 10"> </Head>
        <Link :href="route('login')">Go to Login page </Link>
        <p>Department page</p>

        <input
            type="text"
            className="form-input rounded-full px-4 py-3 text-pink-500"
        />

        <span
            class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-blue-900 dark:text-blue-300"
        >
            Defaul
        </span>
        <span
            class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-gray-700 dark:text-gray-300"
        >
            Dark
        </span>
        <span
            class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-red-900 dark:text-red-300"
        >
            Red
        </span>
        <span
            class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-green-900 dark:text-green-300"
        >
            Green
        </span>
        <span
            class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-yellow-900 dark:text-yellow-300"
        >
            Yellow
        </span>
        <span
            class="bg-indigo-100 text-indigo-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-indigo-900 dark:text-indigo-300"
        >
            Indigo
        </span>
        <span
            class="bg-purple-100 text-purple-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-purple-900 dark:text-purple-300"
        >
            Purple
        </span>
        <span
            class="bg-pink-100 text-pink-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-pink-900 dark:text-pink-300"
        >
            Pink
        </span>
    </GuestLayout>
</template>
