<script setup lang="ts">
import type { HTMLAttributes } from 'vue';
import { Heart } from 'lucide-vue-next';

defineOptions({
    inheritAttrs: false,
});

interface Props {
    className?: HTMLAttributes['class'];
}

defineProps<Props>();
</script>

<template>
    <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-rose-500 text-white">
        <Heart class="h-5 w-5 fill-current" />
    </div>
</template>
