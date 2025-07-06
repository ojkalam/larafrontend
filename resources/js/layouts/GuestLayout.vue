<script>
import { Link } from '@inertiajs/vue3';
//vue2 feature option api implementation
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
