<script>
import { Link } from '@inertiajs/vue3';

export default {
    components: {
        Link,
    },
};
</script>

<template>
    <div>
        <p>Header of the layout</p>
        <slot />
    </div>
</template>
