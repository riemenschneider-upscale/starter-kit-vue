<script setup lang="ts">
import type { Paginated, Product } from '@/types';

type Props = {
    products: Paginated<Product>;
};

const props = defineProps<Props>();

console.log(props.products)
</script>

<template>
    <div>products</div>
    <div v-for="product in products.data">{{ product }}</div>
</template>

<style scoped></style>
